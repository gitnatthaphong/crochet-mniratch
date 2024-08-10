<?php
define('ASSETS_PATH', base_url() . 'admin/assets/');
define('LINK', base_url() . 'admin/');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
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
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/summernote/summernote-bs4.css">

  <link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/chocolat/dist/css/chocolat.css">

  <link rel="stylesheet" href="<?= ASSETS_PATH ?>modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">



  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>css/style.css">
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>css/components.css">
  <link rel="stylesheet" href="<?= ASSETS_PATH ?>css/skins/reverse.css">

  <!-- General JS Scripts -->
  <script src="<?= ASSETS_PATH ?>modules/jquery.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/popper.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/tooltip.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/moment.min.js"></script>
  <script src="<?= ASSETS_PATH ?>js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= ASSETS_PATH ?>modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/chart.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/summernote/summernote-bs4.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <script src="<?= ASSETS_PATH ?>modules/datatables/datatables.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/jquery-ui/jquery-ui.min.js"></script>

  <script src="<?= ASSETS_PATH ?>modules/cleave-js/dist/cleave.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/select2/dist/js/select2.full.min.js"></script>
  <script src="<?= ASSETS_PATH ?>modules/jquery-selectric/jquery.selectric.min.js"></script>

  <script src="<?= ASSETS_PATH ?>modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>


  <!-- Template JS File -->
  <script src="<?= ASSETS_PATH ?>js/scripts.js"></script>
  <script src="<?= ASSETS_PATH ?>js/custom.js"></script>


  <link rel="stylesheet" href="<?= ASSETS_PATH ?>css/customStyle.css">

  <style>
    .img-logo {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }
  </style>
</head>

