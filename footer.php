<footer class="footer">
    <section class="first-f">
        <div class="wrap">
            <div class="main-grid">
                <div class="logo-full">
                    <div class="footer-logo">
                        <a href=""><img src="assets/images/logo-footer.png" alt=""></a>
                    </div>
                    <p>We’re a friendly team of dentists working together to ensure that you receive the best treatment that you require.</p>
                </div>
                <div class="about-denticare">
                    <h3 class="clr-green">About DentiCare</h3>
                    <div class="grid">
                        <a href="">Our Dental Team</a>
                        <a href="">Pricing & Pricelist</a>
                        <a href="">Our Awards</a>
                        <a href="">Our Solutions</a>
                        <a href="">Dental Services</a>
                        <a href="">Clients</a>
                    </div>
                </div>
                <div class="our-awards">
                    <h3 class="clr-green">Our Awards</h3>
                    <img src="assets/images/footer-awards.png" alt="">
                </div>
                <div class="social-net">
                    <h3 class="clr-green">Social Network</h3>
                    <p>Visit DentiCare on these social links.</p>
                    <div class="d-flex align-items-center">
                        <a href=""><span><i class="fa-brands fa-facebook-f"></i></span></a>
                        <a href=""><span><i class="fa-brands fa-twitter"></i></span></a>
                        <a href=""><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                        <a href=""><span><i class="fa-brands fa-pinterest-p"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-s ">
        <div class="grid">
            <div class="copy-right d-flex justify-content-center align-items-center bg-green-type">
                <p class="mb-0">Copyright 2018 by BoldThemes. All rights reserved.</p>
            </div>
            <div class="footer-nav d-flex justify-content-center bg-blue-type">
                <ul>
                    <li><a href="">About US</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Pages</a></li>
                    <li><a href="">Portfolio</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">Shop</a></li>
                </ul>
            </div>
        </div>
    </section>
</footer>
<script>
    $(document).ready(function() {

        var heroSlider = $('.hero_carosel');


        heroSlider.on('initialized.owl.carousel changed.owl.carousel', function(e) {
            if (!e.namespace) {
                return;
            }
            var carousel = e.relatedTarget;
            $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
        }).owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: true,
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            autoHeight: false,
            mouseDrag: false,
            autoplayHoverPause: true,
            items: 1,
            navText: [
                "<i class=' owl-direction'><</i>",
                "<i class='owl-direction'>></i>"
            ]
        });




        $(".owl-item.active .tag").addClass('animated fadeInUp delay-1');
        $(".owl-item.active h2").addClass('animated fadeInUp delay-2');
        $(".owl-item.active .carsl_cnt").addClass('animated fadeInUp delay-3');
        $(".owl-item.active .carsl_btn").addClass('animated fadeInUp delay-4');


        $(".hero_carosel").on('change.owl.carousel', function(event) {

            var item = event.item.index - 2;


            $('.tag').removeClass('animated fadeInUp delay-1');
            $('h2').removeClass('animated fadeInUp delay-2');
            $('.carsl_cnt').removeClass('animated fadeInUp delay-3');
            $('.carsl_btn').removeClass('animated fadeInUp delay-4');
            $('.owl-item').not('.cloned').eq(item).find('.tag').addClass('animated fadeInUp delay-1');
            $('.owl-item').not('.cloned').eq(item).find('h2').addClass('animated fadeInUp delay-2');
            $('.owl-item').not('.cloned').eq(item).find('.carsl_cnt').addClass('animated fadeInUp delay-3');
            $('.owl-item').not('.cloned').eq(item).find('.carsl_btn').addClass('animated fadeInUp delay-4');




        });


    });
</script>
<script>
    jQuery(".team-carousel").owlCarousel({
        autoplay: true,
        rewind: true,
        /* use rewind if you don't want loop */
        margin: 20,
        /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 3
            },

            1024: {
                items: 4
            },

            1366: {
                items: 4
            }
        }
    });
</script>
<script>
    $(document).ready(function() {

        var heroSlider = $('.header-carousel');


        heroSlider.on('initialized.owl.carousel changed.owl.carousel', function(e) {
            if (!e.namespace) {
                return;
            }
            var carousel = e.relatedTarget;
            $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
        }).owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: true,
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            autoHeight: false,
            mouseDrag: false,
            autoplayHoverPause: true,
            items: 1,
            navText: [
                "<i class=' owl-direction'><</i>",
                "<i class='owl-direction'>></i>"
            ]
        });




        $(".owl-item.active .tag").addClass('animated fadeInUp delay-1');
        $(".owl-item.active h2").addClass('animated fadeInUp delay-2');
        $(".owl-item.active .carsl_cnt").addClass('animated fadeInUp delay-3');
        $(".owl-item.active .carsl_btn").addClass('animated fadeInUp delay-4');


        $(".hero_carosel").on('change.owl.carousel', function(event) {

            var item = event.item.index - 2;


            $('.tag').removeClass('animated fadeInUp delay-1');
            $('h2').removeClass('animated fadeInUp delay-2');
            $('.carsl_cnt').removeClass('animated fadeInUp delay-3');
            $('.carsl_btn').removeClass('animated fadeInUp delay-4');
            $('.owl-item').not('.cloned').eq(item).find('.tag').addClass('animated fadeInUp delay-1');
            $('.owl-item').not('.cloned').eq(item).find('h2').addClass('animated fadeInUp delay-2');
            $('.owl-item').not('.cloned').eq(item).find('.carsl_cnt').addClass('animated fadeInUp delay-3');
            $('.owl-item').not('.cloned').eq(item).find('.carsl_btn').addClass('animated fadeInUp delay-4');




        });


    });
</script>