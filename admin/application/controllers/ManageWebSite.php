<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageWebSite extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManageWebSite_model', 'model');
	}

	public function banner()
	{
		$data['titlePage'] = 'จัดการหน้าเว็บไซต์';
		$data['titlePageAction'] = 'แบนเนอร์';
		$data['results'] = $this->model->getData();
		parent::view('manageWebsite/banner', $data);
	}


	public function sales()
	{
		$data['titlePage'] = 'จัดการหน้าเว็บไซต์';
		$data['titlePageAction'] = 'เนื้อหาการนับ';
		$data['results'] = $this->model->getData();
		parent::view('manageWebsite/sales', $data);
	}


	public function contact()
	{
		$data['titlePage'] = 'จัดการหน้าเว็บไซต์';
		$data['titlePageAction'] = 'ติดต่อ';
		$data['results'] = $this->model->getData();
		parent::view('manageWebsite/contact', $data);
	}

	public function social()
	{
		$data['titlePage'] = 'จัดการหน้าเว็บไซต์';
		$data['titlePageAction'] = 'โซเชียล';
		$data['results'] = $this->model->getData();
		parent::view('manageWebsite/social', $data);
	}


	public function save()
	{
		$this->model->save();
		redirect(base_url() . 'admin/ManageWebSite/');
	}

	public function reset()
	{
		die('ss');
		$this->model->reset();
		redirect(base_url() . 'admin/ManageWebSite/');
	}

}
