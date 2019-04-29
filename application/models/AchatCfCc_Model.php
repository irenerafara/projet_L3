<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class AchatCfCc_Model extends ANR_Model{
    
    protected $_table = "acheter_comptoir_commerciale";
    protected $_key = "IDAchatCf";

    function __construct(){
        parent::__construct();
    }

    public function get_achatcfccs() {
        //$query = $this -> db -> select('acheter_orpailleur_comptoirdefonte.*,
        //(select concat(NomSocieteComptoirDeFonte, " ", MandataireComptoirDeFonte) from acheter_orpailleur_comptoirdefonte where IDComptoirDeFonte =acheter_orpailleur_comptoirdefonte.IDComptoirDeFonte) as nom_prenomcf,
        //(select concat(NomOrpailleur, " ", PrenomOrpailleur) from orpailleur where IDOrpailleur = acheter_orpailleur_comptoirdefonte.IDOrpailleur) as nom_prenomorp') -> get('acheter_orpailleur_comptoirdefonte');
      //return  $query -> result_array();
        
        $achatcfccs = $this -> db -> select('comptoir_commerciale.NomSocieteComptoirComm, achatcfcc.*') -> from('achatcfcc') 
                                -> join('comptoir_commerciale', 'comptoir_commerciale.IDComptoirComm = achatcfcc.IDComptoirComm', 'inner') 
                                -> get() -> result_array();
        return $achatcfccs;
    }
 
    public function get_comm(){
        $comms = $this->db->select('comptoir_commerciale.*')->from('comptoir_commerciale')->get()->result_array();
        return $comms;
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
    public function save_achatcfcc($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where('IDAchatCfCc', $id) -> update('acheter_comptoir_commerciale', $data_to_save);
        } else {
            return $this -> db -> insert('acheter_comptoir_commerciale', $data_to_save);
        }
    }
    public function delete_achatcfcc($id) {
        return $this -> db -> where('IDAchatCfCc', $id) -> delete('acheter_comptoir_commerciale');
    }
}
?>