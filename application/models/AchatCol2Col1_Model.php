<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatCol2Col1_Model extends ANR_Model{
    
    protected $_table = "acheter_collecteurcat2_collecteurcat1";
    protected $_key = "IDAchatCol2Col1";

    function __construct(){
        parent::__construct();
    }

    public function get_achatcol2col1s() {
       
        
        $achatcol2col1s = $this -> db -> select('collecteur_cat1.NomCollecteurCat1, achatcol2col1.*') -> from('achatcol2col1') 
                                -> join('collecteur_cat1', 'collecteur_cat1.IDCollecteurCat1 = achatcol2col1.IDCollecteurCat1', 'inner') 
                                -> get() -> result_array();
        return $achatcol2col1s;
    }
 
    public function get_col1(){
        $col1s = $this->db->select('collecteur_cat1.*')->from('collecteur_cat1')->get()->result_array();
        return $col1s;
    }
    public function get_achatcol2s() {
        $col2s = $this -> db->select('col2.NomCollecteurCat2, achatcol2col1.*') -> from('achatcol2col1') 
                                -> join('collecteur_cat2', 'collecteur_cat2.IDCollecteurCat2 = achatcol2col1.IDCollecteurCat2', 'inner') 
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
    public function save_achatcol2col1($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatCol2Col1', $id) -> update('acheter_collecteurcat2_collecteurcat1', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_collecteurcat2_collecteurcat1', $data_to_save);
        }
    }
    public function delete_achatcol2col1($id) {
        return $this -> db -> where('IDAchatCol2Col1', $id) -> delete('acheter_collecteurcat2_collecteurcat1');
    }
}
?>