<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatCfCol1_Model extends ANR_Model{
    
    protected $_table = "acheter_collecteurcat1";
    protected $_key = "IDAchatCfCol1";

    function __construct(){
        parent::__construct();
    }

    public function get_achatcfcol1s() {
        //$query = $this -> db -> select('acheter_orpailleur_comptoirdefonte.*,
        //(select concat(NomSocieteComptoirDeFonte, " ", MandataireComptoirDeFonte) from acheter_orpailleur_comptoirdefonte where IDComptoirDeFonte =acheter_orpailleur_comptoirdefonte.IDComptoirDeFonte) as nom_prenomcf,
        //(select concat(NomOrpailleur, " ", PrenomOrpailleur) from orpailleur where IDOrpailleur = acheter_orpailleur_comptoirdefonte.IDOrpailleur) as nom_prenomorp') -> get('acheter_orpailleur_comptoirdefonte');
      //return  $query -> result_array();
        
        $achatcfcol1s = $this -> db -> select('collecteur_cat1.NomCollecteurCat1, achatcfcol1.*') -> from('achatcfcol1') 
                                -> join('collecteur_cat1', 'collecteur_cat1.IDCollecteurCat1 = achatcfcol1.IDCollecteurCat1', 'inner') 
                                -> get() -> result_array();
        return $achatcfcol1s;
    }
 
    public function get_col1(){
        $col1s = $this->db->select('collecteur_cat1.*')->from('collecteur_cat1')->get()->result_array();
        return $col1s;
    }
    public function get_achatcomptoirfonte() {
        $comptoirfontes = $this -> db->select('comptoirfonte.NomSocieteComptoirDeFonte, achatcfcol1.*') -> from('achatcfcol1') 
                                -> join('comptoir_de_fonte', 'comptoir_de_fonte.IDComptoirDeFonte = achatcfcol1.IDComptoirDeFonte', 'inner') 
                                -> get() -> result_array();
        return $comptoirfontes;
    }
    public function get_comptoirfonte(){
        $comptoirfonte= $this->db->select('comptoir_de_fonte.*')
                                   ->from('comptoir_de_fonte')
                                   ->get()
                                   ->result_array();
        return $comptoirfonte;
    }
    public function save_achatcfcol1($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatCfCol1', $id) -> update('acheter_collecteurcat1', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_collecteurcat1', $data_to_save);
        }
    }
    public function delete_achatcfcol1($id) {
        return $this -> db -> where('IDAchatCfCol1', $id) -> delete('acheter_collecteurcat1');
    }
}
?>