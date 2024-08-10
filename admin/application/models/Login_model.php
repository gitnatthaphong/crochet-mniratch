<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    private $users_tbl = 'users';

    public function verifyCredential()
    {
        $post = $this->input->post();

        $access = false;
        if(!empty($post['username']) && !empty($post['password'])) {

            $this->db->where('username', $post['username']);
            $this->db->where('password', md5($post['password']));
            $data = $this->db->get($this->users_tbl)->row_array();
            
            if(!empty($data)) {
                $this->session->userdata['user_id'] = $data['user_id'];
                $this->session->userdata['email'] = $data['email'];
                $this->session->userdata['fname'] = $data['fname'];
                $this->session->userdata['lname'] = $data['lname'];
                $this->session->userdata['username'] = $post['username'];
                $this->session->userdata['password'] = $post['password'];
                $token = $this->fnc_getToken();
                $this->session->userdata['token_web_mniratch'] = $token;
    
                set_cookie("token_web_mniratch", $token, 60*60);
    
                $access = true;
            }

        }
        return $access;
    }

    private function fnc_getToken()
    {
        return sha1(md5(date('Ymdhis')).rand(1, 100));
    }

}
