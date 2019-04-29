<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatCol2Orp_Model extends ANR_Model{
    
    protected $_table = "acheter_collecteurcat2_orpailleur";
    protected $_key = "IDAchatCol2Orp";

    function __construct(){
        parent::__construct();
    }

    public function get_achatcol2orps() {
       
        
        $achatcol2orps = $this -> db -> select('orpailleur.NomOrpailleur, achatcol2orp.*') -> from('achatcol2orp') 
                                -> join('orpailleur', 'orpailleur.IDOrpailleur = achatcol2orp.IDOrpailleur', 'inner') 
                                -> get() -> result_array();
        return $achatcol2orps;
    }
 
    public function get_orpailleur(){
        $orpailleurs = $this->db->select('orpailleur.*')->from('orpailleur')->get()->result_array();
        return $orpailleurs;
    }
    public function get_achatcol2s() {
        $col2s = $this -> db->select('col2.NomCollecteurCat2, achatcol2orp.*') -> from('achatcol2orp') 
                                -> join('collecteur_cat2', 'collecteur_cat2.IDCollecteurCat2 = achatcol2orp.IDCollecteurCat2', 'inner') 
                                -> get() -> result_array();
        return $col2s;
    }
    public function get_col2(){
        $col2s = $this->db->select('collecteur_cat2.*')
                                   ->from('collecteur_cat2')
                                   ->get()
                                   ->result_array();
        return $col2s;
    }
    public function save_achatcol2orp($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatCol2Orp', $id) -> update('acheter_collecteurcat2_orpailleur', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_collecteurcat2_orpailleur', $data_to_save);
        }
    }
    public function delete_achatcol2orp($id) {
        return $this -> db -> where('IDAchatCol2Orp', $id) -> delete('acheter_collecteurcat2_orpailleur');
    }
}
?>