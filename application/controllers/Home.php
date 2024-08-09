<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'model');
		$this->model->updateCountSite();
	}

	public function index()
	{
		$data['counter'] = [
			'countSite' => $this->model->getCountSite(),
		];

		parent::view('home', $data);
	}

	public function sendMessage()
	{
		$this->model->sendMessage();
		
		$data = $this->defaultRespond;
        echo json_encode($data);
		die();
	}

	public function getDataSys()
	{
		$data = $this->defaultRespond;
		$data['result'] = $this->model->getDataSys();
        echo json_encode($data);
		die();
	}
}
