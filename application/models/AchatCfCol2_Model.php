<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatCfCol2_Model extends ANR_Model{
    
    protected $_table = "acheter_collecteurcat2";
    protected $_key = "IDAchatCfCol2";

    function __construct(){
        parent::__construct();
    }

    public function get_achatcfcol2s() {
        
        $achatcfcol2s = $this -> db -> select('collecteur_cat2.NomCollecteurCat2, achatcfcol2.*') -> from('achatcfcol2') 
                                -> join('collecteur_cat2', 'collecteur_cat2.IDCollecteurCat2 = achatcfcol2.IDCollecteurCat2', 'inner') 
                                -> get() -> result_array();
        return $achatcfcol2s;
    }
 
    public function get_col2(){
        $col2s = $this->db->select('collecteur_cat2.*')->from('collecteur_cat2')->get()->result_array();
        return $col2s;
    }
    public function get_achatcomptoirfonte() {
        $comptoirfontes = $this -> db->select('comptoirfonte.NomSocieteComptoirDeFonte, achatcfcol2.*') -> from('achatcfcol2') 
                                -> join('comptoir_de_fonte', 'comptoir_de_fonte.IDComptoirDeFonte = achatcfcol2.IDComptoirDeFonte', 'inner') 
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
    public function save_achatcfcol2($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatCfCol2', $id) -> update('acheter_collecteurcat2', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_collecteurcat2', $data_to_save);
        }
    }
    public function delete_achatcfcol2($id) {
        return $this -> db -> where('IDAchatCfCol2', $id) -> delete('acheter_collecteurcat2');
    }
}
?>