<body onload="perloader()">

  <div class="preloader">
    <div class="loader"></div>
    <p>กำลังโหลด...</p>
  </div>

  <div id="app">
    <div class="customMainContent main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg <?= (!empty($notification)) ? 'beep' : '' ?>"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">การแจ้งเตือน
                <!-- <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div> -->
              </div>
              <?php if (!empty($notification)) : ?>
                <?php foreach ($notification as $key => $value) : ?>
                  <div class="dropdown-list-content dropdown-list-icons">
                    <a href="<?= LINK ?>manageMessage/detail/<?= $value['message_id'] ?>" class="dropdown-item">
                      <div class="dropdown-item-icon bg-info text-white">
                        <i class="far fa-user"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        <b><?= $value['name'] ?></b>
                        <div class="time">เมื่อวันที่ <?= dateTimeToDateThai($value['create_date'], true) ?></div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
                <div class="dropdown-footer text-center">
                  <a href="<?= LINK ?>manageMessage">ดูทั้งหมด <i class="fas fa-chevron-right"></i></a>
                </div>
              <?php else : ?>
                <div class="dropdown-list-content">
                </div>

                <div class="dropdown-list-content dropdown-list-icons">
                  <a href="#" class="dropdown-item justify-content-center">
                    <span>- ไม่มีการแจ้งเตือน -</span>
                  </a>
                </div>
              <?php endif; ?>

            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?= ASSETS_PATH ?>images/logo/favicon.ico" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block"><?= $this->session->userdata['fname'] . ' ' . $this->session->userdata['lname'] ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?= LINK ?>UserProfile/form" class="dropdown-item has-icon">
                <i class="far fa-user"></i> แก้ไขข้อมูลผู้ใช้
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= LINK ?>Login/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> ออกจากระบบ
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= LINK ?>">Crochet by <span class="text-pink">Mniratch</span></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">
              <img src="<?= ASSETS_PATH ?>images/logo/favicon.ico" alt="logo" width="50" height="50" class="img-logo">
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">จัดการเว็บไซต์</li>
            <li class="dropdown <?= strtolower($this->cur_class) == "home" ? 'active' : '' ?>">
              <a href="<?= LINK ?>" class="nav-link">
                <i class="fas fa-chart-pie"></i>
                <span>แดชบอร์ด</span>
              </a>
            </li>

            <li class="dropdown  <?= strtolower($this->cur_class) == "managemessage" ? 'active' : '' ?>">
              <a href="<?= LINK ?>ManageMessage" class="nav-link">
                <i class="fas fa-envelope"></i>
                <span>กล่องข้อความ</span>
                <?php if (!empty($notification)) : ?>
                  <span class="badge badge-danger"><?= count($notification) ?></span>
                <?php endif; ?>
              </a>
            </li>

            <li class="dropdown  <?= strtolower($this->cur_class) == "managecategory" ? 'active' : '' ?>">
              <a href="<?= LINK ?>ManageCategory" class="nav-link">
                <i class="fas fa-th-large"></i>
                <span>จัดการหมวดหมู่</span>
              </a>
            </li>

            <li class="dropdown  <?= strtolower($this->cur_class) == "manageabout" ? 'active' : '' ?>">
              <a href="<?= LINK ?>ManageAbout" class="nav-link">
                <i class="fas fa-address-card"></i>
                <span>จัดการเนื้อหาเกี่ยวกับ</span>
              </a>
            </li>

            <li class="dropdown  <?= strtolower($this->cur_class) == "manageproduct" ? 'active' : '' ?>">
              <a href="<?= LINK ?>ManageProduct" class="nav-link">
                <i class="fas fa-shopping-cart"></i>
                <span>จัดการสินค้า</span>
              </a>
            </li>

            <li class="dropdown <?= strtolower($this->cur_class) == 'managewebsite' ? 'active' : '' ?>">
              <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-globe-asia"></i> <span>จัดการหน้าเว็บไซต์</span>
              </a>
              <ul class="dropdown-menu">
                <li class="<?= strtolower($this->cur_class) == 'managewebsite' && strtolower($this->cur_method) == 'banner'  ? 'active' : '' ?>"><a class="nav-link" href="<?= LINK ?>ManageWebsite/banner">แบนเนอร์</a></li>
                <li class="<?= strtolower($this->cur_class) == 'managewebsite' && strtolower($this->cur_method) == 'about'  ? 'active' : '' ?>"><a class="nav-link" href="<?= LINK ?>ManageWebsite/about">เกี่ยวกับ</a></li>
                <li class="<?= strtolower($this->cur_class) == 'managewebsite' && strtolower($this->cur_method) == 'product'  ? 'active' : '' ?>"><a class="nav-link" href="<?= LINK ?>ManageWebsite/product">สินค้า</a></li>
                <li class="<?= strtolower($this->cur_class) == 'managewebsite' && strtolower($this->cur_method) == 'sales'  ? 'active' : '' ?>"><a class="nav-link" href="<?= LINK ?>ManageWebsite/sales">เนื้อหาการนับ</a></li>
                <li class="<?= strtolower($this->cur_class) == 'managewebsite' && strtolower($this->cur_method) == 'contact'  ? 'active' : '' ?>"><a class="nav-link" href="<?= LINK ?>ManageWebsite/contact">ติดต่อ</a></li>
                <li class="<?= strtolower($this->cur_class) == 'managewebsite' && strtolower($this->cur_method) == 'social'  ? 'active' : '' ?>"><a class="nav-link" href="<?= LINK ?>ManageWebsite/social">โซเชียล</a></li>
              </ul>
            </li>

            <!-- <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
              </ul>
            </li> -->

            <!-- has notification in sidebar -->
            <!-- <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="components-article.html">Article</a></li>
                <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
                <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
                <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>
                <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
                <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
                <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
                <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>
                <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
                <li><a class="nav-link" href="components-tab.html">Tab</a></li>
                <li><a class="nav-link" href="components-table.html">Table</a></li>
                <li><a class="nav-link" href="components-user.html">User</a></li>
                <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
              </ul>
            </li> -->
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">