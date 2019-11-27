<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->library('form_validation');
      $this->load->model('Member_model');
      $this->load->model('Files_model');
   }

   public function index()
   {
      $data['user'] = $this->Member_model->getUserByID();

      $data['title'] = ' Dashboard';
      $data['dec'] = 'good';
      $data['totmem'] = $this->Member_model->getTotalMember();
      $data['totfile'] = $this->Member_model->getTotalFile();

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/dashboard', $data);
      $this->load->view('templates/adm-footer');
   }

   public function getDataUpload()
   {
      $this->load->model('Chart_model', 'chart');
      $data = $this->chart->getDataUpload();
      echo json_encode($data);
      // print_r($cek);
      // exit();
   }

   public function member()
   {
      $data['user'] = $this->Member_model->getUserByID();
      $data['member'] = $this->Member_model->getAllMember();

      $data['title'] = ' Member';
      $data['dec'] = 'good';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/member', $data);
      $this->load->view('templates/adm-footer');
   }

   public function addmember()
   {
      $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
         'is_unique' => 'username sudah digunakan'
      ]);
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
         'is_unique' => 'email sudah digunakan'
      ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      if ($this->form_validation->run() == false) {
         $data['user'] = $this->Member_model->getUserByID();

         $data['title'] = ' Add Member';
         $data['dec'] = 'good';

         $this->load->view('templates/adm-header', $data);
         $this->load->view('templates/adm-sidebar', $data);
         $this->load->view('admin/addmember');
         $this->load->view('templates/adm-footer');
      } else {
         $data = [
            'name' => htmlspecialchars($this->input->post('nama', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'images' => $this->input->post('images'),
            'is_active' => 1,
            'date_created' => time()
         ];

         $this->db->insert('user', $data);
         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully add Member.</div></div>');
         redirect('admin/member');
      }
   }

   public function memberDelete($id)
   {
      $this->db->delete('user', ['id' => $id]);
      $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully delete Member.</div></div>');
      redirect('admin/member');
   }
}
