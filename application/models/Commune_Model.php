<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Commune_Model extends ANR_Model{
    
    protected $_table = "commune";
    protected $_key = "IDCommune";

    function __construct(){
        parent::__construct();
    }

    public function get_communes() {
        $communes = $this -> db -> select('region.NomRegion, commune.*') -> from('commune') 
                                -> join('region', 'region.IDRegion = commune.IDRegion', 'inner') 
                                -> get() -> result_array();
        return $communes;
    }
 
    public function get_region(){
        $regions = $this->db->select('region.*')->from('region')->get()->result_array();
        return $regions;
    }
    
}
?>