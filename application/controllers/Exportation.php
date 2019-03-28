<?php

class Exportation extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion de l'exportation";

    protected $_folder = "exportation/";

    public function index() {
        $this -> loadPage('accueil');
    }
    public function annuelle() {
        $this -> loadPage('accueil_annuelle');
    }
    public function mensuelle() {
        $this -> loadPage('accueil_mensuelle');

    }
    
    public function communale() {
        $this -> loadPage('accueil_communale');

    }
}
 
    