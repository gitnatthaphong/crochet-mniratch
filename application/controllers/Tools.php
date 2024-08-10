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
				'field_value' => '<h2>งานถักไหมพรมคอตตอนซอฟท์ที่ดีที่สุดในการทำ<br>ตุ๊กตาและของตกแต่ง</h2>'
			];
			$dataInsert[] = [
				'field_name' => 'banner_detail',
				'field_value' => 'ค้นหาของขวัญสุดพิเศษได้ที่นี่ ไม่ว่าจะเนื่องในโอกาสสำคัญไหนๆ เราขอเป็นของขวัญอันล้ำค่าสำหรับคนพิเศษของคุณ'
			];
			$dataInsert[] = [
				'field_name' => 'total_shop',
				'field_value' => 0
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
			$dataInsert[] = [
				'field_name' => 'product_detail',
				'field_value' => 'สิ้นค้าทั้งหมดนี้เป็นส่วนหนึ่งของสินค้าที่ขายแล้ว หากต้องการสินค้ารูปแบบใหม่หรือสั่งทำสามารถติดต่อร้านค้าได้ทางเพจ Facebook หรือ Instagram'
			];
			$dataInsert[] = [
				'field_name' => 'about_detail',
				'field_value' => '<p>เรียนรู้เพิ่มเติมเกี่ยวกับ Crochet by <span style="color: #FFB1B1;">Mniratch</span></p>'
			];
			
			$this->db->insert_batch('sys_config', $dataInsert);
		}

		$sql = "CREATE TABLE IF NOT EXISTS `topics` (
			`topic_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`topic_name` varchar(255) NOT NULL,
			`topic_icon` varchar(255) NOT NULL,
			`topic_detail` TEXT DEFAULT NULL,
			`status` int NOT NULL,
			`create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($sql);


		$sql = "CREATE TABLE IF NOT EXISTS `message_user` (
			`message_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`name` varchar(255) NOT NULL,
			`email` varchar(255) NOT NULL,
			`message` TEXT NOT NULL,
			`is_viewed` int DEFAULT 0,
			`create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($sql);

		$sql = "CREATE TABLE IF NOT EXISTS `users` (
			`user_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`username` varchar(255) NOT NULL,
			`password` varchar(255) NOT NULL,
			`fname` varchar(255) NOT NULL,
			`lname` varchar(255) NOT NULL,
			`email` varchar(255) DEFAULT NULL,
			`is_active` int DEFAULT 1,
			`create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($sql);
		$count = $this->db->count_all_results('users');
		if($count == 0) {
			$dataInsert = [
				'username' => 'admin',
				'password' => md5('may1234##'),
				'fname' => 'ผู้ดูแลระบบ',
				'lname' => 'Crochet by Mniratch',
				'email' => 'admin@gmail.com',
			];
			$this->db->insert('users', $dataInsert);
		}


		$sql = "CREATE TABLE IF NOT EXISTS `about_content` (
			`about_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`title` varchar(255) NOT NULL,
			`detail` varchar(255) NOT NULL,
			`icon` varchar(255) NOT NULL,
			`create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($sql);
		$count = $this->db->count_all_results('about_content');
		if($count != 3) {
			$dataInsert = [];

			$dataInsert[] = [
				'title' => 'ทำไมถึงใช้ไหม คอตตอนซอฟท์',
				'detail' => '<p>ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์ หรือที่นิยมเรียกกันว่า ไหมด้าย ขนาด 20 เป็นไหมที่มีคุณภาพ เหมาะแก่การถักงานให้แน่น เรียบ แต่มีความหรูอยู่ในตัวชิ้นงาน</p>',
				'icon' => 'fa fa-lightbulb-o',
			];


			$dataInsert[] = [
				'title' => 'การออกแบบสินค้า',
				'detail' => '<p>มีการออกแบบการถักงานออกมาให้หลากหลาย ไม่ว่าจะตุ๊กตา ตัวเล็ก ตัวใหญ่ กระเป๋า ฯลฯ โดยการออกแบบจะเป็นตามเทรนที่กำลังมาแรงในวงการถักหรือสินค้าตามสไตล์ของลูกค้าเพื่อเป็นสินค้าสุด Special แบบไม่ซ้ำใครจากทางร้าน</p>',
				'icon' => 'fa fa-lightbulb-o',
			];

			$dataInsert[] = [
				'title' => 'การสั่งซื้อสินค้า',
				'detail' => '<p>สามารถติดต่อได้ที่หน้าเพจ Facebook: <a href="https://www.facebook.com/niratshoppingg/" target="_blank" class="text-link">Crochet by Mniratch</a> งานทุกชิ้นเป็นงานฝีมือ ทำตามออเดอร์เป็นส่วนใหญ่ ดังนั้นสินค้าจะใช้ระยะเวลาในการทำ และมีระยะเวลาในการจัดส่งพอสมควร</p>',
				'icon' => 'fa fa-lightbulb-o',
			];

			$this->db->insert_batch('about_content', $dataInsert);
		}

		die('Create Succsess');
	}
}
