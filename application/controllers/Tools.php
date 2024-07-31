<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tools extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

	}

	public function createTable()
	{
		$sql = "CREATE TABLE IF NOT EXISTS `visits` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`page_url` text NOT NULL,
			`count` int(10) NOT NULL,
			PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($sql);


		$this->db->where('page_url', base_url());
		$count = $this->db->get('visits')->num_rows();

		if($count == 0) {
			$dataInsert = [
				'page_url' => base_url(),
				'count' => 0
			];
			
			$this->db->insert('visits', $dataInsert);
		}

		$sql = "CREATE TABLE IF NOT EXISTS `product` (
				`product_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
				`product_name` varchar(255) NOT NULL,
				`product_tags` text NOT NULL,
				`image_path` text NOT NULL,
				`image_original_name` text NOT NULL,
				`image_name` text NOT NULL,
				`status` int NOT NULL,
				`create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($sql);

		die('Create Succsess');
	}
}
