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
    return $query->row(0,'Cat_model');
  }

  public function create($new_cat)
  {
    $new_cat['created_at'] = date("Y-m-d H:i:s");
    $new_cat['updated_at'] = date("Y-m-d H:i:s");

    $this->db->insert('cats', $new_cat);

    $new_cat['id'] = $this->db->insert_id();

    return $new_cat;
  }

  public function update($id, $data)
  {
    $query = $this->db->get_where('cats', array('id' => $id));

    $cat = $query->row(0, 'Cat_model');

    $data['updated_at'] = date("Y-m-d H:i:s");

    $this->db->where('id', $id);
    $this->db->update('cats', $data);

    $updated_cat = (object) array_merge((array) $cat, (array) $data);

    return $updated_cat;
  }

  public function delete($id)
  {
    $this->db->delete('cats', array('id' => $id));
  }

}
