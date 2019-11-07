<?php

class Files_model extends CI_Model
{

   public function getAllFiles()
   {
      $query = "SELECT *
                  FROM files
                  ORDER BY tanggal_upload DESC";
      return $this->db->query($query)->result_array();
   }

   public function getFileByID($id)
   {
      return $this->db->get_where('files', ['id' => $id])->row_array();
   }
}
