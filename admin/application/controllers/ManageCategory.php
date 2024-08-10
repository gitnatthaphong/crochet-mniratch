<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageCategory extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManageCategory_model', 'model');
	}

	public function index()
	{
        
		$data['titlePage'] = 'จัดการหมวดหมู่';
		$data['results'] = $this->model->getData();

		parent::view('manageCategory/index', $data);
	}

	public function form($id = FALSE, $post = [])
	{
		$data['titlePage'] = 'จัดการหมวดหมู่';
		$data['titlePageAction'] = !empty($id) ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล';
		$data['id'] = !empty($id) ? $id : 0;
		$data['results'] = array_merge($this->model->getDetail($id), $post);
		parent::view('manageCategory/form', $data);
	}

	public function save($id = FALSE)
	{
		if($id) {
			$this->form_validation->set_rules('topic_name', 'TopicName', 'edit_unique[topics.topic_name.topic_id.'.$id.'.]', ['edit_unique' => 'ชื่อหมวดหมู่ซ้ำในระบบ']);
		} else {
			$this->form_validation->set_rules('topic_name', 'TopicName', 'is_unique[topics.topic_name]', ['is_unique' => 'ชื่อหมวดหมู่ซ้ำในระบบ']);
		}

		if ($this->form_validation->run() == FALSE) {
			$this->form($id, $this->input->post());
		} else {
			!empty($id) ? $this->model->updateData($id) : $this->model->insertData();
			redirect(base_url() . 'admin/ManageCategory');
		}
	}

	public function delete($id = FALSE)
	{
		$this->model->delete($id);
		redirect(base_url() . 'admin/ManageCategory');
	}

}
