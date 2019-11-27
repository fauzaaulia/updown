<?php

class Chart_model extends CI_Model
{
   function getDataUpload()
   {
      $query = "SELECT count(id) AS total, hari_upload, tanggal_upload
                  FROM files
                  GROUP BY tanggal_upload
                  ORDER BY tanggal_upload DESC
                  LIMIT 7
                  ";

      return $this->db->query($query)->result_array();
   }

   function getTypeFile()
   {
      $query = "SELECT count(id) AS total, tipe_file
                  FROM files
                  GROUP BY tipe_file
                  ORDER BY tipe_file DESC
                  LIMIT 7
                  ";

      return $this->db->query($query)->result_array();
   }
}
