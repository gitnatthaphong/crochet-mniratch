<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function verifyCredential()
    {
        $post = $this->input->post();

        $access = false;
        if(!empty($post['username']) && !empty($post['password'])) {
            if($post['username'] == 'admin' && $post['password'] == 'may1234##') {
                $this->session->userdata['username'] = $post['username'];
                $this->session->userdata['password'] = $post['password'];
                $token = $this->fnc_getToken();
                $this->session->userdata['token'] = $token;

                set_cookie("token", $token, time()+3600); // 1 h

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
