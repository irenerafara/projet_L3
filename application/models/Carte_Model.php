<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: irene
 * Description: Login model class
 */
class Carte_Model extends ANR_Model{
    
    protected $_table = "carte";
    protected $_key = "IDCarte";

    function __construct(){
        parent::__construct();
    }

    public function get_collecteurcat1($type) {
        switch($type) {    
            
            case 1:
                 return $this -> db -> select('IDCollecteurCat1 as id, concat(NomCollecteurCat1, " ", PrenomCollecteurCat1) as nom_prenom') -> get('collecteur_cat1') -> result_array();
            case 2: 
                 return $this -> db -> select('IDCollecteurCat2 as id, concat(NomCollecteurCat2, " ",PrenomCollecteurCat2 ) as nom_prenom') -> get('collecteur_cat2') -> result_array();
            case 3:
                return $this -> db -> select('IDComptoirDeFonte as id, concat(NomSocieteComptoirDeFonte, " ", MandataireComptoirDeFonte) as nom_prenom') -> get('comptoir_de_fonte') -> result_array();
            case 4:
                return $this -> db -> select('IDComptoirComm as id, concat(NomSocieteComptoirComm, " ", MandataireComptoirComm) as nom_prenom') -> get('comptoir_commerciale') -> result_array();
            case 5:
                return $this -> db -> select('IDOrpailleur as id, concat(NomOrpailleur, " ", PrenomOrpailleur) as nom_prenom') -> get('orpailleur') -> result_array();
            }
     }
    public function get_carte() {
         $query = $this -> db -> select('carte.*,
                                        (select concat(NomCollecteurCat1, " ", PrenomCollecteurCat1) from collecteur_cat1 where IDCollecteurCat1 = carte.IDCollecteurCat1) as nom_prenomcc1,
                                        (select concat(NomCollecteurCat2, " ", PrenomCollecteurCat2) from collecteur_cat2 where IDCollecteurCat2 = carte.IDCollecteurCat2) as nom_prenomcc2,
                                        (select concat(NomSocieteComptoirDeFonte, " ",MandataireComptoirDeFonte ) from comptoir_de_fonte where IDComptoirDeFonte = carte.IDComptoirDeFonte) as nom_prenomcf,
                                        (select concat(NomSocieteComptoirComm, " ", MandataireComptoirComm) from comptoir_commerciale where IDComptoirComm = carte.IDComptoirComm) as nom_prenomcc,
                                        (select concat(NomOrpailleur, " ", PrenomOrpailleur) from orpailleur where IDOrpailleur = carte.IDOrpailleur) as nom_prenomorp, 
                                        (select concat(NomCommune, " ", IDCommune) from commune where IDCommune = carte.IDCommune) as NomCommune')-> get('carte'); 
    return  $query -> result_array();
    
    $carte = $this -> db -> select('commune.NomCommune, carte.*') -> from('carte') 
    -> join('commune', 'commune.IDCommune = carte.IDCommune', 'inner') 
    -> get() -> result_array();
return $carte;
}
 
    public function get_communes(){
        $communes = $this->db->select('commune.*')->from('commune')->get()->result_array();
        return $communes;
}
public function save_carte($data_to_save, $id = null){ 
    if($id) {
        return $this -> db -> where('IDCarte', $id) -> update('carte', $data_to_save);
    } else {
        return $this -> db -> insert('carte', $data_to_save);
    }
}
public function delete_carte($id) {
    return $this -> db -> where('IDCarte', $id) -> delete('carte');
} 
}

?>