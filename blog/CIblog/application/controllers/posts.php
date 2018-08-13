<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Posts extends CI_Controller {

      public function index()
      {



          $data['title']="latest Posts";


          $data['posts']=$this->post_model->get_posts();

          $this->load->view('templates/header');
          $this->load->view('posts/index',$data);
          $this->load->view('templates/footer');
      }

      //baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaarcode=====================================



      public function view($slug=NULL)
      {
        $data['post']=$this->post_model->get_posts($slug);

        $post_id=$data['post']['id'];

        $data['comment']=$this->comment_model->get_comment($post_id);

        if(empty($data['post']))
        {
          show_404();
        }
        $data['title']=$data['post']['title'];
        $this->load->view('templates/header');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');
      }


      public function create()
      {
        //check if login or no
        if(!$this->session->userdata('logged_in'))
        {
          redirect('users/login');
        }
        $data['title']='Create Post ';
        $data['category']=$this->post_model->get_category();

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');


        if($this->form_validation->run() === FALSE)
        {
          $this->load->view('templates/header');
          $this->load->view('posts/create',$data);
          $this->load->view('templates/footer');
        }else {

          //To upload File
          $config['upload_path']='./asset/images/posts';
          $config['allowed_types']='gif|jpg|png';
          $config['max_size']='4048';
          $config['max_width']='4080';
          $config['max_height']='4440';

          $this->load->library('upload',$config);
          $checkupload=$this->upload->do_upload();
          if(!$checkupload)
          {
            $errors= array('error' => $this->upload->display_errors());
            echo $errors;
            $post_image  ='noimage.jpg';
          }
          else {
            $data=  array('upload_data' => $this->upload->data() );
            $post_image=$_FILES['userfile']['name'];

          }

          //To set messege by Session
          $this->session->set_flashdata('post_created','Your Post has been created ');

          $this->post_model->set_post($post_image);
          redirect('posts');
        }

      }

      public function delete($id)
      {
        //check if login or no
        if(!$this->session->userdata('logged_in'))
        {
          redirect('users/login');
        }
        $this->post_model->delete_post($id);

        //To set messege by Session
        $this->session->set_flashdata('post_deleted','Your Post has been deleted ');


        redirect('posts');
      }

      public function Edit($slug)
      {

        //check if login or no
        if(!$this->session->userdata('logged_in'))
        {
          redirect('users/login');
        }
        $data['posts']=$this->post_model->get_posts($slug);
        $data['category']=$this->post_model->get_category();

        if(empty($data['posts']))
        {
          show_404();
        }
        $data['title']='Edit Post';
        $this->load->view('templates/header');
        $this->load->view('posts/Edit',$data);
        $this->load->view('templates/footer');


      }

      public function update()
      {

        //check if login or no
        if(!$this->session->userdata('logged_in'))
        {
          redirect('users/login');
        }
      $this->post_model->update_post($data);

      //To set messege by Session
      $this->session->set_flashdata('user_updated','Your Post has been Updated ');

      redirect('posts');
      }


}
