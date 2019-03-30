<?php

class Collecteur extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion de collecteur catégorie1";

    protected $_folder = "collecteur/";

    public function index() {
        $this -> loadPage('accueil');
    }

    public function collecteur_cat1() {
        $this -> loadPage('accueil_collecteur_cat1');
    }
    public function collecteur_cat2() {
        $this -> loadPage('accueil_collecteur_cat2');
    }     
  
    }

