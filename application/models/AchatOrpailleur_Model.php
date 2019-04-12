<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatOrpailleur_Model extends ANR_Model{
    
    protected $_table = "acheter_orpailleur_comptoirdefonte";
    protected $_key = "IDAchatOrpailleur";

    function __construct(){
        parent::__construct();
    }

    public function get_achatorpailleurs() {
        $achatorpailleurs = $this -> db -> select('orpailleur.NomOrpailleur, achatorpailleur.*') -> from('achatorpailleur') 
                                -> join('orpailleur', 'orpailleur.IDOrpailleur = achatorpailleur.IDOrpailleur', 'inner') 
                                -> get() -> result_array();
        return $achatorpailleurs;
    }
 
    public function get_orpailleur(){
        $orpailleurs = $this->db->select('orpailleur.*')->from('orpailleur')->get()->result_array();
        return $orpailleurs;
    }
    public function get_achatcomptoirfontes() {
        $comptoirfontes = $this -> db->select('comptoirfonte.NomSocieteComptoirDeFonte, achatorpailleur.*') -> from('achatorpailleur') 
                                -> join('comptoir_de_fonte', 'comptoir_de_fonte.IDComptoirDeFonte = achatorpailleur.IDComptoirDeFonte', 'inner') 
                                -> get() -> result_array();
        return $comptoirfontes;
    }
    public function get_comptoirfonte(){
        $comptoirfontes = $this->db->select('comptoir_de_fonte.*')->from('comptoir_de_fonte')->get()->result_array();
        return $comptoirfontes;
    }
    public function save_achatorpailleur($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatOrpailleur', $id) -> update('acheter_orpailleur_comptoirdefonte', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_orpailleur_comptoirdefonte', $data_to_save);
        }
    }
    public function delete_achatorpailleur($id) {
        return $this -> db -> where('IDAchatOrpailleur', $id) -> delete('acheter_orpailleur_comptoirdefonte');
    }
}
?>