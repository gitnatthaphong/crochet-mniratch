<style>
    #contact #message {
        resize: none;
        min-height: 200px;
    }
</style>

<div class="containerAngular" ng-app="myApp" ng-controller="homeController">
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero" ng-style="{'background-image': 'url(' + (dataSys.banner_image || '<?= ASSETS_PATH ?>images/welcome-hero/banner.jpg') + ')'}">
        <div class="container">
            <div class="welcome-hero-txt">
                <h2 ng-bind-html="dataSys.banner_title"></h2>
                <p ng-bind-html="dataSys.banner_detail"></p>
            </div>
        </div>

    </section>
    <!--welcome-hero end -->

    <!--list-topics start -->
    <section id="list-topics" class="list-topics">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon customIcon">
                                <i class="fa fa-tree" aria-hidden="true"></i>
                            </div>
                            <h2><a>ตุ๊กตา</a></h2>
                            <p>ยอดขาย 100+ ชิ้น</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon customIcon">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </div>
                            <h2><a>ของตกแต่งบ้าน</a></h2>
                            <p>ยอดขาย 10+ ชิ้น</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon customIcon">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                            <h2><a>เครื่องประดับ</a></h2>
                            <p>ยอดขาย 10+ ชิ้น</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon customIcon">
                                <i class="fa fa-gift" aria-hidden="true"></i>

                            </div>
                            <h2><a>ของขวัญสุดพิเศษ</a></h2>
                            <p>ยอดขาย 100+ ชิ้น</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <!--list-topics end-->

    <!--works start -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-header">
                <h2>เกี่ยวกับ</h2>
                <p>เรียนรู้เพิ่มเติมเกี่ยวกับ Crochet by <span class="text-primary">Mniratch</span></p>
            </div>
            <div class="works-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon customIcon">
                                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                            </div>
                            <h2><a>ทำไมถึงใช้ไหม คอตตอนซอฟท์</a></h2>
                            <p>
                                ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์ หรือที่นิยมเรียกกันว่า ไหมด้าย ขนาด 20 เป็นไหมที่มีคุณภาพ เหมาะแก่การถักงานให้แน่น เรียบ แต่มีความหรูอยู่ในตัวชิ้นงาน
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon customIcon">
                                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                            </div>
                            <h2><a>การออกแบบสินค้า</a></h2>
                            <p>
                                มีการออกแบบการถักงานออกมาให้หลากหลาย ไม่ว่าจะตุ๊กตา ตัวเล็ก ตัวใหญ่ กระเป๋า ฯลฯ โดยการออกแบบจะเป็นตามเทรนที่กำลังมาแรงในวงการถักหรือสินค้าตามสไตล์ของลูกค้าเพื่อเป็นสินค้าสุด Special แบบไม่ซ้ำใครจากทางร้าน
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon customIcon">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <h2><a>การสั่งซื้อสินค้า</a></h2>
                            <p>
                                สามารถติดต่อได้ที่หน้าเพจ Facebook: <a href="https://www.facebook.com/niratshoppingg/" target="_blank" class="text-link">Crochet by Mniratch</a> งานทุกชิ้นเป็นงานฝีมือ ทำตามออเดอร์เป็นส่วนใหญ่ ดังนั้นสินค้าจะใช้ระยะเวลาในการทำ และมีระยะเวลาในการจัดส่งพอสมควร
                            </p>
                            <!-- <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            read more
                        </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--works end -->

    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>สินค้า</h2>
                <p>สิ้นค้าทั้งหมดนี้เป็นส่วนหนึ่งของสินค้าที่ขายแล้ว หากต้องการสินค้ารูปแบบใหม่หรือสั่งทำสามารถติดต่อร้านค้าได้ทางเพจ Facebook หรือ Instagram</p>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row" ng-if="!dataProducts.length > 0">
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="<?= ASSETS_PATH ?>images/products/p1.jpg" alt="product image">
                                <div class="single-explore-img-info">
                                    <div class="flex">
                                        <button>ตุ๊กตาไก่</button>
                                        <button>ขายดี</button>
                                    </div>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon venobox" title="ตุ๊กตาไก่" data-gall="gallery01" href="<?= ASSETS_PATH ?>images/products/p1.jpg">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="<?= ASSETS_PATH ?>images/products/p2.jpg" alt="product image">
                                <div class="single-explore-img-info">
                                    <div class="flex">
                                        <button>ตุ๊กตาก้อนเมฆ</button>
                                    </div>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon venobox" title="ตุ๊กตาก้อนเมฆ" data-gall="gallery01" href="<?= ASSETS_PATH ?>images/products/p2.jpg">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="<?= ASSETS_PATH ?>images/products/p3.jpg" alt="product image">
                                <div class="single-explore-img-info">
                                    <div class="flex">
                                        <button>ตุ๊กตาคริสต์มาส</button>
                                    </div>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon venobox" title="ตุ๊กตาคริสต์มาส" data-gall="gallery01" href="<?= ASSETS_PATH ?>images/products/p3.jpg">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="<?= ASSETS_PATH ?>images/products/p4.jpg" alt="product image">
                                <div class="single-explore-img-info">
                                    <div class="flex">
                                        <button>กระเป๋าจิ๋ว</button>
                                    </div>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon venobox" title="กระเป๋าจิ๋ว" data-gall="gallery01" href="<?= ASSETS_PATH ?>images/products/p4.jpg">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="<?= ASSETS_PATH ?>images/products/p5.jpg" alt="product image">
                                <div class="single-explore-img-info">
                                    <div class="flex">
                                        <button>ตุ๊กตาหมาหูพับ</button>
                                    </div>
                                    <div class="single-explore-image-icon-box venobox" title="ตุ๊กตาหมาหูพับ" data-gall="gallery01" href="<?= ASSETS_PATH ?>images/products/p5.jpg">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="<?= ASSETS_PATH ?>images/products/p7.jpg" alt="product image">
                                <div class="single-explore-img-info">
                                    <div class="flex">
                                        <button>กระเป๋าคริสต์มาส</button>
                                    </div>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon venobox" title="กระเป๋าคริสต์มาส" data-gall="gallery01" href="<?= ASSETS_PATH ?>images/products/p7.jpg">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" ng-if="dataProducts.length > 0">
                    <div class="col-md-4 col-sm-6" data-ng-repeat="(key, value) in dataProducts">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img ng-src="{{value.image_path}}" alt="{{value.product_name}}">
                                <div class="single-explore-img-info">
                                    <div class="flex" data-ng-if="value.product_tags.length > 0">
                                        <button data-ng-repeat="tag in value.product_tags">{{tag}}</button>
                                    </div>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon venobox" title="{{value.product_name}}" data-gall="gallery01" href="{{value.image_path}}">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--explore end -->

    <!-- statistics strat -->
    <section id="statistics" class="statistics" ng-style="{'background-image': 'url(' + (dataSys.bg_count || '<?= ASSETS_PATH ?>images/counter/counter-banner.jpg') + ')'}">
        <div class="container">
            <div class="statistics-counter row">
                <div class="col-md-6 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter countSite"><?= $counter['countSite'] ?></div>
                        </div>
                        <h3>เข้าชมเว็บไซต์</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter countSell">{{dataSys.total_shop}}</div>
                        </div>
                        <h3>ยอดสั่งซื้อ</h3>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- statistics end -->

    <!--subscription strat -->
    <section id="contact" class="subscription">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>
                    ติดต่อ
                </h2>
                <p ng-bind-html="dataSys.contact_detail"></p>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <div class="subscription-input-group">
                        <div class="alert alert-success animated fadeInUp" ng-if="sendMailSuccess">
                            ขอบคุณสำหรับข้อความ
                        </div>

                        <form id="myForm" ng-if="!sendMailSuccess">
                            <input type="text" name="name" class="form-control mb-2" placeholder="ชื่อ" required autocomplete="off">
                            <input type="email" name="email" class="form-control mb-2" placeholder="อีเมล" required autocomplete="off">
                            <textarea name="message" id="message" class="form-control mb-2" placeholder="ข้อความ" required autocomplete="off"></textarea>
                            <button type="submit" class="btn btn-pink">
                                ส่งข้อความ
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/subscription-->
    <!--subscription end -->
