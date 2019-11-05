<?php

class Files_model extends CI_Model
{

   public function getAllFiles()
   {
      return $this->db->get('file')->result_array();
   }
}
