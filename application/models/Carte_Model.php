git<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Carte_Model extends ANR_Model{
    
    protected $_table = "carte";
    protected $_key = "IDCarte";

    function __construct(){
        parent::__construct();
    }
    public function get_cartes() {
        $cartes = $this -> db -> select('commune.NomCommune, commune.*') -> from('commune') 
                                -> join('commune', 'commune.IDCommune = carte.IDCommune', 'inner') 
                                -> get() -> result_array();
        return $cartes;
    }
 
    public function get_commune(){
        $communes = $this->db->select('commune.*')->from('commune')->get()->result_array();
        return $communes;
    }
    
   
}
?>