</div>

<script>
    var myApp = angular.module('myApp', []);

    myApp.controller('homeController', function($scope, $http, $timeout, $sce) {
        $scope.loading = true;
        $scope.dataSys = [];
        $scope.dataProducts = [];
        $scope.sendMailSuccess = false;

        const initJquery = () => {
            $(document).ready(function() {
                // counter
                let phpCountSite = <?= json_encode($counter['countSite']) ?>;
                let countSite = numeral(phpCountSite).format('0 a');
                $('.countSite').text(countSite);


                // animate hero
                $(window).on('load', function() {
                    $(".welcome-hero-txt h2,.welcome-hero-txt p").removeClass("animated fadeInUp").css({
                        'opacity': '0'
                    });
                    $(".welcome-hero-serch-box").removeClass("animated fadeInDown").css({
                        'opacity': '0'
                    });
                });

                $(window).on('load', function() {
                    $(".welcome-hero-txt h2,.welcome-hero-txt p").addClass("animated fadeInUp").css({
                        'opacity': '0'
                    });
                    $(".welcome-hero-serch-box").addClass("animated fadeInDown").css({
                        'opacity': '0'
                    });
                });

                $('#myForm').submit(function(event) {
                    event.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: '<?= $action_link ?>sendMessage',
                        data: $(this).serialize(), // serializes the form's elements.
                        success: function(data) {
                            $scope.sendMailSuccess = true;
                            $scope.$apply();
                        }
                    });
                });
            })
        }

        const getDataSys = () => {
            $scope.loading = true;
            $http.post('<?= $action_link ?>getDataSys').then(
                function(res) {
                    $scope.dataSys = res.data.result;

                    // HTML
                    let passHtml = ['banner_title', 'banner_detail', 'contact_detail'];
                    passHtml.forEach(element => {
                        if ($scope.dataSys[element] && $scope.dataSys[element] > '') {
                            $scope.dataSys[element] = $sce.trustAsHtml($scope.dataSys[element]);
                        }
                    });

                    // Number
                    if ($scope.dataSys['total_shop']) {
                        $scope.dataSys['total_shop'] = numeral($scope.dataSys['total_shop']).format('0 a');
                    }

                    $timeout(function() {
                        $scope.loading = false;
                    }, 500);
                }
            );
        }

        const getDataProduct = () => {
            $scope.loading = true;
            $http.post('<?= $action_link ?>getDataProduct').then(
                function(res) {
                    $scope.dataProducts = res.data.result;


                    $timeout(function() {
                        $scope.loading = false;
                        fnc_initVenoBox();
                    }, 1000);
                }
            );
        }

        const fnc_initVenoBox = () => {
            $(document).ready(function() {
                new VenoBox({
                    selector: '.venobox',
                    numeration: true,
                    infinigall: true,
                    spinner: 'pulse',
                    fitView: true,
                    ratio: '4x3',
                    spinColor: '#FFB1B1',
                    titlePosition: 'bottom'
                });
            });
        }

        const init = () => {
            getDataProduct();
            getDataSys();
            initJquery();
        }

        init();
    });
</script>

<!-- <script>
    new VenoBox({
        selector: '.venobox',
        numeration: true,
        infinigall: true,
        spinner: 'pulse',
        fitView: true,
        ratio: '4x3',
        spinColor: '#FFB1B1',
        titlePosition: 'bottom'
    });
</script> -->