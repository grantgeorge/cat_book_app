<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/Faker-master/src/autoload.php';;

class Migration_Seed_cats extends CI_Migration {

  public function up()
  {

    $this->load->model('cat_model');
    $faker = Faker\Factory::create();

    $this->dbforge->drop_table('cats');

    $this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
    $this->dbforge->add_field("name varchar(255) DEFAULT NULL");
    $this->dbforge->add_field("email varchar(255) DEFAULT NULL");
    $this->dbforge->add_field("password varchar(255) DEFAULT NULL");
    $this->dbforge->add_field("fur_color varchar(255) DEFAULT NULL");
    $this->dbforge->add_field("created_at DATETIME DEFAULT NULL");
    $this->dbforge->add_field("updated_at DATETIME DEFAULT NULL");

    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->add_key('email');

    $this->dbforge->create_table('cats', TRUE);

    $insert_ids = array();

    for ($i=0; $i < 100; $i++) {
      $cat['name'] = $faker->name;
      $cat['email'] = $faker->email;
      $cat['password'] = $faker->password;
      $cat['fur_color'] = $faker->safeColorname;
      $cat['updated_at'] = $mysqltime = date ("Y-m-d H:i:s", time());
      $cat['created_at'] = $mysqltime = date ("Y-m-d H:i:s", time());

      $this->cat_model->create($cat);

      array_push($insert_ids, $this->db->insert_id());
    }

  }

  public function down()
  {

    for ($i=0; $i<count($insert_ids); $i++)
    {
      $this->cate_model->delete($i);
    }
  }

}
