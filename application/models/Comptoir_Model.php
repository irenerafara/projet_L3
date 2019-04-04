<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Comptoir_Model extends ANR_Model{ 

    function __construct(){
        parent::__construct();
    }

    function get_comptoir_de_fonte(){
        $comptoir_de_fonte = $this->db->query('SELECT * FROM comptoir_de_fonte');
        return $comptoir_de_fonte->result_array();
     }

     function get_comptoir_commerciale(){
        $comptoir_commerciale = $this->db->query('SELECT * FROM comptoir_commerciale');
        return $comptoir_commerciale->result_array();
     }
     public function save_comptoircomm($data_to_save, $id = null){ 
        if($id) {
            return $this -> db -> where('IDComptoirComm', $id) -> update('comptoir_commerciale', $data_to_save);
        } else {
            return $this -> db -> insert('comptoir_commerciale', $data_to_save);
        }
    } 
    public function save_comptoirfonte($data_to_save, $id = null){ 
        if($id) {
            return $this -> db -> where('IDComptoirDeFonte', $id) -> update('comptoir_de_fonte', $data_to_save);
        } else {
            return $this -> db -> insert('comptoir_de_fonte', $data_to_save);
        }
    } 
    public function delete_comptoircomm($id) {
        return $this -> db -> where('IDComptoirComm', $id) -> delete('comptoir_commerciale');
    }
    public function delete_comptoirfonte($id) {
        return $this -> db -> where('IDComptoirDeFonte', $id) -> delete('comptoir_de_fonte');
    }
}
?>