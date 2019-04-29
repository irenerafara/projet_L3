<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatCol1_Model extends ANR_Model{
    
    protected $_table = "acheter_comptoir_commerciale_collecteurcat1";
    protected $_key = "IDAchatCollecteurCat1";

    function __construct(){
        parent::__construct();
    }

    public function get_achatcol1s() {
        
        $achatcol1s = $this -> db -> select('collecteur_cat1.NomCollecteurCat1, achatcol1.*') -> from('achatcol1') 
                                -> join('collecteur_cat1', 'collecteur_cat1.IDCollecteurCat1 = achatcol1.IDCollecteurCat1', 'inner') 
                                -> get() -> result_array();
        return $achatcol1s;
    }
 
    public function get_col1(){
        $col1s = $this->db->select('collecteur_cat1.*')->from('collecteur_cat1')->get()->result_array();
        return $col1s;
    }
    public function get_achatcomptoircomms() {
        $comptoircomm = $this -> db->select('comptoircomm.NomSocieteComm, achatcol1.*') -> from('achatcol1') 
                                -> join('comptoir_commerciale', 'comptoir_commerciale.IDComptoirComm = achatcol1.IDComptoirComm', 'inner') 
                                -> get() -> result_array();
        return $comptoircomm;
    }
    public function get_comptoircomm(){
        $comptoircomm = $this->db->select('comptoir_commerciale.*')
                                   ->from('comptoir_commerciale')
                                   ->get()
                                   ->result_array();
        return $comptoircomm;
    }
    public function save_achatcol1($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatCollecteurCat1', $id) -> update('acheter_comptoir_commerciale_collecteurcat1', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_comptoir_commerciale_collecteurcat1', $data_to_save);
        }
    }
    public function delete_achatcol1($id) {
        return $this -> db -> where('IDAchatCollecteurCat1', $id) -> delete('acheter_comptoir_commerciale_collecteurcat1');
    }
}
?>