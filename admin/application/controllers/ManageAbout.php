<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageAbout extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManageAbout_model', 'model');
	}

	public function index()
	{
        
		$data['titlePage'] = 'จัดการเนื้อหาเกี่ยวกับ';
		$data['results'] = $this->model->getData();

		parent::view('manageAbout/index', $data);
	}

	public function form($id = FALSE)
	{
		$data['id'] = !empty($id) ? $id : show_404();
		$data['titlePage'] = 'จัดการเนื้อหาเกี่ยวกับ';
		$data['titlePageAction'] = !empty($id) ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล';
		$data['results'] = $this->model->getDetail($id);
		parent::view('manageAbout/form', $data);
	}

	public function save($id = FALSE)
	{
		if($id) {
			$this->form_validation->set_rules('title', 'TopicName', 'edit_unique[about_content.title.about_id.'.$id.'.]', ['edit_unique' => 'ชื่อรายการซ้ำในระบบ']);
		} else {
            show_404();
		}

		if ($this->form_validation->run() == FALSE) {
			$this->form($id, $this->input->post());
		} else {
			$this->model->updateData($id);
			redirect(base_url() . 'admin/manageAbout');
		}
	}

}
