<?php

class Tests extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->library('unit_test');

    $this->cat_model_find_by_id();

    echo $this->unit->report();
  }

  public function cat_model_find_by_id()
  {
    $this->load->model('cat_model');

    $test = array_keys($this->cat_model->find_by_id(1));
    $expected_result = array('id', 'email', 'password', 'name', 'fur_color');
    $test_name = 'Tests getting a single cat';

    $this->unit->run($test, $expected_result, $test_name);
  }

}
