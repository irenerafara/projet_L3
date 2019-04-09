<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /* Author: Andri
    * Service d'authentification
    */
    class Authentification extends ANR_Controller{

        protected $_load_menus = false;
        protected $_secure = false;
        protected $_css = array("login.css");

        function __construct() {
            parent::__construct();
        }

        public function index() {
            $session_user = $this -> session -> userdata("session_utilisateur");
            if(isset($session_user)) {
                redirect("home");
            }
            if($_POST) {
                if($this -> input -> post('username') && $this -> input -> post('password')) {
                    $this -> load -> model('user_Model');
                    $result = $this -> user_Model ->validate();
                    if($result) {
                        redirect("home");
                    } else {
                        $this -> loadData('erreur', 'Login ou mot de passe incorrect');
                    }
                } else {
                    $this -> loadData('erreur', 'Veuillez remplir tous les champs SVP');
                }
            }
            $this -> loadPage('login');
        }

        public function deconnexion() {
            $this->session->unset_userdata('session_utilisateur'); 
            redirect('home');
        }
    }
?>