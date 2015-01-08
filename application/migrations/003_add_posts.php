<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_posts extends CI_Migration {

  public function up()
  {

    $this->dbforge->add_field("id int(11) NOT NULL AUTO_INCREMENT");
    $this->dbforge->add_field("cat_id int(11) DEFAULT NULL");
    $this->dbforge->add_field("text TEXT DEFAULT NULL");
    $this->dbforge->add_field("created_at DATETIME DEFAULT NULL");
    $this->dbforge->add_field("updated_at DATETIME DEFAULT NULL");

    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->add_key('cat_id');

    $this->dbforge->create_table('posts', TRUE);
  }

  public function down()
  {
    $this->dbforge->drop_table('posts');
  }

}
