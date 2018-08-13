<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends CI_Controller {

      public function register()
      {


          $data['title']="Sign UP";

          $this->form_validation->set_rules('name','Name','required');
          $this->form_validation->set_rules('zipCode','ZipCode','required');
          $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
          $this->form_validation->set_rules('username','username','required|callback_check_username_exists');
          $this->form_validation->set_rules('password','Password','required');
          $this->form_validation->set_rules('confirmPassword','Confirm Password','matches[password]');


          if($this->form_validation->run()  ===  FALSE)
          {
                      $this->load->view('templates/header');
                      $this->load->view('users/register',$data);
                      $this->load->view('templates/footer');
          }
          else {
            $enc_password=md5($this->input->post('password'));

            $this->users_model->register($enc_password);

            //To set messege by Session
            $this->session->set_flashdata('user_registered','You are now registered and can now log in ');

            redirect('login');
            }

      }

      public function login()
      {


          $data['title']="Sign in";

          $this->form_validation->set_rules('username','username','required');
          $this->form_validation->set_rules('password','password','required');


          if($this->form_validation->run()  ===  FALSE)
          {
                      $this->load->view('templates/header');
                      $this->load->view('users/login',$data);
                      $this->load->view('templates/footer');
          }
          else {


            //To set messege by Session

            $username=$this->input->post('username');
            //Get and encrypt password
            $password=md5($this->input->post('password'));

            $user_id=$this->users_model->login($username,$password);

            if($user_id)
            {

              $user_data=  array(
                'user_id' =>  $user_id ,
                'username' =>  $username ,
                'logged_in' =>  true ,
               );

               $this->session->set_userdata($user_data);
              //To set messege by Session
              $this->session->set_flashdata('user_loggedin','You are now logged in Welcome '.$username);
              redirect('posts');
            }else {
              $this->session->set_flashdata('user_loggedin_failed','username or password is wrong ');
              redirect('users/login');
            }


            redirect('posts');
            }

      }


        //log OutOfBoundsException
        public function logout()
        {
        //unset user_data

        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('user_loggedout','You are now logged out goodbye '.$username);
        redirect('users/login');


        }

      //check if username enchant_broker_dict_exists

  public function check_username_exists($username)
      {
        $this->form_validation->set_message('check_username_exists','That username is taken. Please Choose a different username');

        if($this->users_model->check_username_exists($username)){
          return true;
        }else {
          return false;
        }
      }

    public  function check_email_exists($email)
      {
        $this->form_validation->set_message('check_email_exists','That email is taken. Please Choose a different email');

        if($this->users_model->check_email_exists($email)){
          return true;
        }else {
          return false;
        }
      }

}
