<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageMessage extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManageMessage_model', 'model');
	}

	public function index()
	{
		$data['titlePage'] = 'กล่องข้อความ';
		$data['results'] = $this->model->getData();
        
		parent::view('manageMessage/index', $data);
	}

    public function detail($message_id = null)
    {
        if(!$message_id) {
            redirect(base_url() . 'admin/manageMessage/');
        }
        $data['titlePage'] = 'กล่องข้อความ';
        $data['titlePageAction'] = 'รายละเอียด';
		$data['results'] = $this->model->getDetail($message_id);
		
		parent::view('manageMessage/detail', $data);
    }

}
