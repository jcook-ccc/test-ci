<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* https://selftaughtcoders.com/build-a-simple-codeigniter-app/ */
class Todo_model extends CI_Model {

  // General model constructor function
  function __construct() {
    parent::__construct();
  }

  // Getting all the rows in the todos table
  function get_all_entries() {
    $query = $this->db->order_by('order', 'ASC')->get('todos');
    $results = array();
    foreach ($query->result() as $result) {
      $results[] = $result;
    }
    return $results;
  }

  // Get completed entries
/*  function get_completed_entries() {
    $query = $this->db->get_where('todos', array('complete'=>1));
    $results = array();
    foreach ($query->result() as $result) {
      $results[] = $result;
    }
    return $results;
  }*/

  function update_entries($update_info, )
}
