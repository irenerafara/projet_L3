<?php

class Region extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion de région";

    protected $_folder = "region/";

    public function index() {
        $this -> loadPage('accueil');
    }

}
