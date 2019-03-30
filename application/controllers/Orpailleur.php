<?php

class   Orpailleur extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion des orpailleurs";

    protected $_folder = "Orpailleur/";

    public function index() {
        $this -> loadPage('accueil');
    }

}