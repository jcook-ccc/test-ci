<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo_model extens CI_Model {

  // General model constructor function
  function __construct() {
    parent::__construct();
  }

  // Getting all the rows in the todos table
  function get_all_entries() {
    $query = $this->db->get('todos');
    $results = array();
    foreach ($query->result() as $result) {
      $results[] = $result;
    }
    return $results;
  }
}
