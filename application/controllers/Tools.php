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

		$sql = "CREATE TABLE IF NOT EXISTS `sys_config` (
			`field_name` TEXT,
			`field_value` TEXT DEFAULT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($sql);

		$count = $this->db->get('sys_config')->num_rows();
		if($count == 0) {
			$dataInsert = [];

			$dataInsert[] = [
				'field_name' => 'banner_title',
				'field_value' => 'งานถักไหมพรมคอตตอนซอฟท์ที่ดีที่สุดในการทำ ตุ๊กตาและของตกแต่ง'
			];
			$dataInsert[] = [
				'field_name' => 'banner_detail',
				'field_value' => 'ค้นหาของขวัญสุดพิเศษได้ที่นี่ ไม่ว่าจะเนื่องในโอกาสสำคัญไหนๆ เราขอเป็นของขวัญอันล้ำค่าสำหรับคนพิเศษของคุณ'
			];
			$dataInsert[] = [
				'field_name' => 'total_shop',
				'field_value' => null
			];
			$dataInsert[] = [
				'field_name' => 'contact_title',
				'field_value' => 'ติดตามข่าวสาร'
			];
			$dataInsert[] = [
				'field_name' => 'contact_detail',
				'field_value' => 'หากคุณต้องการติดตามข่าวสารหรือสอบถามการสั่งซื้อสินค้าได้ช่องทาง FaceBook และ Instragram ของเรา'
			];
			$dataInsert[] = [
				'field_name' => 'social_facebook',
				'field_value' => 'https://www.facebook.com/niratshoppingg/'
			];
			$dataInsert[] = [
				'field_name' => 'social_instagram',
				'field_value' => 'https://www.instagram.com/crochet_by_mniratch/'
			];
			$dataInsert[] = [
				'field_name' => 'social_email',
				'field_value' => null
			];
			$dataInsert[] = [
				'field_name' => 'banner_image',
				'field_value' => null
			];
			$dataInsert[] = [
				'field_name' => 'bg_count',
				'field_value' => null
			];
			
			$this->db->insert_batch('sys_config', $dataInsert);
		}

		die('Create Succsess');
	}
}
