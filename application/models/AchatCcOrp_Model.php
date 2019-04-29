<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatCcOrp_Model extends ANR_Model{
    
    protected $_table = "acheter_comptoircommerciale_orpailleur";
    protected $_key = "IDAchatCcOrp";

    function __construct(){
        parent::__construct();
    }

    public function get_achatccorps() {
        
        $achatccorps = $this -> db -> select('orpailleur.NomOrpailleur, achatccorp.*') -> from('achatccorp') 
                                -> join('orpailleur', 'orpailleur.IDOrpailleur = achatccorp.IDOrpailleur', 'inner') 
                                -> get() -> result_array();
        return $achatccorps;
    }
 
    public function get_orp(){
        $orps = $this->db->select('orpailleur.*')->from('orpailleur')->get()->result_array();
        return $orps;
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
    public function save_achatccorp($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatCcOrp', $id) -> update('acheter_comptoircommerciale_orpailleur', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_comptoircommerciale_orpailleur', $data_to_save);
        }
    }
    public function delete_achatccorp($id) {
        return $this -> db -> where('IDAchatCcOrp', $id) -> delete('acheter_comptoircommerciale_orpailleur');
    }
}
?>