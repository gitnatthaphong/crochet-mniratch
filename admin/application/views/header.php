<?php
define('ASSETS_PATH', base_url() . 'admin/assets/');
define('LINK', base_url() . 'admin/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= ASSETS_PATH ?>logo/favicon.ico">
    <link rel="icon" href="<?= ASSETS_PATH ?>logo/favicon.ico">
    <title>Crochet by Mniratch | ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์</title>


    <!-- Nucleo Icons -->
    <link href="<?= ASSETS_PATH ?>css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= ASSETS_PATH ?>css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= ASSETS_PATH ?>css/nucleo-svg.css" rel="stylesheet" />
    
    
    <link href="<?= ASSETS_PATH ?>fonts/fontawesome/js/all.min.js" rel="stylesheet" />
    <link href="<?= ASSETS_PATH ?>fonts/fontawesome/css/all.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="<?= ASSETS_PATH ?>css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

    <!--   Core JS Files   -->
    <script src="<?= ASSETS_PATH ?>js/core/popper.min.js"></script>
    <script src="<?= ASSETS_PATH ?>js/core/bootstrap.min.js"></script>
    <script src="<?= ASSETS_PATH ?>js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= ASSETS_PATH ?>js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?= ASSETS_PATH ?>js/plugins/chartjs.min.js"></script>

    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= ASSETS_PATH ?>js/argon-dashboard.min.js?v=2.0.4"></script>

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
                        <a class="nav-link active" href="./pages/dashboard.html">
                            <i class="fa-solid fa-tv"></i>
                            <span class="nav-link-text ms-1">แดชบอร์ด</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./pages/tables.html">
                            <i class="fa-solid fa-earth-americas"></i>
                            <span class="nav-link-text ms-1">จัดการหน้าเว็บไซต์</span>
                        </a>
                    </li>
                    <!-- BLOCK Menu -->

                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">เกี่ยวกับบัญชีผู้ใช้</h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url() . 'admin/' . 'profile' ?>">
                            <i class="fa-regular fa-user"></i>
                            <span class="nav-link-text ms-1">โปรไฟล์</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?= $action_link ?>signOut">
                            <i class="fa-solid fa-power-off"></i>
                            <span class="nav-link-text ms-1">ออกจากระบบ</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="main-content position-relative border-radius-lg">

            <div class="container-fluid py-4">