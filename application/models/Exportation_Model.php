<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Exportation_Model extends ANR_Model{
    
    protected $_table = "exportation";
    protected $_key = "IDexportation";

    function __construct(){
        parent::__construct();
    }

   
}
?>