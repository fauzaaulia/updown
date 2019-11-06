<?php

class Files_model extends CI_Model
{

   public function getAllFiles()
   {
      return $this->db->get('files')->result_array();
   }

   public function getFileByID($id)
   {
      return $this->db->get_where('files', ['id' => $id])->row_array();
   }
}
