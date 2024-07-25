<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageWebSite extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManageProduct_model', 'model');
	}

	public function index()
	{
		$data['titlePage'] = 'จัดการหน้าเว็บไซต์';
		
		parent::view('manageWebsite/index', $data);
	}

	public function save()
	{
        die('sss');
	}

}
