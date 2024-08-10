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
                <ul ng-if="!dataCategory.length > 0">
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

                <ul ng-if="dataCategory.length > 0">
                    <li data-ng-repeat="(key, value) in dataCategory">
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon customIcon">
                                <i class="{{value.topic_icon}}" aria-hidden="true"></i>
                            </div>
                            <h2><a>{{value.topic_name}}</a></h2>
                            <p ng-bind-html="value.topic_detail"></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <!--list-topics end-->

    <!--works start -->
    <section id="works" class="works" ng-if="dataAbout.length > 0">
        <div class="container">
            <div class="section-header">
                <h2>เกี่ยวกับ</h2>
                <p ng-bind-html="dataSys.about_detail"></p>
            </div>
            <div class="works-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6" data-ng-repeat="(key, value) in dataAbout">
                        <div class="single-how-works">
                            <div class="single-how-works-icon customIcon">
                                <i class="{{value.icon}}" aria-hidden="true"></i>
                            </div>
                            <h2><a>{{value.title}}</a></h2>
                            <p ng-bind-html="value.detail"></p>
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
                <p ng-bind-html="dataSys.product_detail"></p>
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
        $scope.dataCategory = [];
        $scope.dataAbout = [];
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
                    let passHtml = ['banner_title', 'banner_detail', 'contact_detail', 'about_detail', 'product_detail'];
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

        const getDataCategory = () => {
            $scope.loading = true;
            $http.post('<?= $action_link ?>getDataCategory').then(
                function(res) {
                    $scope.dataCategory = res.data.result;

                    // HTML
                    if ($scope.dataCategory.length > 0) {
                        $scope.dataCategory.forEach((element, index) => {
                            if ($scope.dataCategory[index]['topic_detail'] && $scope.dataCategory[index]['topic_detail'] > '') {
                                $scope.dataCategory[index]['topic_detail'] = $sce.trustAsHtml($scope.dataCategory[index]['topic_detail']);
                            }
                        });
                    }

                    $timeout(function() {
                        $scope.loading = false;
                    }, 1000);
                }
            );
        }

        const getDataAbout = () => {
            $scope.loading = true;
            $http.post('<?= $action_link ?>getDataAbout').then(
                function(res) {
                    $scope.dataAbout = res.data.result;

                    // HTML
                    if ($scope.dataAbout.length > 0) {
                        $scope.dataAbout.forEach((element, index) => {
                            if ($scope.dataAbout[index]['detail'] && $scope.dataAbout[index]['detail'] > '') {
                                $scope.dataAbout[index]['detail'] = $sce.trustAsHtml($scope.dataAbout[index]['detail']);
                            }
                        });
                    }

                    $timeout(function() {
                        $scope.loading = false;
                    }, 1000);
                }
            );
        }

        const init = () => {
            getDataProduct();
            getDataSys();
            getDataCategory();
            getDataAbout();
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