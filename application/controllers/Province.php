<?php

class Province extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion de province";

    protected $_folder = "province/";

    public function index() {
        $this -> loadPage('accueil');
    }

}
