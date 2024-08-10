<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'model');
	}

	public function index()
	{
		$data['titlePage'] = 'แดชบอร์ด';
		$data['countNewMessage'] = $this->model->getCountNewMessage();
		$data['countAllMessage'] = $this->model->getCountAllMessage();
		$data['countVisitWebSite'] = $this->model->getCountVisitWebSite();
		$data['visitWebSiteGraph'] = $this->model->getVisitWebSiteGraph();
		parent::view('home', $data);
	}
}
