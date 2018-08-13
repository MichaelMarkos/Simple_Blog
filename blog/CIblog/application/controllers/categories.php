<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Categories extends CI_Controller {

      public function index()
      {


          $data['title']=" Categories ";


          $data['categories']=$this->category_model->get_categories();

          $this->load->view('templates/header');
          $this->load->view('categories/index',$data);
          $this->load->view('templates/footer');
      }

      public function create()
      {
        //check if login or no
        if(!$this->session->userdata('logged_in'))
        {
          redirect('users/login');
        }
        $data['title']="Create Categories ";
        $this->form_validation->set_rules('category_name','Category Name','required');

        if($this->form_validation->run()  === FALSE)
        {
          $this->load->view('templates/header');
          $this->load->view('Categories/create',$data);
          $this->load->view('templates/footer');

        }
        else {
          $this->category_model->create_category();
          //To set messege by Session
          $this->session->set_flashdata('category_created','Your Category  has been created ');

          redirect('categories');
        }
      }

      public function posts($id)
      {
        
        $category_name=$this->category_model->get_category($id);
        $data['title']=$category_name->name;

          $data['posts']=$this->post_model->get_post_by_category($id);
          $this->load->view('templates/header');
          $this->load->view('posts/index',$data);
          $this->load->view('templates/footer');


      }


}
