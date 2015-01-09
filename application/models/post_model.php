<?php

class Post_model extends CI_Model {

  public function construct()
  {
    $this->load->database();
  }

  public function all($query_params = array())
  {
    $query = $this->db->get_where('posts', $query_params);
    return $query->result('Post_model');
  }

  public function find_by_id($id = FALSE)
  {
    $query = $this->db->get_where('posts', array('id' => $id));
    return $query->row(0,'Post_model');
  }

  public function create($new_post)
  {
    $new_post['created_at'] = date("Y-m-d H:i:s");
    $new_post['updated_at'] = date("Y-m-d H:i:s");

    $this->db->insert('posts', $new_post);

    $new_post['id'] = $this->db->insert_id();

    return $new_post;
  }

  public function update($id, $data)
  {
    $query = $this->db->get_where('posts', array('id' => $id));

    $post = $query->row(0, 'Post_model');

    $data['updated_at'] = date("Y-m-d H:i:s");

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
