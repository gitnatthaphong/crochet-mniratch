<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserProfile extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserProfile_model', 'model');
	}

	public function form($post = [])
	{
		$data['titlePage'] = 'แก้ไขข้อมูลผู้ใช้';
		$data['results'] = $this->model->getDetail();
        $data['post'] = $post;
		parent::view('userProfile/form', $data);
	}

    public function save()
    {
        $this->model->update();
        $this->form(['message' => 'แก้ไขข้อมูลสำเร็จ']);
    }

}
