<?php

class Cats extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cat_model');
  }

  public function index()
  {

    header('Content-Type: '.'application/json');

    $cats = $this->cat_model->all();

    print_r(json_encode($cats));

    return true;
  }

  public function show($id)
  {

    header('Content-Type: '.'application/json');

    $cat = $this->cat_model->find_by_id($id);

    print_r(json_encode($cat));

    return true;
  }

  public function create()
  {
    header('Content-Type: '.'application/json');

    $new_cat = $_POST;

    $new_cat_id = $this->cat_model->create($_POST);

    $new_cat['id'] = $new_cat_id;

    print_r(json_encode($new_cat));

    return true;
  }
}
