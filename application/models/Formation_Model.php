<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Formation_Model extends ANR_Model{
    
    protected $_table = "formation";
    protected $_key = "IDFormation";

    function __construct(){
        parent::__construct();

    }

    public function get_formations() {
        $formations = $this -> db -> select('commune.NomCommune, formation.*, (select count(*) from effectuer_formation where IDFormation = formation.IDFormation) as nbformateur, (select ( (select count(*) from assister_orpailleur where IDFormation = formation.IDFormation) + (select count(*) from assister_collecteurcat1 where IDFormation = formation.IDFormation))) as nbassistant ') -> from('formation') 
                                -> join('commune', 'commune.IDCommune = formation.IDCommune') 
                                -> get() -> result_array();
        return $formations;
        
    }
    
    public function get_communes(){
        $communes = $this->db->select('commune.*')->from('commune')->get()->result_array();
        return $communes;
    }  

    public function get_utilisateurs($id = null){
        $utilisateurs = $this->db->select('utilisateur.*') -> where("IDUtilisateur not in (select IDUtilisateur from effectuer_formation where IDFormation = '$id')") ->from('utilisateur')->get()->result_array();
        return $utilisateurs;
    }

    public function get_formateurs($id = null){
        $utilisateurs = $this -> db -> select('utilisateur.*, effectuer_formation.IDFormation') 
                                -> from('effectuer_formation')
                                -> join('utilisateur', 'utilisateur.IDUtilisateur = effectuer_formation.IDUtilisateur')
                                -> where("IDFormation", $id)
                                -> get() -> result_array();
        return $utilisateurs;
 
    }

    public function get_collecteurcat1s($id = null){
        $collecteurcat1s = $this -> db -> select('collecteur_cat1.*') -> where("IDCollecteurCat1 not in (select IDCollecteurCat1 from Assister_CollecteurCat1 where IDFormation = '$id')") 
                                    -> from('collecteur_cat1')
                                    -> get() -> result_array();
        return $collecteurcat1s;
    }

    public function get_orpailleurs($id = null){
        $collecteurcat1s = $this -> db -> select('orpailleur.*') -> where("IDOrpailleur not in (select IDOrpailleur from Assister_Orpailleur where IDFormation = '$id')") 
                                    -> from('orpailleur')
                                    -> get() -> result_array();
        return $collecteurcat1s;
    }

    public function get_assistantsCollecteur($id = null){ 
        $collecteurcat1s = $this -> db -> select('NomCollecteurCat1 as nom, PrenomCollecteurCat1 as prenom, Assister_CollecteurCat1.IDCollecteurCat1 as id, Assister_CollecteurCat1.IDFormation, (select "1") as type') 
                                    -> from('Assister_CollecteurCat1')
                                    -> join('Collecteur_cat1', 'collecteur_cat1.IDCollecteurCat1 = Assister_CollecteurCat1.IDCollecteurCat1')
                                    -> where("IDFormation", $id)
                                    -> get() -> result_array();
        return $collecteurcat1s;
    }

    public function get_assistantsOrpailleur($id = null){
        $orpailleurs = $this -> db -> select('NomOrpailleur as nom, PrenomOrpailleur as prenom, orpailleur.IDOrpailleur as id, Assister_Orpailleur.IDFormation, (select "2") as type') 
                                    -> from('Assister_Orpailleur')
                                    -> join('orpailleur', 'orpailleur.IDOrpailleur = Assister_Orpailleur.IDOrpailleur')
                                    -> where("IDFormation", $id)
                                    -> get() -> result_array();
        return $orpailleurs;
    }

    public function save_formateur($idformation, $iduser, $action = "add") {
        if($action == "add") {
            $info_form = array('IDUtilisateur' => $iduser,
                                'IDFormation' => $idformation);
            return $this -> db -> insert('effectuer_formation', $info_form);
        } else {
            return $this -> db -> where('IDUtilisateur', $iduser) -> where('IDFormation', $idformation) -> delete('effectuer_formation');
        }
    }
    
    public function save_assistants($idformation, $iduser, $table = "Assister_CollecteurCat1", $action = "add") {
        if($action == "add") {
            $info_form = array($table == "Assister_Orpailleur" ? "IDOrpailleur" : 'IDCollecteurCat1' => $iduser,
                                'IDFormation' => $idformation);
            return $this -> db -> insert($table, $info_form);
        } else {
            return $this -> db -> where($table == "Assister_Orpailleur" ? "IDOrpailleur" : 'IDCollecteurCat1', $iduser) -> where('IDFormation', $idformation) -> delete($table);
        }
    }
}
?>