<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index()
   {
      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('password', 'Password', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/auth-header');
         $this->load->view('auth/login');
         $this->load->view('templates/auth-footer');
      } else {
         //validasi sukses
         $this->_login();
      }
   }

   private function _login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $this->db->get_where('user', ['username' => $username])->row_array();
      //jika user ada
      if ($user) {
         //jika user aktif
         if ($user['is_active'] == 1) {
            //cek password
            if (password_verify($password, $user['password'])) {
               //password benar
               $data = [
                  'username' => $user['username'],
                  'role_id' => $user['role_id'],
               ];
               $this->session->set_userdata($data);
               redirect('admin');
            } else {
               //password tidak sama
               $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Wrong password!</div></div>');
               redirect('auth');
            }
         } else {
            //tidak aktif
            $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Username has not ben activated!</div></div>');
            redirect('auth');
         }
      } else {
         //tidak ada
         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Username is not registered!</div></div>');
         redirect('auth');
      }
   }

   public function register()
   {
      $this->load->view('templates/auth-header');
      $this->load->view('auth/register');
      $this->load->view('templates/auth-footer');
   }


   public function logout()
   {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('role_id');

      $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success">You have been Logout!</div></div>');
      redirect('auth');
   }
}
