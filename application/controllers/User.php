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
      $data['user'] = $this->member->getUserByID();

      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

      if ($this->form_validation->run() == false) {
         $data['title'] = ' My Profil';
         $data['dec'] = 'good';

         $this->load->view('templates/adm-header', $data);
         $this->load->view('templates/adm-sidebar', $data);
         $this->load->view('user/profile', $data);
         $this->load->view('templates/adm-footer');
      } else {
         $this->load->model('Member_model');
         $this->Member_model->updateprofil();
         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully update Profil.</div></div>');
         redirect('user');
      }
   }

   public function files()
   {
      $data['user'] = $this->member->getUserByID();
      $data['file'] = $this->Files_model->getAllFiles();

      $data['title'] = ' Files';
      $data['dec'] = 'good';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/files');
      $this->load->view('templates/adm-footer');
   }

   public function updateprofil()
   {
      $this->load->model('Member_model');
      $this->Member_model->updateprofil();
      $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully update Profil.</div></div>');
      redirect('user');
   }

   public function fileDelete($id)
   {
      $data = $this->Files_model->getFileByID($id);
      $file = './uploads/' . $data['file'];

      if (is_readable($file) && unlink($file)) {
         $this->db->delete('files', ['id' => $id]);

         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully delete File.</div></div>');
         redirect('user/files');
      } else {
         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger"><strong>ERROR!</strong> error to delete File.</div></div>');
         redirect('user/files');
      }
   }
}
