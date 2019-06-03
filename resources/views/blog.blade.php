<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>129 Beyond Travel Agency</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('backend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/vendors/jquery-ui/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/vendors/popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/vendors/swiper/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/vendors/scroll/jquery.mCustomScrollbar.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ URL::asset('backend/css/style.css')}}">
</head>

<body>

    <!--================ Offcanvus Menu Area =================-->
    <div class="side_menu">
        <div class="logo">
            <a href="index.html">
                <img src="{{ URL::asset('img/logo.png')}}" alt="">
            </a>
        </div>
        <ul class="list menu-left">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="packages.html">Packages</a>
            </li>
            <li>
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        Pages
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="about-us.html">About-us</a>
                        <a class="dropdown-item" href="amenities.html">Amenities</a>
                        <a class="dropdown-item" href="elements.html">Elements</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        Blog
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="blog.html">Blog</a>
                        <a class="dropdown-item" href="single-blog.html">Blog Details</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
    <!--================ End Offcanvus Menu Area =================-->

    <!--================ Canvus Menu Area =================-->
    <div class="canvus_menu">
        <div class="container">
            <div class="toggle_icon" title="Menu Bar">
                <span></span>
            </div>
        </div>
    </div>
    <!--================ End Canvus Menu Area =================-->

    <section class="top-btn-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#" class="main_btn">
                        book a table
                        <img src="{{ URL::asset('img/next.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--================ Start banner section =================-->
    <section class="home-banner-area relative">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="header-right col-lg-6 col-md-6">
                    <h1>
                        Santorini Island <br>
                        in Greece
                    </h1>
                    <p class="pt-20">
                        If you are looking at blank cassettes on the web, you may be very confused at the difference in
                        price. You may see some for as low as $.17 each.
                    </p>
                    <a href="#" class="main_btn">
                        Get Started
                        <img src="{{ URL::asset('img/next.png')}}" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 header-left">
                    <div class="">
                        <img class="img-fluid w-100" src="{{ URL::asset('img/banner/banner-img.jpg')}}" alt="">
                    </div>
                    <div class="video-popup d-flex align-items-center">
                        <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=KUln2DXU5VE"
                            data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                            <span></span>
                        </a>
                        <div class="watch">
                            <h5>Watch Intro Video</h5>
                            <p>You will love our execution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner section =================-->

    <!--================Blog Area =================-->
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ URL::asset('img/blog/main-blog/m-blog-1.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Astronomy Binoculars A Great Alternative</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ URL::asset('img/blog/main-blog/m-blog-2.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Basics Of Buying A Telescope</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ URL::asset('img/blog/main-blog/m-blog-3.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Glossary Of Telescopes</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ URL::asset('img/blog/main-blog/m-blog-4.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Night Sky</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ URL::asset('img/blog/main-blog/m-blog-5.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Telescopes 101</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="{{ URL::asset('img/blog/author.png')}}" alt="">
                            <h4>Charlie Barber</h4>
                            <p>Senior blog writer</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you
                                should
                                have to spend money on boot camp when you can get. Boot camps have itssuppor ters
                                andits
                                detractors.
                            </p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/blog/popular-post/post1.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Space The Final Frontier</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/blog/popular-post/post2.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/blog/popular-post/post3.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/blog/popular-post/post4.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="{{ URL::asset('img/blog/add.jpg')}}" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without giving them
                                a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area">
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Crafted</h6>
                        <p>
                            The world has become so fast paced that people don’t want to stand by reading a page of
                            information, they would
                            much rather look.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Navigation Links</h6>
                        <div class="row">
                            <ul class="col footer-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="project.html">Project</a></li>
                            </ul>
                            <ul class="col footer-nav">
                                <li><a href="team-members.html">Team Members</a></li>
                                <li><a href="blog-single.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>For business professionals caught between high OEM price mediocre print and graphic.</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                    <button class="click-btn btn btn-default">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instafeed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="{{ URL::asset('img/instagram/i1.jpg')}}" alt=""></li>
                            <li><img src="{{ URL::asset('img/instagram/i2.jpg')}}" alt=""></li>
                            <li><img src="{{ URL::asset('img/instagram/i3.jpg')}}" alt=""></li>
                            <li><img src="{{ URL::asset('img/instagram/i4.jpg')}}" alt=""></li>
                            <li><img src="{{ URL::asset('img/instagram/i5.jpg')}}" alt=""></li>
                            <li><img src="{{ URL::asset('img/instagram/i6.jpg')}}" alt=""></li>
                            <li><img src="{{ URL::asset('img/instagram/i7.jpg')}}" alt=""></li>
                            <li><img src="{{ URL::asset('img/instagram/i8.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
            <div class="container">
                <div class="row justify-content-between">
                    <div>
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/swiper/js/swiper.min.js"></script>
    <script src="vendors/scroll/jquery.mCustomScrollbar.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>