<?php

class Migrate extends CI_Controller {

  public function show_current()
  {

    header('Content-Type: '.'application/json');

    $this->load->library('migration');

    $row = $this->db->get('migrations')->row();

    print_r($row->version);

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
