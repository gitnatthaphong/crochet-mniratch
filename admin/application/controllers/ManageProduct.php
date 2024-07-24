<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageProduct extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManageProduct_model', 'model');
	}

	public function index()
	{
		$data['titlePage'] = 'จัดการสินค้า';
		$data['results'] = $this->model->getData();

		parent::view('manageProduct/index', $data);
	}

	public function form($id = FALSE)
	{
		$data['titlePage'] = 'จัดการสินค้า';
		$data['titlePageAction'] = !empty($id) ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล';
		$data['id'] = !empty($id) ? $id : 0;
		parent::view('manageProduct/form', $data);
	}

	public function save($id = FALSE)
	{
		!empty($id) ? $this->model->updateData() : $this->model->insertData();
		redirect(base_url() . 'admin/ManageProduct');
	}

}
