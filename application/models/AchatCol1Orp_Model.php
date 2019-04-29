<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatCol1Orp_Model extends ANR_Model{
    
    protected $_table = "acheter_collecteurcat1_orpailleur";
    protected $_key = "IDAchatCol1Orp";

    function __construct(){
        parent::__construct();
    }

    public function get_achatcol1orps() {
       
        
        $achatcol1orps = $this -> db -> select('orpailleur.NomOrpailleur, achatcol1orp.*') -> from('achatcol1orp') 
                                -> join('orpailleur', 'orpailleur.IDOrpailleur = achatcol1orp.IDOrpailleur', 'inner') 
                                -> get() -> result_array();
        return $achatcol1orps;
    }
 
    public function get_orpailleur(){
        $orpailleurs = $this->db->select('orpailleur.*')->from('orpailleur')->get()->result_array();
        return $orpailleurs;
    }
    public function get_achatcol1s() {
        $col1s = $this -> db->select('col1.NomCollecteurCat1, achatcol1orp.*') -> from('achatcol1orp') 
                                -> join('collecteur_cat1', 'collecteur_cat1.IDCollecteurCat1 = achatcol1orp.IDCollecteurCat1', 'inner') 
                                -> get() -> result_array();
        return $col1s;
    }
    public function get_col1(){
        $col2s = $this->db->select('collecteur_cat1.*')
                                   ->from('collecteur_cat1')
                                   ->get()
                                   ->result_array();
        return $col2s;
    }
    public function save_achatcol1orp($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatCol1Orp', $id) -> update('acheter_collecteurcat1_orpailleur', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_collecteurcat1_orpailleur', $data_to_save);
        }
    }
    public function delete_achatcol1orp($id) {
        return $this -> db -> where('IDAchatCol1Orp', $id) -> delete('acheter_collecteurcat1_orpailleur');
    }
}
?>