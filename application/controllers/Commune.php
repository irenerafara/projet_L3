<?php

class Commune extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion de commune";

    protected $_folder = "Commune/";

    public function index() {
        $this -> loadPage('accueil');
    }

}
