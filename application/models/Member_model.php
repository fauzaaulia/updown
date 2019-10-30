<?php

class Member_model extends CI_Model
{

   public function getAllMember()
   {
      return $this->db->get('user')->result_array();
   }
}
