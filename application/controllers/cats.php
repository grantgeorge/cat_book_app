<?php

require APPPATH.'/libraries/REST_Controller.php';

class Cats extends REST_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cat_model');
  }

  public function index_get()
  {
    $cats = $this->cat_model->all();

    $this->output->set_output($cats);
  }

  public function index_post()
  {
    $new_cat = $_POST;

    $new_cat['id'] = $this->cat_model->create($_POST);

    $this->output->set_output($new_cat);
  }

  public function show_get($id)
  {
    $cat = $this->cat_model->find_by_id($id);

    $this->output->set_output($cat);
  }

  public function index_put()
  {
    print_r($this->put);
  }

  public function _output($output)
  {
    header('Content-Type: application/json');
    echo json_encode($output);
  }
}
