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
    protected $_default_css = array("plugins/bootstrap/bootstrap.min.css", "plugins/bootstrap/bootstrap-grid.min.css", "plugins/bootstrap/bootstrap-reboot.min.css", "plugins/chartist-js/dist/chartist.min.css", "plugins/chartist-js/dist/chartist-init.css", "plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css", "plugins/c3-master/c3.min.css", "style.css", "blue.css");
    protected $_default_js = array("plugins/jquery/jquery-3.3.1.min.js", "plugins/bootstrap/bootstrap.min.js", "plugins/bootstrap/bootstrap.bundle.min.js", "plugins/bootstrap/tether.min.js", "jquery.slimscroll.js", "waves.js", "sidebarmenu.js", "custom.min.js", "dashboard1.js",
                                        "plugins/sticky-kit-master/dist/sticky-kit.min.js", "plugins/chartist-js/dist/chartist.min.js", "plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js", "plugins/d3/d3.min.js", "plugins/c3-master/c3.min.js");

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
        if($this -> _secure) {
            $session_user = $this -> session -> userdata("session_utilisateur");
            if(!isset($session_user)) {
                redirect("authentification");
            } else if(!in_array($session_user['TypeUtilisateur'], $this -> _profils)) {
                redirect('home/message');
            }
        }
    }

    public function loadData($index, $value) {
        $this -> _DATA[$index] = $value ;
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

        foreach($this -> _models as $model) {
            $this -> load -> model($model);
        }
        $this -> load -> view('common/_layout', $this -> _DATA );
    }
}
