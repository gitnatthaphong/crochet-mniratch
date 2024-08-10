<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserProfile_model extends CI_Model
{
    private $users_tbl = 'users';

    public function getDetail($user_id = 1)
    {
        $this->db->where('user_id', $user_id);
        $data = $this->db->get($this->users_tbl)->row_array();

        if(!empty($data)) {
            return $data;
        } else {
            return [];
        }
    }

    public function update($user_id = 1)
    {

        
        $dataUpdate = $this->input->post();
        
        if(!empty($dataUpdate['password'])) {
            $dataUpdate['password'] = md5($dataUpdate['password']);  
        }  else {
            unset($dataUpdate['password']);
        }
        
        if(!empty($dataUpdate)) {
            $this->db->where('user_id', $user_id);
            $this->db->update($this->users_tbl, $dataUpdate);
        }
        
    }

}
