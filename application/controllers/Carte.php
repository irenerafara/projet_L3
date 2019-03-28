<?php

class Carte extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion de carte";

    protected $_folder = "Carte/";

    public function index() {
        $this -> loadPage('accueil');
    }

}
