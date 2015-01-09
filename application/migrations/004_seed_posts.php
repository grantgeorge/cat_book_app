<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/Faker-master/src/autoload.php';;

class Migration_Seed_posts extends CI_Migration {

  public function up()
  {

    $this->load->model('post_model');
    $faker = Faker\Factory::create();

    $insert_ids = array();

    for ($i=0; $i < 60; $i++) {
      $post['cat_id'] = $faker->numberBetween($min = 1, $max = 60);
      $post['text'] = $faker->text($maxNbChars = 500);
      $post['updated_at'] = $mysqltime = date ("Y-m-d H:i:s", time());
      $post['created_at'] = $mysqltime = date ("Y-m-d H:i:s", time());

      $this->post_model->create($post);

      array_push($insert_ids, $this->db->insert_id());
    }

  }

  public function down()
  {

  }

}
