<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Formation_Model extends ANR_Model{
    
    protected $_table = "formation";
    protected $_key = "IDFormation";

    function __construct(){
        parent::__construct();

    }
        public function get_formations() {
            $formations = $this -> db -> select('commune.NomCommune, formation.*') -> from('formation') 
                                    -> join('commune', 'commune.IDCommune = formation.IDCommune') 
                                    -> get() -> result_array();
            return $formations;
        
    }
    public function get_communes(){
        $communes = $this->db->select('commune.*')->from('commune')->get()->result_array();
        return $communes;
    }  
}
?>