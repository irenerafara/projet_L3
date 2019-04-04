<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Exportateur_Model extends ANR_Model{
    
    protected $_table = "exportateur";
    protected $_key = "IDExportateur";

    function __construct(){
        parent::__construct();
    }

    
 }
?>