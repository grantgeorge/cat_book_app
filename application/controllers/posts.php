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
require_once APPPATH.'/libraries/Faker-master/src/autoload.php';;

class Posts extends REST_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('post_model');
  }

  public function index_get()
  {
    $posts = $this->post_model->all();

    $this->response($posts);
  }

  public function index_post()
  {
    $new_cat = $this->post();

    $new_cat['id'] = $this->post_model->create($this->post());

    $this->response($new_cat, 201);
  }

  public function cat_get($id)
  {
    $cat = $this->post_model->find_by_id($id);

    $this->response($cat);
  }

  public function cat_put($id)
  {
    $response = $this->post_model->update($id, $this->put());

    $this->response($response, 200);
  }

  public function cat_delete($id)
  {

    $this->post_model->delete($id);

    $message = array('id' => $id, 'message' => 'DELETED!');

    $this->response($message, 200);
  }

  public function test_get()
  {
    $faker = Faker\Factory::create();

    echo $faker->name;
  }

}
