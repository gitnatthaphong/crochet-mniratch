<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Home_model', 'model');
		// $this->model->updateCountSite();
	}

	public function index()
	{
		$data['titlePage'] = 'Dashboard';
		parent::view('home', $data);
	}

	public function signOut()
	{
		die('sss');
	}
}
