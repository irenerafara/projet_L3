<?php

class Utilisateur extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion des utilisateurs";

    protected $_folder = "utilisateur/";

    public function index() {
        $this -> loadPage('accueil');
    }

}
