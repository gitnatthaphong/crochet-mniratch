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

	public function form($id = FALSE, $post = [])
	{
		$data['titlePage'] = 'จัดการสินค้า';
		$data['titlePageAction'] = !empty($id) ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล';
		$data['id'] = !empty($id) ? $id : 0;
		$data['results'] = array_merge($this->model->getDetail($id), $post);
		parent::view('manageProduct/form', $data);
	}

	public function save($id = FALSE)
	{
		if($id) {
			$this->form_validation->set_rules('product_name', 'ProductName', 'edit_unique[product.product_name.product_id.'.$id.'.]', ['edit_unique' => 'ชื่อสินค้าซ้ำในระบบ']);
		} else {
			$this->form_validation->set_rules('product_name', 'ProductName', 'is_unique[product.product_name]', ['is_unique' => 'ชื่อสินค้าซ้ำในระบบ']);
		}

		if ($this->form_validation->run() == FALSE) {
			$this->form($id, $this->input->post());
		} else {
			!empty($id) ? $this->model->updateData($id) : $this->model->insertData();
			redirect(base_url() . 'admin/ManageProduct');
		}
	}

	public function delete($id = FALSE)
	{
		$this->model->delete($id);
		redirect(base_url() . 'admin/ManageProduct');
	}
}
