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

    $this->response($cats);
  }

  public function index_post()
  {
    $new_cat = $this->post();

    $new_cat['id'] = $this->cat_model->create($this->post());

    $this->response($new_cat, 201);
  }

  public function show_get($id)
  {
    $cat = $this->cat_model->find_by_id($id);

    $this->response($cat);
  }

  public function index_put()
  {
    print_r($this->put());

    $this->cat_model->update($this->put());
  }

  public function remove_delete($id)
  {
    $this->response(array(
      'returned from delete:' => $id,
    ));
  }

}
