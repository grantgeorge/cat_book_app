<?php

class Post_model extends CI_Model {

  public function construct()
  {
    $this->load->database();
  }

  public function all()
  {
    $query = $this->db->get('posts');
    return $query->result('Post_model');
  }

  public function find_by_id($id = FALSE)
  {
    $query = $this->db->get_where('posts', array('id' => $id));
    return $query->row(0,'Post_model');
  }

  public function create($data)
  {
    $this->db->insert('posts', $data);

    return $this->db->insert_id();
  }

  public function update($id, $data)
  {
    $query = $this->db->get_where('posts', array('id' => $id));

    $post = $query->row(0, 'Post_model');

    $this->db->where('id', $id);
    $this->db->update('posts', $data);

    $updated_post = (object) array_merge((array) $post, (array) $data);

    return $updated_post;
  }

  public function delete($id)
  {
    $this->db->delete('posts', array('id' => $id));
  }

}
