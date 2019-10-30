<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ud extends CI_Controller
{
   public function index()
   {
      $this->load->view('templates/header');
      $this->load->view('page/beranda');
      $this->load->view('templates/footer');
   }

   public function upload()
   {
      $this->load->view('templates/header');
      $this->load->view('page/upload');
      $this->load->view('templates/footer');
   }

   public function download()
   {
      $this->load->view('templates/header');
      $this->load->view('page/download');
      $this->load->view('templates/footer');
   }
}
