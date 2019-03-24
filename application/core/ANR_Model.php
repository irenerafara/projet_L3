<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ANR_Model extends CI_Model {

    protected $_table = "";
    protected $_key = "";

    public function __construct() {
        parent::__construct();
    }

    public function get($id = null, $return_as_array = false) {
        if($id) $this -> db -> where($this -> _key, $id);
        $query = $this -> db -> get($this -> _table);
        return $return_as_array ? $query -> result_array() : $query -> result();
    }

    public function save($data_to_save, $id = null) {
        if($id) {
            return $this -> db -> where($this -> _key, $id) -> update($this -> _table, $data);
        } else {
            return $this -> db -> insert($this -> _table, $data);
        }
    }

    public function delete($id) {
        return $this -> db -> where($this -> _key, $id) -> delete($this -> _table);
    }
}