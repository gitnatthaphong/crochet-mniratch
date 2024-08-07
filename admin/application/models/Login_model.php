<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    private $username = 'admin';
    private $password = 'may1234##';

    public function verifyCredential()
    {
        $post = $this->input->post();

        $access = false;
        if(!empty($post['username']) && !empty($post['password'])) {
            if($post['username'] == $this->username && $post['password'] == $this->password) {
                $this->session->userdata['username'] = $post['username'];
                $this->session->userdata['password'] = $post['password'];
                $token = $this->fnc_getToken();
                $this->session->userdata['token_web_mniratch'] = $token;

                set_cookie("token_web_mniratch", $token, time()+3600); // 1 h

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
