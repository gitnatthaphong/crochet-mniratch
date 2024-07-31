<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
define('ASSETS_PATH', base_url() . 'admin/assets/');
define('LINK', base_url() . 'admin/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= ASSETS_PATH ?>logo/favicon.ico">
	<link rel="icon" href="<?= ASSETS_PATH ?>logo/favicon.ico">
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
	<meta id="meta-item-image" itemprop="image" content="<?= ASSETS_PATH ?>logo/favicon.ico" />
	<link rel="canonical" href="<?= APP_BASE_URL ?>" />

	<meta property="og:url" content="<?= APP_BASE_URL ?>" />
	<meta property="og:title" content="Crochet by Mniratch | ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์" />
	<meta property="og:description" content="ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์ หรือที่นิยมเรียกกันว่า ไหมด้าย ขนาด 20 เป็นไหมที่มีคุณภาพ เหมาะแก่การถักงานให้แน่น เรียบ แต่มีความหรูอยู่ในตัวชิ้นงาน มีการออกแบบการถักงานออกมาให้หลากหลาย ไม่ว่าจะตุ๊กตา ตัวเล็ก ตัวใหญ่ กระเป๋า ฯลฯ สอบถามเพิ่มเติมได้ที่หน้าเพจ FB งานทุกชิ้นเป็นงานฝีมือ ทำตามออเดอร์เป็นส่วนใหญ่ ดังนั้นสินค้าจะใช้ระยะเวลาในการทำ" />
	<meta property="og:image" content="<?= ASSETS_PATH ?>images/welcome-hero/banner.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:type" content="website" />


	<!-- Nucleo Icons -->
	<link href="<?= ASSETS_PATH ?>css/nucleo-icons.css" rel="stylesheet" />
	<link href="<?= ASSETS_PATH ?>css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<link href="<?= ASSETS_PATH ?>css/nucleo-svg.css" rel="stylesheet" />

	<!-- tinymce -->
	<script src="<?= ASSETS_PATH ?>js/plugins/tinymce/tinymce.min.js"></script>
	<!-- tinymce -->

	<link href="<?= ASSETS_PATH ?>fonts/fontawesome/js/all.min.js" rel="stylesheet" />
	<link href="<?= ASSETS_PATH ?>fonts/fontawesome/css/all.min.css" rel="stylesheet" />

	<!-- Bootstrap tag -->
	<link href="<?= ASSETS_PATH ?>js/plugins/bootstrap-tag/dist/use-bootstrap-tag.min.css" rel="stylesheet" />
	<script src="<?= ASSETS_PATH ?>js/plugins/bootstrap-tag/dist/use-bootstrap-tag.min.js"></script>
	<!-- Bootstrap tag -->

	<!-- CSS Files -->
	<link id="pagestyle" href="<?= ASSETS_PATH ?>css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

	<!--   Core JS Files   -->
	<script src="<?= ASSETS_PATH ?>js/core/popper.min.js"></script>
	<script src="<?= ASSETS_PATH ?>js/core/bootstrap.min.js"></script>
	<script src="<?= ASSETS_PATH ?>js/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?= ASSETS_PATH ?>js/plugins/smooth-scrollbar.min.js"></script>
	<script src="<?= ASSETS_PATH ?>js/plugins/chartjs.min.js"></script>

	<!-- jQuery -->
	<script src="<?= ASSETS_PATH ?>js/plugins/jquery.min.js"></script>
	<!-- jQuery -->


	<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="<?= ASSETS_PATH ?>js/argon-dashboard.js?v=2.0.4"></script>

	<link rel="stylesheet" href="<?= ASSETS_PATH ?>css/customStyle.css">
</head>

<body class="">
	<main class="main-content  mt-0">
		<div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('<?= ASSETS_PATH ?>img/banner_login.jpg'); background-position: 30px -200px;">
			<span class="mask bg-gradient-dark opacity-6"></span>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5 text-center mx-auto">
						<!-- <h1 class="mb-2 mt-5 ms-1 font-weight-bold">Crochet by <span class="text-primary">Mniratch</span></h1> -->
						<!-- <img src="<?= ASSETS_PATH ?>logo/favicon.ico" alt="Logo"> -->
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
				<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
					<div class="card z-index-0">
						<div class="card-header text-center pt-4 pb-0">
							<h5 class="font-weight-bold">Crochet by <span class="text-primary">Mniratch</span></h5>
						</div>
						<div class="card-body">
							<form action="<?= LINK ?>Login/login" method="post" class="needs-validation" novalidate>
								<div class="mb-3">
									<input type="text" name="username" value="<?= !empty($post['username']) ? $post['username'] : '' ?>" id="username" class="form-control" placeholder="ชื่อผู้ใช้" aria-label="ชื่อผู้ใช้" required>
									<div class="invalid-feedback">
										กรุณากรอกชื่อผู้ใช้
									</div>
								</div>
								<div class="mb-3">
									<input type="password" name="password" value="<?= !empty($post['password']) ? $post['password'] : '' ?>" id="password" class="form-control" placeholder="รหัสผ่าน" aria-label="รหัสผ่าน" required>
									<div class="invalid-feedback">
										กรุณากรอกรหัสผ่าน
									</div>
								</div>

								<?php if(!empty($post['error'])) : ?>
								<div class="mb-3 text-center">
									<small class="text-danger text-validate-ci"><?= $post['error'] ?></small>
								</div>
								<?php endif; ?>
								
								<div class="text-center">
									<button type="submit" class="btn btn-primary w-100 my-4 mb-2">เข้าสู่ระบบ</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer py-5">
		<div class="container">
			<div class="row">
				<div class="col-8 mx-auto text-center mt-1">
					<p class="mb-0 text-secondary">
						© <script>
							document.write(new Date().getFullYear())
						</script>
						Crochet by Mniratch | ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์
					</p>
				</div>
			</div>
		</div>
	</footer>

	<script>
		$(document).ready(function() {

			var forms = document.querySelectorAll('.needs-validation')

			Array.prototype.slice.call(forms).forEach(function(form) {
				form.addEventListener('submit', function(event) {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
		});
	</script>
</body>

</html>