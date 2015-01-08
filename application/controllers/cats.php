<?php

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package   CatBook
 * @subpackage  End Point
 * @category  Controller
 * @author    Grant George
 * @link    https://github.com/grantgeorge/cat_book_app
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
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

  public function cat_get($id)
  {
    $cat = $this->cat_model->find_by_id($id);

    $this->response($cat);
  }

  public function cat_put($id)
  {
    $response = $this->cat_model->update($id, $this->put());

    $this->response($response, 200);
  }

  public function cat_delete($id)
  {
    $cat = $this->cat_model->find_by_id($id);

    $cat->delete();

    $message = array('id' => $cat->id, 'message' => 'DELETED!');

    $this->response($message, 200);
  }

}
