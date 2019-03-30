<?php

class Formation extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion de formation";

    protected $_folder = "Formation/";

    public function index() {
        $this -> loadPage('accueil');
    }

}