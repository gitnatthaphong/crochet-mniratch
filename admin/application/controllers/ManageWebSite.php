<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageWebSite extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManageWebSite_model', 'model');
	}

	public function index()
	{
		$data['titlePage'] = 'จัดการหน้าเว็บไซต์';
		$data['results'] = $this->model->getData();
		$data['errorField'] = $this->model->getTextError();
		parent::view('manageWebsite/index', $data);
	}

	public function save()
	{
		$this->model->save();
		redirect(base_url() . 'admin/ManageWebSite/');
	}

	public function reset()
	{
		$this->model->reset();
		redirect(base_url() . 'admin/ManageWebSite/');
	}

}
