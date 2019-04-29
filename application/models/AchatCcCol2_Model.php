<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatCcCol2_Model extends ANR_Model{
    
    protected $_table = "acheter_comptoircommerciale_collecteurcat2";
    protected $_key = "IDAchatCcCol2";

    function __construct(){
        parent::__construct();
    }

    public function get_achatcccol2s() {
        
        $achatcccol2s = $this -> db -> select('collecteur_cat2.NomCollecteurCat2, achatcccol2.*') -> from('achatcccol2') 
                                -> join('collecteur_cat2', 'collecteur_cat2.IDCollecteurCat2 = achatcccol2.IDCollecteurCat2', 'inner') 
                                -> get() -> result_array();
        return $achatcccol2s;
    }
 
    public function get_col2(){
        $col2s = $this->db->select('collecteur_cat2.*')->from('collecteur_cat2')->get()->result_array();
        return $col2s;
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
    public function save_achatcccol2($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatCcCol2', $id) -> update('acheter_comptoircommerciale_collecteurcat2', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_comptoircommerciale_collecteurcat2', $data_to_save);
        }
    }
    public function delete_achatcccol2($id) {
        return $this -> db -> where('IDAchatCcCol2', $id) -> delete('acheter_comptoircommerciale_collecteurcat2');
    }
}
?>