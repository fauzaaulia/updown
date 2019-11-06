<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->library('form_validation');
      $this->load->model('Member_model', 'member');
      $this->load->model('Files_model');
   }

   public function index()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

      if ($this->form_validation->run() == false) {
         $data['title'] = 'My Profil';
         $data['dec'] = 'good';

         $this->load->view('templates/adm-header', $data);
         $this->load->view('templates/adm-sidebar', $data);
         $this->load->view('user/profile', $data);
         $this->load->view('templates/adm-footer');
      } else {
         $this->load->model('Member_model');
         $this->Member_model->updateProfil();
         redirect('user');
      }
   }

   public function files()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
      $data['file'] = $this->Files_model->getAllFiles();

      $data['title'] = 'Files';
      $data['dec'] = 'good';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/files');
      $this->load->view('templates/adm-footer');
   }

   public function updateprofil()
   {
      $this->load->model('Member_model', 'member');
      $this->member->updateProfil();
   }
}
