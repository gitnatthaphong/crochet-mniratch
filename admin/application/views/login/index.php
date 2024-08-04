<?php
define('ASSETS_PATH', base_url() . 'admin/assets/');
define('LINK', base_url() . 'admin/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

	<link rel="apple-touch-icon" sizes="76x76" href="<?= ASSETS_PATH ?>images/logo/favicon.ico">
	<link rel="icon" href="<?= ASSETS_PATH ?>images/logo/favicon.ico">
	<title>Crochet by Mniratch | ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์</title>

	<meta name="csrf-token" content="OQkmAxwieyYlPAgbBAINdj5kPQ4dDjUCPaJz-uVOGHGUvLADPPm6_Qjm">

	<meta name="description" content="ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์ หรือที่นิยมเรียกกันว่า ไหมด้าย ขนาด 20 เป็นไหมที่มีคุณภาพ เหมาะแก่การถักงานให้แน่น เรียบ แต่มีความหรูอยู่ในตัวชิ้นงาน มีการออกแบบการถักงานออกมาให้หลากหลาย ไม่ว่าจะตุ๊กตา ตัวเล็ก ตัวใหญ่ กระเป๋า ฯลฯ สอบถามเพิ่มเติมได้ที่หน้าเพจ FB งานทุกชิ้นเป็นงานฝีมือ ทำตามออเดอร์เป็นส่วนใหญ่ ดังนั้นสินค้าจะใช้ระยะเวลาในการทำ">
	<meta name="keywords" content="Crochet, Mniratch, ไหมพรม, ไหมโครเชต์, โครเชต์,งานถักจากไหมคอตตอนซอฟท์">
	<meta name="author" content="Crochet by Mniratch">

	<meta id="meta-application-name" name="application-name" content="Crochet by Mniratch ไหมพรม โครเชต์" />
	<meta id="meta-description" name="description" content="ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์ หรือที่นิยมเรียกกันว่า ไหมด้าย ขนาด 20 เป็นไหมที่มีคุณภาพ เหมาะแก่การถักงานให้แน่น เรียบ แต่มีความหรูอยู่ในตัวชิ้นงาน มีการออกแบบการถักงานออกมาให้หลากหลาย ไม่ว่าจะตุ๊กตา ตัวเล็ก ตัวใหญ่ กระเป๋า ฯลฯ สอบถามเพิ่มเติมได้ที่หน้าเพจ FB งานทุกชิ้นเป็นงานฝีมือ ทำตามออเดอร์เป็นส่วนใหญ่ ดังนั้นสินค้าจะใช้ระยะเวลาในการทำ" />
	<meta id="meta-keywords" name="keywords" content="Crochet Mniratch, Crochet by Mniratch, Crochet, Mniratch, ไหมพรม, ไหมด้าย,ไหมโครเชต์, โครเชต์, งานถักจากไหมคอตตอนซอฟท์" />


	<!-- Schema.org markup for Google+ -->
	<meta id="meta-item-name" itemprop="name" content="Crochet by Mniratch | ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์" />
	<meta id="meta-item-description" itemprop="description" content="ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์ หรือที่นิยมเรียกกันว่า ไหมด้าย ขนาด 20 เป็นไหมที่มีคุณภาพ เหมาะแก่การถักงานให้แน่น เรียบ แต่มีความหรูอยู่ในตัวชิ้นงาน มีการออกแบบการถักงานออกมาให้หลากหลาย ไม่ว่าจะตุ๊กตา ตัวเล็ก ตัวใหญ่ กระเป๋า ฯลฯ สอบถามเพิ่มเติมได้ที่หน้าเพจ FB งานทุกชิ้นเป็นงานฝีมือ ทำตามออเดอร์เป็นส่วนใหญ่ ดังนั้นสินค้าจะใช้ระยะเวลาในการทำ" />
	<meta id="meta-item-image" itemprop="image" content="<?= ASSETS_PATH ?>images/logo/favicon.ico" />
	<link rel="canonical" href="<?= APP_BASE_URL ?>" />

	<meta property="og:url" content="<?= APP_BASE_URL ?>" />
	<meta property="og:title" content="Crochet by Mniratch | ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์" />
	<meta property="og:description" content="ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์ หรือที่นิยมเรียกกันว่า ไหมด้าย ขนาด 20 เป็นไหมที่มีคุณภาพ เหมาะแก่การถักงานให้แน่น เรียบ แต่มีความหรูอยู่ในตัวชิ้นงาน มีการออกแบบการถักงานออกมาให้หลากหลาย ไม่ว่าจะตุ๊กตา ตัวเล็ก ตัวใหญ่ กระเป๋า ฯลฯ สอบถามเพิ่มเติมได้ที่หน้าเพจ FB งานทุกชิ้นเป็นงานฝีมือ ทำตามออเดอร์เป็นส่วนใหญ่ ดังนั้นสินค้าจะใช้ระยะเวลาในการทำ" />
	<meta property="og:image" content="<?= ASSETS_PATH ?>images/welcome-hero/banner.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:type" content="website" />

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/fontawesome/css/all.min.css">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/bootstrap-social/bootstrap-social.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= ASSETS_PATH ?>css/style.css">
	<link rel="stylesheet" href="<?= ASSETS_PATH ?>css/components.css">

	<link rel="stylesheet" href="<?= ASSETS_PATH ?>css/customStyle.css">

	<style>
		.blockCard {
			max-width: 400px;
		}

		.blcokContainer {
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			gap: 10px;
		}
	</style>
</head>

<body>
	<div id="app">
		<div class="blcokContainer">
			<h4>เข้าสู่ระบบจัดการเว็บไซต์</h4>
			<div class="blockCard">
				<div class="card card-primary">
					<div class="card-header justify-content-center">
						<h4>Crohet by Mniratch</h4>
					</div>

					<div class="card-body">
						<form method="POST" action="<?= LINK ?>Login/login" class="needs-validation" novalidate="">
							<div class="form-group">
								<label for="username">ชื่อผู้ใช้</label>
								<input id="username" type="text" class="form-control" name="username" value="<?= !empty($post['username']) ? $post['username'] : '' ?>" tabindex="1" required autofocus placeholder="ชื่อผู้ใช้">
								<div class="invalid-feedback">
									กรุณากรอกชื่อผู้ใช้
								</div>
							</div>

							<div class="form-group">
								<div class="d-block">
									<label for="password" class="control-label">รหัสผ่าน</label>
								</div>
								<input id="password" type="password" value="<?= !empty($post['username']) ? $post['username'] : '' ?>" class="form-control" name="password" tabindex="2" required placeholder="รหัสผ่าน">
								<div class="invalid-feedback">
									กรุณากรอกรหัสผ่าน
								</div>
							</div>

							<div class="form-group">
								<?php if (!empty($post['error'])) : ?>
									<div class="mb-3 text-center">
										<small class="text-danger text-validate-ci"><?= $post['error'] ?></small>
									</div>
								<?php endif; ?>
								<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
									เข้าสู่ระบบ
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="simple-footer">
					&copy; <script>
						document.write(new Date().getFullYear())
					</script>
					Crochet by Mniratch | ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์
				</div>
			</div>
		</div>
	</div>

	<!-- General JS Scripts -->
	<script src="<?= ASSETS_PATH ?>modules/jquery.min.js"></script>
	<script src="<?= ASSETS_PATH ?>modules/popper.js"></script>
	<script src="<?= ASSETS_PATH ?>modules/tooltip.js"></script>
	<script src="<?= ASSETS_PATH ?>modules/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= ASSETS_PATH ?>modules/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?= ASSETS_PATH ?>modules/moment.min.js"></script>
	<script src="<?= ASSETS_PATH ?>js/stisla.js"></script>

	<!-- JS Libraies -->

	<!-- Page Specific JS File -->

	<!-- Template JS File -->
	<script src="<?= ASSETS_PATH ?>js/scripts.js"></script>
	<script src="<?= ASSETS_PATH ?>js/custom.js"></script>
</body>

</html>