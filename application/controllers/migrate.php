<?php

class Migrate extends CI_Controller {

  public function show_current()
  {

    header('Content-Type: '.'application/json');

    $this->load->library('migration');

    $row = $this->db->get('migrations')->row();

    print_r($row->version);

  }

  public function set_to_migration($migration_number)
  {
    $this->load->library('migration');

    if ( ! $this->migration->version($migration_number))
    {
      show_error($this->migration->error_string());
    }
  }

  public function update_latest()
  {

    $this->load->library('migration');

    if ( ! $this->migration->current())
    {
      show_error($this->migration->error_string());
    }
  }

}
