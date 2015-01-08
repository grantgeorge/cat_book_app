<?php

class Cats extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cat_model');
  }

  public function index()
  {
    $cats = $this->cat_model->all();

    $this->output->set_output($cats);
  }

  public function show($id)
  {
    $cat = $this->cat_model->find_by_id($id);

    $this->output->set_output($cat);
  }

  public function create()
  {
    $new_cat = $_POST;

    $new_cat['id'] = $this->cat_model->create($_POST);

    $this->output->set_output($new_cat);
  }

  public function update()
  {
    print_r($this->put);
  }

  public function _output($output)
  {
    header('Content-Type: application/json');
    echo json_encode($output);
  }
}
