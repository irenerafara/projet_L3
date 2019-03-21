<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion des données ANOR";

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this -> loadPage('test');
    }
}