<?php

class Cat_model extends CI_Model {

  public function construct()
  {
    $this->load->database();
  }

  public function all()
  {
    $query = $this->db->get('cats');
    return $query->result('Cat_model');
  }

  public function find_by_id($id = FALSE)
  {
    $query = $this->db->get_where('cats', array('id' => $id));
    return $query->row_array();
  }

  public function create($data)
  {
    $this->db->insert('cats', $data);

    return $this->db->insert_id();
  }

  public function update($data)
  {
    $query = $this->db->get_where('cats', array('id' => $id));
  }

}
