<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Default controller that every controller should extend
 * Before creating a method, should look into the principle inside this controller
 * @Author Andri
 * @email andriaritiana@yahoo.fr
 */
class ANR_Controller extends CI_Controller {

    //To load variables into pages
    protected $_DATA = array();

    //Default items that must e used in all pages
    protected $_default_css = array("plugins/bootstrap/bootstrap.min.css","sb-admin.css", "vendor/fontawesome-free/css/all.min.css", "vendor/datatables/dataTables.bootstrap4.css", "default.css"); 
    protected $_default_js = array("vendor/jquery/jquery.min.js", "vendor/datatables/dataTables.bootstrap4.js", "vendor/datatables/jquery.dataTables.js", "vendor/bootstrap/js/bootstrap.bundle.min.js", "plugins/datatables-demo.js", "default.js", "sb-admin.min.js");

    //can be left empty               
    protected $_css = array();
    protected $_js = array();
    protected $_models = array();

    //for session control
    protected $_secure = true;
    protected $_load_menus = true;

    //coontrol des profils
    protected $_profils = array('A');

    //Page title that appear on top
    protected $_page_title = "ANOR";

    //Folder of the module
    protected $_folder = ""; //style nom_repertoire/

    //Default constructor
    public function __construct() {
        parent::__construct();
        foreach($this -> _models as $model) {
            $this -> load -> model($model);
        }
        if($this -> _secure) {
            $session_user = $this -> session -> userdata("session_utilisateur");
            if(!isset($session_user)) {
                redirect("authentification");
            } else if(!in_array($session_user['TypeUtilisateur'], $this -> _profils)) {
               redirect('/home/message');
            }
        }
    }

    //Load data into controller
    public function loadData($index, $value) {
        $this -> _DATA[$index] = $value ;
    }

    //Load Page without other contents
    public function loadPageAjax($view) {
        $this -> load -> view($this-> _folder."$view", $this -> _DATA);
    }

    /**
     * Load pages method
     */
    public function loadPage($page_url) {
        $this -> _DATA['css'] = array_merge($this -> _default_css, $this -> _css );
        $this -> _DATA['js'] = array_merge($this -> _default_js, $this -> _js );
        $this -> loadData('page', $this-> _folder.$page_url );
        $this -> loadData('page_title', $this -> _page_title );
        $this -> loadData('load_menus', $this -> _load_menus );
        
        $this -> load -> view('common/_layout', $this -> _DATA );
    }
}
