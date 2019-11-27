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
}
