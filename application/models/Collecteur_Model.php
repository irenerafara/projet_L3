<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Collecteur_Model extends ANR_Model{
   
    function __construct(){
        parent::__construct(); 
       
    }

    function get_collecteur_cat1(){
        $collecteur_cat1 = $this->db->query('SELECT * FROM collecteur_cat1');
        return $collecteur_cat1->result_array();
     }

     function get_collecteur_cat2(){
        $collecteur_cat2 = $this->db->query('SELECT * FROM collecteur_cat2');
        return $collecteur_cat2->result_array();
     }
     
     public function save_collecteurcat1($data_to_save, $id = null){ 
        if($id) {
            return $this -> db -> where('IDCollecteurCat1', $id) -> update('collecteur_cat1', $data_to_save);
        } else {
            return $this -> db -> insert('collecteur_cat1', $data_to_save);
        }
    } 
    public function save_collecteurcat2($data_to_save, $id = null){ 
        if($id) {
            return $this -> db -> where('IDCollecteurCat2', $id) -> update('collecteur_cat2', $data_to_save);
        } else {
            return $this -> db -> insert('collecteur_cat2', $data_to_save);
        }
    }
    public function delete_collecteurcat2($id) {
        return $this -> db -> where('IDCollecteurcat2', $id) -> delete('collecteur_cat2');
    }
    public function delete_collecteurcat1($id) {
        return $this -> db -> where('IDCollecteurcat1', $id) -> delete('collecteur_cat1');
    }
    
}
?>