<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Region_Model extends ANR_Model{
    
    protected $_table = "region";
    protected $_key = "IDRegion";

    function __construct(){
        parent::__construct();
    }

    
}
?>