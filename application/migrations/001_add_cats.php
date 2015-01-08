<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_cats extends CI_Migration {

  public function up()
  {

    $this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
    $this->dbforge->add_field("name varchar(255) NOT NULL DEFAULT ''");
    $this->dbforge->add_field("email varchar(255) NOT NULL DEFAULT ''");
    $this->dbforge->add_field("password varchar(255) NOT NULL DEFAULT ''");
    $this->dbforge->add_field("fur_color varchar(255) NOT NULL DEFAULT ''");

    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->add_key('email');

    $this->dbforge->create_table('cats', TRUE);
  }

  public function down()
  {
    $this->dbforge->drop_table('cats');
  }

}
