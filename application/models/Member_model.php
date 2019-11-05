<?php

class Member_model extends CI_Model
{

   public function getAllMember()
   {
      return $this->db->get('user')->result_array();
   }

   public function getTotalMember()
   {
      $query = "SELECT count(*) AS total
                  FROM user";
      return $this->db->query($query)->result_array();
   }

   public function getTotalFile()
   {
      $query = "SELECT count(*) AS total
                  FROM files";
      return $this->db->query($query)->result_array();
   }

   public function updateProfil()
   {
      $data = [
         'id' => $this->input->post('id'),
         'name' => $this->input->post('name'),
         'username' => $this->input->post('username'),
         'email' => $this->input->post('email')
      ];

      $this->db->where('id', $this->input->post('id'));
      $this->db->update('user', $data);
   }
}
