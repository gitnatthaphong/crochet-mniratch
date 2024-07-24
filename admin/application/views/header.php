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

<body class="g-sidenav-show  bg-gray-100" onload="perloader()">

    <div class="preloader">
        <div class="loader"></div>
        <p>Loading...</p>
    </div>

    <div class="customMainContent">
        <div class="min-height-300 bg-primary position-absolute w-100"></div>
        <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
            <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0" href="<?= LINK ?>" target="_blank">
                    <img src="<?= ASSETS_PATH ?>logo/favicon.ico" class="navbar-brand-img h-100 rounded-circle" alt="main_logo">
                    <span class="ms-1 font-weight-bold">Crochet by <span class="text-primary">Mniratch</span></span>
                </a>
            </div>
            <hr class="horizontal dark mt-0">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <!-- BLOCK Menu -->
                    <li class="nav-item">
                        <a class="nav-link <?= strtolower($this->cur_class) == 'home' ? 'active' : '' ?>" href="<?= LINK ?>" title="แดชบอร์ด">
                            <i class="fa-solid fa-tv"></i>
                            <span class="nav-link-text ms-1">แดชบอร์ด</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strtolower($this->cur_class) == 'manageproduct' ? 'active' : '' ?>" href="<?= LINK ?>ManageProduct" title="จัดการสินค้า">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="nav-link-text ms-1">จัดการสินค้า</span>
                        </a>
                    </li>

                    <!-- 1. เพิ่ม จัดการหน้าเว็บไซต์  icon <i class="fa-solid fa-earth-americas"></i> -->

                    <!-- BLOCK Menu -->

                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">เกี่ยวกับบัญชีผู้ใช้</h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strtolower($this->cur_class) == 'profile' ? 'active' : '' ?>" href="<?= LINK ?>profile" title="โปรไฟล์">
                            <i class="fa-regular fa-user"></i>
                            <span class="nav-link-text ms-1">โปรไฟล์</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?= $action_link ?>signOut" title="ออกจากระบบ">
                            <i class="fa-solid fa-power-off"></i>
                            <span class="nav-link-text ms-1">ออกจากระบบ</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="main-content position-relative border-radius-lg">

            <div class="container-fluid py-4">