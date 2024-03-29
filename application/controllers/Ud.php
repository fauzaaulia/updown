<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ud extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('Files_model');
   }

   public function index()
   {
      $this->load->view('templates/header');
      $this->load->view('page/beranda');
      $this->load->view('templates/footer');
   }

   public function upload()
   {
      $this->form_validation->set_rules('nama', 'File Name', 'required|trim');
      // $this->form_validation->set_rules('file', 'File', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header');
         $this->load->view('page/upload');
         $this->load->view('templates/footer');
      } else {
         $name = $this->input->post('nama');
         $file = $_FILES['file'];

         if ($file = '') {
            # code...
         } else {
            // setting konfigurasi upload
            $config['upload_path'] = './uploads/';
            $config['max_size']      = '102480';
            $config['allowed_types'] = 'gif|jpg|png|pdf|doc|exls|txt|rar|docx|doc|pptx|aia|zip|eps|ai|psd|cdr|ino|swf|';

            // load library upload
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">ERROR: Gagal upload file!</div>');
               redirect('ud/upload');
            } else {
               $file = $this->upload->data('file_name');
               $tipe = $this->upload->data('file_ext');
               $size = $this->upload->data('file_size');
            }
         }

         date_default_timezone_set('Asia/Jakarta');
         $hari = date('l');
         $tgl = date('Y-m-d');
         $jam = date('H:i') . " WIB";

         $data = array(
            'nama_file'       => $name,
            'file'            => $file,
            'tipe_file'       => $tipe,
            'ukuran_file'     => $size,
            'hari_upload'     => $hari,
            'tanggal_upload'  => $tgl,
            'jam_upload'      => $jam
         );

         $this->db->insert('files', $data);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">SUCCESS: Berhasil upload file!</div>');
         redirect('ud/upload');
      }
   }

   public function download()
   {
      $data['file'] = $this->Files_model->getAllFiles();

      $this->load->view('templates/header');
      $this->load->view('page/download', $data);
      $this->load->view('templates/footer');
   }

   public function blocked()
   {
      $this->load->model('Member_model', 'member');
      $data['user'] = $this->member->getUserByID();

      $data['title'] = 'Blocked';
      $data['dec'] = 'xxx';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('page/blocked', $data);
      $this->load->view('templates/adm-footer');
   }
}
