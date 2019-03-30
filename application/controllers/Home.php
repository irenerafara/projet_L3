<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends ANR_Controller {

    protected $_css = array('home.css');
    protected $_js = array('home.js');

    protected $page_title = "Gestion des données ANOR";

    protected $_profils = array('A', 'C', 'F');

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this -> loadPage('test');
    }

    public function message() {
        $this -> loadPage('common/error_profil_access');
    }
}