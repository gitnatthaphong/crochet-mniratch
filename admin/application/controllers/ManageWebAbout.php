<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageWebAbout extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManageWebSite_model', 'model');
	}

	public function index()
	{
        $data['titlePage'] = 'จัดการหน้าเว็บไซต์';
		$data['titlePageAction'] = 'เกี่ยวกับ';
		$data['results'] = $this->model->getData();
		parent::view('manageWebsite/about', $data);
	}

	public function save()
	{
        $this->model->save();
		redirect(base_url() . 'admin/ManageWebAbout/');
	}

    public function reset($type = FALSE)
	{
		$this->model->reset($type);
		redirect(base_url() . 'admin/ManageWebAbout/');
	}

}
