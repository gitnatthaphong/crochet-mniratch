<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageProduct extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Home_model', 'model');
		// $this->model->updateCountSite();
	}

	public function index()
	{
		$data['titlePage'] = 'จัดการสินค้า';
		parent::view('manageProduct/index', $data);
	}

	public function form($id = FALSE)
	{
		$data['titlePage'] = 'จัดการสินค้า';
		$data['titlePageAction'] = !empty($id) ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล';
		parent::view('manageProduct/form', $data);
	}

}
