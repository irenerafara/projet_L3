<?php

class Utilisateur extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');
     
    protected $page_title = "Gestion des utilisateurs";

    protected $_folder = "utilisateur/";
    protected $_models = array('User_model');

    public function index() {
        $utilisateurs= $this->User_model->get();
        $this->loadData('utilisateurs',$utilisateurs);
        $this -> loadPage('accueil');
    }

}
