<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todos extends CI_Controller {

  // General constructor
  public function __construct() {
    parent::__construct();

    // Load the model
    $this->load->model('todo_model');
  }

  public function index() {

    // Load data
    $all_todos = $this->todo_model->get_all_entries();

    // 2. pass to view
    $data = array();
    $data['todos'] = $all_todos;

    // 3. render
    $this->load->view('todos/index', $data);

  }

  public function update_completed() {
    $completed_todos = $this->input->post('completed');
    echo $completed_todos;
    foreach ($completed_todos as $todo_id) {
      echo 'The todo with id = ' . $todo_id
        . ' is marked as completed.<br>';
    }
  }

}
