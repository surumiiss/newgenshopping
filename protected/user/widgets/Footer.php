<?php

class Footer extends CWidget {

    public function run() {
        ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="victoria col col-xs-6 col-sm-4 col-md-3">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/foot.png" alt class="img img-responsive center-block">

                        <ul class="nav navbar-nav faces">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                        </ul>
                    </div> <!-- end of victoria -->

                    <div class="footer-about col col-xs-6 col-sm-4 col-md-2">
                        <h2>My Account</h2>


                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>

                        </ul>
                    </div> <!-- end of footer-about  -->

                    <div class="explore col col-xs-6 col-sm-4 col-md-2">
                        <h2>Newgen E-Shop</h2>




                        <ul>
                            <li><a href="#">Join Our Shop</a></li>
                            <li><a href="#">Merchant</a></li>
                            <li><a href="#">Local Vendors</a></li>

                        </ul>
                    </div> <!-- end of explore  -->
                    <div class="clearfix visible-sm"></div>
                    <div class="usefull-links col col-xs-6 col-sm-4 col-md-2">
                        <h2>Our Service</h2>
                        <ul>
                            <li><a href="#">Shipping Return</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>







                    </div> <!-- end of usefull-links  -->

                    <div class="usefull-links col col-xs-6 col-md-3 returns">
                        <h2>Newsletter</h2>
                        <p>Lorem ipsum dolor sit a met con
                            seret adipiscing elit sed diam nonunem.</p>


                        <form class="form-inline" role="form">
                            <div class="form-group">

                                <input type="email" class="form-control2" id="email" placeholder="Enter Your Email">
                            </div>


                            <button type="submit" class="btn btn-default ok">Send</button>
                        </form>




                    </div> <!-- end of usefull-links  -->
                </div> <!-- end of row -->

            </div> 
        </footer> <!-- end of footer -->

        <section class="foots">  
            <div class="container">

                <div class="row copyright">
                    <div class="col col-md-6">
                        <p>Copyright © 2016 Newgen. All rights reserved.<a href="#">Privacy Policy</a><a href="#">Terms of Use </a><a href="#">Site Map</a></p>
                    </div>

                    <div class="col col-md-6">
                        <h2>Developed By <a href="http://www.intersmartsolution.com/">Intersmart</a></h2>
                    </div>
                </div> 
            </div>
        </section>


        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.3.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.appear.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.animateNumber.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/index-script.js"></script>


        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/slick.min.js"></script>



        <script>

            $(document).ready(function () {

                $('.new_arrive').slick({
                    slidesToShow: 1,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    slidesToScroll: 1,
                    pauseOnHover: false,
                    prevArrow: '<i id="prev_slide_3" class="fa fa-chevron-left"></i>',
                    nextArrow: '<i id="next_slide_3" class="fa fa-chevron-right"></i>',
                    responsive: [
                        {
                            breakpoint: 1000,
                            settings: {
                                centerMode: false,
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                centerMode: false,
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                centerMode: false,
                                slidesToShow: 1
                            }
                        }
                    ]
                });

            });

        </script> 






        <script>

            $(document).ready(function () {

                $('.gold').slick({
                    slidesToShow: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    slidesToScroll: 1,
                    dots: true,
                    pauseOnHover: false,
                    responsive: [
                        {
                            breakpoint: 1000,
                            settings: {
                                centerMode: false,
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                centerMode: false,
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                centerMode: false,
                                slidesToShow: 1
                            }
                        }
                    ]
                });

            });

        </script> 





        <script>

            $(document).ready(function () {

                $('.part-1').slick({
                    slidesToShow: 2,
                    autoplay: true,
                    autoplaySpeed: 7000,
                    slidesToScroll: 1,
                    pauseOnHover: true,
                    prevArrow: '<i id="prev_slide_2" class="fa fa-chevron-left"></i>',
                    nextArrow: '<i id="next_slide_2" class="fa fa-chevron-right"></i>',
                    responsive: [
                        {
                            breakpoint: 1000,
                            settings: {
                                centerMode: false,
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 550,
                            settings: {
                                centerMode: false,
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 500,
                            settings: {
                                centerMode: false,
                                slidesToShow: 1
                            }
                        }
                    ]
                });

            });

        </script> 


        <script>

            $(document).ready(function () {

                $('.part-2').slick({
                    slidesToShow: 2,
                    autoplay: true,
                    autoplaySpeed: 7000,
                    slidesToScroll: 1,
                    pauseOnHover: true,
                    prevArrow: '<i id="prev_slide_2" class="fa fa-chevron-left"></i>',
                    nextArrow: '<i id="next_slide_2" class="fa fa-chevron-right"></i>',
                    responsive: [
                        {
                            breakpoint: 1000,
                            settings: {
                                centerMode: false,
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 550,
                            settings: {
                                centerMode: false,
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 500,
                            settings: {
                                centerMode: false,
                                slidesToShow: 1
                            }
                        }
                    ]
                });

            });

        </script> 
        <script>
            jQuery(document).ready(function () {
                $(window).scroll(function () {

                    var body = $("html, body");

                    var threshold = 90;
                    if ($(window).scrollTop() <= threshold)
                        $('#static_cnt').removeClass('dropup').removeClass('new_nav').removeClass('mob');

                    else
                        $('#static_cnt').addClass('dropup').addClass('new_nav').addClass('mob');

                });


            });


        </script>


        <script>


            jQuery(window).scroll(function ()


            {

                if ($(window).width() > 991)
                {
                    var scrlTop = jQuery(window).scrollTop();


                    $window = jQuery(window);

                    function myanimations(doelement, doclass) {
                        $element = jQuery(doelement);

                        $element.each(function () {
                            $thisone = jQuery(this);
                            if ($thisone.offset().top + 200 < ($window.height() + $window.scrollTop()) &&
                                    ($thisone.offset().top + $element.outerHeight()) + 170 > $window.scrollTop())
                            {
                                $thisone.removeClass('fadeOut');
                                $thisone.addClass('animated');
                                $thisone.addClass(doclass);
                            } else {
                                $thisone.removeClass(doclass);
                                $thisone.addClass('fadeOut');
                            }
                        });
                    }

                    myanimations('.groom h2', 'fadeInLeft m2');

                    myanimations('.more h1', 'fadeInLeft m2');
                    myanimations('.groom h3', 'fadeInRight m3');
                    myanimations('.groom ul', 'fadeInUp m2');

                    myanimations('.arrivals h1', 'fadeInLeft m2');
                    myanimations('.banner h2', 'zoomIn');
                    myanimations('.services h1', 'fadeInLeft m2');
                    myanimations('.more h2', 'fadeInUp m1');
                    myanimations('.more h3', 'fadeInUp m3');
                    myanimations('.arrivals p', 'fadeInRight m2');
                }
            });




        </script>


        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/simpleMobileMenu.js"></script>
        <script type="text/javascript">

            jQuery(document).ready(function ($) {
                $('.smobitrigger').smplmnu();
            });

        </script>
        <script>

            (function ($) {
                $(document).ready(function () {
                    $('#cssmenu ul ul li:odd').addClass('odd');
                    $('#cssmenu ul ul li:even').addClass('even');
                    $('#cssmenu > ul > li > a').click(function () {
                        $('#cssmenu li').removeClass('active');
                        $(this).closest('li').addClass('active');
                        var checkElement = $(this).next();
                        if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                            $(this).closest('li').removeClass('active');
                            checkElement.slideUp('normal');
                        }
                        if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                            $('#cssmenu ul ul:visible').slideUp('normal');
                            checkElement.slideDown('normal');
                        }
                        if ($(this).closest('li').find('ul').children().length == 0) {
                            return true;
                        } else {
                            return false;
                        }
                    });
                });
            })(jQuery);


        </script> 







        </body>

        <!-- Mirrored from victoria-spa.themexriver.com/victoria/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Apr 2016 20:33:59 GMT -->
        </html>





        <?php
    }

}
