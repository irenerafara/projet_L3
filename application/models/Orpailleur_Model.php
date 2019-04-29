<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Orpailleur_Model extends ANR_Model{
    
    protected $_table = "orpailleur";
    protected $_key = "IDOrpailleur";

    function __construct(){
        parent::__construct();
    }
    public function get_where($search_criteria) {
        $orpailleurs = $this -> db -> where('NomOrpailleur like', "%$search_criteria%")
                                -> or_where('PrenomOrpailleur like', "%$search_criteria%")
                                -> get($this -> _table)
                                -> result_array();
        return $orpailleurs;
    }
    public function save_orpailleur($data_to_save, $id = null){ 
        if($id) {
            return $this -> db -> where('IDOrpailleur', $id) -> update('orpailleur', $data_to_save);
        } else {
            return $this -> db -> insert('orpailleur', $data_to_save);
        }
    } 
    public function delete_orpailleur($id) {
        return $this -> db -> where('IDOrpailleur', $id) -> delete('orpailleur');
    }
   
}
?>