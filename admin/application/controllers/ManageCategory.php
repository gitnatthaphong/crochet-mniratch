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
		$data['ans'] = $this->model->getData();
        //_print_r($data);

		parent::view('manageCategory/index', $data);
	}

}
