<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('Member_model', 'member');
   }

   public function index()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'My Profil';
      $data['dec'] = 'good';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('user/profile', $data);
      $this->load->view('templates/adm-footer');
   }

   public function updateprofil()
   {
      $this->load->model('Member_model', 'member');
      $this->member->updateProfil();
   }
}
