<?php

class Comptoir extends ANR_Controller {

    protected $_css = array();
    protected $_js = array();

    protected $page_title = "Gestion de comptoir commerciale";

    protected $_folder = "comptoir/";

    public function index() {
        $this -> loadPage('accueil');
    }

    public function comptoir_commerciale() {
        $this -> loadPage('accueil_comptoir_com');
    }
    public function comptoir_de_fonte() {
        $this -> loadPage('accueil_comptoir_fonte');
    }     
  }
