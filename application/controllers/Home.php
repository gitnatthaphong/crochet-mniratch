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
		$data['counter'] = [
			'countSite' => $this->model->getCountSite(),
		];
		
		$this->model->updateCountSite();

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

	public function getDataProduct()
	{
		$data = $this->defaultRespond;
		$data['result'] = $this->model->getDataProduct();
        echo json_encode($data);
		die();
	}

	public function getDataCategory()
	{
		$data = $this->defaultRespond;
		$data['result'] = $this->model->getDataCategory();
        echo json_encode($data);
		die();
	}

	public function getDataAbout()
	{
		$data = $this->defaultRespond;
		$data['result'] = $this->model->getDataAbout();
        echo json_encode($data);
		die();
	}
}
