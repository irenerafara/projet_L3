<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class User_Model extends ANR_Model{
    
    protected $_table = "utilisateur";
    protected $_key = "IDUtilisateur";

    function __construct(){
        parent::__construct();
    }

    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
        $this -> db -> where('EmailUtilisateur', $username)
                    -> where('MotDePasseUtilisateur', sha1($password."*"));

        // Run the query
        $res = $this->db->get($this -> _table) -> row_array();
        // Let's check if there are any results
        
        if($res) {
            // If there is a user, then create session data
            $this->session->set_userdata(array("session_utilisateur" => $res));
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
?>