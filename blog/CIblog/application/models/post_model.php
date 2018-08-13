<?php

class Post_model extends CI_Model {

    public function __construct()
    {
      $this->load->database();
    }

    public function get_posts($slug = FALSE)
    {
      if($slug ===  FALSE)
      {
        $this->db->order_by('posts.id','DESC');
        $this->db->join('category','category.id = posts.category_id');
        $query= $this->db->get('posts');
        return $query->result_array();
      }

      $query= $this->db->get_where('posts',array('slug' => $slug ));
      return $query->row_array();

    }
    public function set_post($post_image)
    {
      $slug=url_title($this->input->post('title'));
      $title=$this->input->post('title');
      $body=$this->input->post('body');
      $category_id=$this->input->post('category_id');
      $data= array(
        'title' => $title,
        'body'  => $body,
        'slug'  => $slug,
        'category_id'=>$category_id,
        'user_id'=>$this->session->userdata('user_id'),
        'post_image' =>$post_image
      );


      $query=$this->db->insert('posts',$data);
      return $query;
    }
//baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaarcode=====================================
    public function set_barcode($store_image)
    {

      $barcode=$this->input->post('barcode');

      $data= array(
        'barcode' => $barcode,
        'imgbarcode' =>$store_image
      );


      $query=$this->db->insert('barcode',$data);
      return $query;
    }

    public function get_barcode()
    {

      $query  = $this->db->get('barcode');
        return  $query->result_array();
    }


    public function delete_post($id)
    {
      $this->db->where('id',$id);
      $query=$this->db->delete('posts');
      return $query;
    }

    public function update_post()
    {
      $id=$this->input->post('id');
      $slug=url_title($this->input->post('title'));
      $title=$this->input->post('title');
      $body=$this->input->post('body');
      $category_id=$this->input->post('category_id');

          $data=array(
            'title' => $title,
            'body'  => $body,
            'slug'  => $slug,
            'category_id'=>$category_id,
            'post_image'=>$_FILES['userfile']['name'],
          );


          $this->db->where('id',$id);
          $this->db->update('posts',$data);
    }

    public function get_category()
    {
      $this->db->order_by('name');
      $query  = $this->db->get('category');
    return  $query->result_array();
    }

    public function get_post_by_category($id)
    {
      $this->db->order_by('posts.id','DESC');
      $this->db->join('category','category.id=posts.category_id');

      $query=$this->db->get_where('posts', array('category_id' =>$id  ));
    return  $query->result_array();
    }
}
