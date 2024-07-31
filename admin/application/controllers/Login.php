<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model', 'model');
	}

	public function index($post = [])
	{
        $data = [];
        $data['post'] = $post;
		$this->load->view('login/index', $data);
	}

    public function login()
    {
        $access = $this->model->verifyCredential();
        if($access) {
            redirect(base_url() . 'admin/Home');
        } else {
            $post = $this->input->post();
            $post['error'] = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
            $this->index($post);
        }
    }

}
