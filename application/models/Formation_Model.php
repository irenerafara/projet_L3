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
        $formations = $this -> db -> select('commune.NomCommune, formation.*, (select count(*) from effectuer_formation where IDFormation = formation.IDFormation) as nbformateur, (select ( (select count(*) from assister_orpailleur where IDFormation = formation.IDFormation) + (select count(*) from assister_collecteurcat1 where IDFormation = formation.IDFormation))) as nbassistant ') -> from('formation') 
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