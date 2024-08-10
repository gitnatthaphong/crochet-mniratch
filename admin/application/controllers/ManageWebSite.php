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

	
	public function product()
	{
		$data['titlePage'] = 'จัดการหน้าเว็บไซต์';
		$data['titlePageAction'] = 'สินค้า';
		$data['results'] = $this->model->getData();
		parent::view('manageWebsite/product', $data);
	}

	
	public function about()
	{
		$data['titlePage'] = 'จัดการหน้าเว็บไซต์';
		$data['titlePageAction'] = 'เกี่ยวกับ';
		$data['results'] = $this->model->getData();
		parent::view('manageWebsite/about', $data);
	}


	public function save($type = FALSE)
	{
		$this->model->save();

		$link = 'banner';
		switch ($type) {
			case 2:
				$link = 'sales';
				break;
			case 3:
				$link = 'contact';
				break;
			case 4:
				$link = 'social';
				break;
			case 5:
				$link = 'about';
				break;
			case 6:
				$link = 'product';
				break;
			default:
				$link = 'banner';
				break;
		}

		redirect(base_url() . 'admin/ManageWebSite/' . $link);
	}

	public function reset($type = FALSE)
	{
		$this->model->reset($type);

		$link = 'banner';
		switch ($type) {
			case 2:
				$link = 'sales';
				break;
			case 3:
				$link = 'contact';
				break;
			case 4:
				$link = 'social';
				break;
			case 5:
				$link = 'about';
				break;
			case 6:
				$link = 'product';
				break;
			default:
				$link = 'banner';
				break;
		}

		redirect(base_url() . 'admin/ManageWebSite/' . $link);
	}

}
