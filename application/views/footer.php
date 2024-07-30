<!--footer start-->
<footer id="footer" class="footer">
    <div class="container">
        <div class="hm-footer-copyright">
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        &copy;<script>
                            document.write(new Date().getFullYear())
                        </script>
                        Crochet by Mniratch | ไหมพรม โครเชต์ งานถักจากไหมคอตตอนซอฟท์
                    </p>
                </div>
                <div class="col-sm-6">
                    <div class="footer-social">
                        <!-- <span><i class="fa fa-phone"> +1  (222) 777 8888</i></span> -->
                        <a href="https://www.facebook.com/niratshoppingg/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/crochet_by_mniratch/"><i class="fa fa-instagram"></i></a>
                        <!-- <a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a> -->
                    </div>
                </div>
            </div>

        </div><!--/.hm-footer-copyright-->
    </div><!--/.container-->

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

    </div><!--/.scroll-Top-->

</footer><!--/.footer-->
<!--footer end-->
</div>

<script>
    function perloader() {
        var preloader = document.querySelector('.preloader');
        var content = document.querySelector('.content');

        setTimeout(() => {
            preloader.style.display = 'none';
            content.style.display = 'block';
        }, 1500);
    }

    document.addEventListener('contextmenu', function(e) {
        if (e.target.tagName === 'IMG') {
            e.preventDefault();
        }
    });

    document.addEventListener('dragstart', function(e) {
        if (e.target.tagName === 'IMG') {
            e.preventDefault();
        }
    });

    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 600) {
            $('.return-to-top').fadeIn();
        } else {
            $('.return-to-top').fadeOut();
        }

        if ($(this).scrollTop() > $('.select-opt').height()) {
            $('.top-area .customNav').css('position', 'fixed');
        } else {
            $('.top-area .customNav').css('position', 'inherit');
        }
    });

    $('.return-to-top').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1500);
        return false;
    });
</script>

</body>

</html>