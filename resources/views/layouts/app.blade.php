<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home || Albabello Trading Company Ltd. </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('basic/logo.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('basic/logo.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('basic/logo.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Albabello Trading Company Ltd" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/insur-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') }}">
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/insur.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/insur-responsive.css') }}" />
    <!-- dark css -->
    <link rel="stylesheet" href="{{ asset('basic/custom.css') }}">
</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>





<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader -->


<div class="page-wrapper">
    <header class="main-header clearfix">
        <div class="main-header__top">
            <div class="container">
                <div class="main-header__top-inner">
                    <div class="main-header__top-address">
                        <ul class="list-unstyled main-header__top-address-list">
                            <li>
                                <i class="icon">
                                    <span class="icon-pin"></span>
                                </i>
                                <div class="text">
                                    <p>TIMBER SHED, Tudan Wada 810282, Zaria</p>
                                </div>
                            </li>
                            <li>
                                <i class="icon">
                                    <span class="icon-email"></span>
                                </i>
                                <div class="text">
                                    <p><a href="mailto:info@albabello.com">info@albabello.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        {{-- <div class="main-header__top-menu-box">
                             <ul class="list-unstyled main-header__top-menu">
                                 <li><a href="about.html">Make a Claim</a></li>
                                 <li><a href="faq.html"> FAQs</a></li>
                                 <li><a href="about.html">About</a></li>
                             </ul>
                         </div>--}}
                        <div class="main-header__top-social-box">
                            <div class="main-header__top-social">
                                <a target="_blank" href="http://app.albabello.com">Memo</a>
                                <a target="_blank"  href="http://sage.albabello.com">Sage</a>
                                <a target="_blank"  href="http://mail.albabellogroup.com">Zimbra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu clearfix">
            <div class="main-menu__wrapper clearfix">
                <div class="container">
                    <div class="main-menu__wrapper-inner clearfix">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="#"><img src="{{ asset('basic/logo.png') }}" width="150" alt=""></a>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <div class="main-menu__main-menu-box-inner">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list one-page-scroll-menu">
                                        <li class="dropdown current scrollToLink">
                                            <a href="#home">Home </a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#about">About Us</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#services">Services </a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#management">Management</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#contact-us">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__main-menu-box-search-get-quote-btn">
                                    <div class="main-menu__main-menu-box-search">
                                        <a href="#"
                                           class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                    </div>
                                    <div class="main-menu__main-menu-box-get-quote-btn-box">
                                        <a href="#"
                                           class="thm-btn main-menu__main-menu-box-get-quote-btn">Career Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call">
                                <div class="main-menu__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="main-menu__call-content">
                                    <a href="tel:+2348135067070">+234 803 703 9539</a>
                                    <p>Call Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider clearfix" id="home">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-1-1.jpg') }}');"></div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1 float-bob-x">
                        <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">
                                        We sale and supply <br>
                                        <span> building </span>  materials <br>of all types</h2>
                                    <p class="main-slider__text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Maxime mollitia,
                                        molestiae quas vel sint commodi.
                                    </p>
                                    <div class="main-slider__btn-box">
                                        <a href="#" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">
                                        We have  <br> branches across  <br>
                                        the <span>country.</span>
                                    </h2>
                                    <p class="main-slider__text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Maxime mollitia,
                                        molestiae quas vel sint commodi.
                                    </p>
                                    <div class="main-slider__btn-box">
                                        <a href="#" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow1"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one__single-inner">
                                <div class="feature-one__icon">
                                    <span class="icon-mission"></span>
                                </div>
                                <div class="feature-one__count"></div>
                                <div class="feature-one__shape">
                                    <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                </div>
                                <h3 class="feature-one__title"><a href="about.html">Our Mission</a></h3>
                                <p class="feature-one__text">Lorem ipsum dolor amet consectetur adipiscing elit do
                                    eiusmod tempor incid idunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-one__single">
                            <div class="feature-one__single-inner">
                                <div class="feature-one__icon">
                                    <span class="icon-mission"></span>
                                </div>
                                <div class="feature-one__count"></div>
                                <div class="feature-one__shape">
                                    <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                </div>
                                <h3 class="feature-one__title"><a href="about.html">Our Vision</a></h3>
                                <p class="feature-one__text">Lorem ipsum dolor amet consectetur adipiscing elit do
                                    eiusmod tempor incid idunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-one__single">
                            <div class="feature-one__single-inner">
                                <div class="feature-one__icon">
                                    <span class="icon-mission"></span>
                                </div>
                                <div class="feature-one__count"></div>
                                <div class="feature-one__shape">
                                    <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                </div>
                                <h3 class="feature-one__title"><a href="about.html">Our Objectives</a></h3>
                                <p class="feature-one__text">Lorem ipsum dolor amet consectetur adipiscing elit do
                                    eiusmod tempor incid idunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--About One Start-->
    <section class="about-one" id="about">
        <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
             style="background-image: url(assets/images/backgrounds/about-one-bg.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{ asset('assets/images/backgrounds/main-slider-1-3.jpg') }}" alt="">
                            </div>
                            <div class="about-one__img-two">
                                <img src="{{ asset('assets/images/backgrounds/main-slider-1-4.jpg') }}" alt="">
                            </div>
                            <div class="about-one__experience">
                                <h2 class="about-one__experience-year">30</h2>
                                <p class="about-one__experience-text">Years of <br> Experience</p>
                            </div>
                            <div class="about-one__shape-1">
                                <img src="assets/images/shapes/about-one-shape-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">About company</p>
                                <div class="section-title-shape-1">
                                    <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">We provide the best construction materials</h2>
                        </div>
                        <p class="about-one__text-1">Duis aute irure dolor in reprehenderit in velit esse cillum
                            dolore eu nulla pariatur.</p>
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Refresing to get such a personal touch.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </li>
                        </ul>
                        <p class="about-one__text-2">Nullam eu nibh vitae est tempor molestie id sed ex. Quisque
                            dignissim maximus ipsum, sed rutrum metus tincidunt et. Sed eget tincidunt ipsum.</p>
                        <div class="about-one__btn-call">
                            <div class="about-one__btn-box">
                                <a href="about.html" class="thm-btn about-one__btn">Discover More</a>
                            </div>
                            <div class="about-one__call">
                                <div class="about-one__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="about-one__call-content">
                                    <a href="tel:9200368090">+234 803 703 9539</a>
                                    <p>Call Us.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="brand-one__title">
                        <h2>Our customers, suppliers and partners</h2>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="brand-one__main-content">
                        <div class="thm-swiper__slider swiper-container swiper-container-initialized swiper-container-horizontal" data-swiper-options="{&quot;spaceBetween&quot;: 100, &quot;slidesPerView&quot;: 5, &quot;autoplay&quot;: { &quot;delay&quot;: 5000 }, &quot;breakpoints&quot;: {
                        &quot;0&quot;: {
                            &quot;spaceBetween&quot;: 30,
                            &quot;slidesPerView&quot;: 2
                        },
                        &quot;375&quot;: {
                            &quot;spaceBetween&quot;: 30,
                            &quot;slidesPerView&quot;: 2
                        },
                        &quot;575&quot;: {
                            &quot;spaceBetween&quot;: 30,
                            &quot;slidesPerView&quot;: 3
                        },
                        &quot;767&quot;: {
                            &quot;spaceBetween&quot;: 50,
                            &quot;slidesPerView&quot;: 4
                        },
                        &quot;991&quot;: {
                            &quot;spaceBetween&quot;: 50,
                            &quot;slidesPerView&quot;: 5
                        },
                        &quot;1199&quot;: {
                            &quot;spaceBetween&quot;: 100,
                            &quot;slidesPerView&quot;: 5
                        }
                    }}">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                <div class="swiper-slide swiper-slide-active" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-1.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide swiper-slide-next" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-2.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-3.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-4.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-5.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-1.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-2.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-3.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-4.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                    <img src="assets/images/brand/brand-1-5.png" alt="">
                                </div><!-- /.swiper-slide -->
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Services One Start-->
    <section class="services-one" id="services">
        <div class="services-one__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__top-left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Our services</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">
                                    We sale construction materials of almost all types.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="services-one__top-right">
                            <p class="services-one__top-text">Nullam eu nibh vitae est tempor molestie id sed ex.
                                Quisque dignissim maximus ipsum, sed rutrum metus tincidunt et. Sed eget tincidunt
                                ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-one__bottom">
            <div class="services-one__container">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/placeholder.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-drive"></span>
                                </div>
                                <h2 class="service-one__title"><a href="#">Zinks</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/placeholder.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-family"></span>
                                </div>
                                <h2 class="service-one__title"><a href="">Cements</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/placeholder.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-home"></span>
                                </div>
                                <h2 class="service-one__title"><a href="#">Ceilings</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/placeholder.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-heart-beat"></span>
                                </div>
                                <h2 class="service-one__title"><a href="">Woods</a>
                                </h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/placeholder.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-briefcase"></span>
                                </div>
                                <h2 class="service-one__title"><a href="">Doors</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/placeholder.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-fire"></span>
                                </div>
                                <h2 class="service-one__title"><a href="#">Tiles</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/placeholder.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-ring"></span>
                                </div>
                                <h2 class="service-one__title"><a href="#">PVC Ceilings</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/placeholder.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-plane"></span>
                                </div>
                                <h2 class="service-one__title"><a href="#">POP Materials</a>
                                </h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="why-choose-one-shape-1"
             style="background-image: url(assets/images/shapes/why-choose-one-shape-1.png);"></div>
        <div class="why-choose-one-shape-2 float-bob-y">
            <img src="assets/images/shapes/why-choose-one-shape-2.png" alt="">
        </div>
        <div class="why-choose-one-shape-3 float-bob-x">
            <img src="assets/images/shapes/why-choose-one-shape-3.png" alt="">
        </div>
        <div class="why-choose-one-shape-4 float-bob-y">
            <img src="assets/images/shapes/why-choose-one-shape-4.png" alt="">
        </div>
        <div class="why-choose-one-shape-5 float-bob-y">
            <img src="assets/images/shapes/why-choose-one-shape-5.png" alt="">
        </div>
        <div class="why-choose-one-shape-6 float-bob-x">
            <img src="assets/images/shapes/why-choose-one-shape-6.png" alt="">
        </div>
        <div class="why-choose-one-img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="assets/images/resources/why-choose-one-img.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="why-choose-one__left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Why choose</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-3.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-4.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Few reasons for people choosing ATC</h2>
                        </div>
                        <p class="why-choose-one__text">Nullam eu nibh vitae est tempor molestie id sed ex. Quisque
                            dignissim maximus ipsum, sed rutrum metus tincidunt et.</p>
                        <div class="why-choose-one__list-box">
                            <ul class="list-unstyled why-choose-one__list">
                                <li>
                                    <div class="why-choose-one__single">
                                        <div class="why-choose-one__list-icon">
                                            <span class="icon-easy-to-use"></span>
                                        </div>
                                        <div class="why-choose-one__list-title-box">
                                            <div class="why-choose-one__list-title-inner">
                                                <h3 class="why-choose-one__list-title">Fast & easy process</h3>
                                            </div>
                                            <div class="why-choose-one__list-text-box">
                                                <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                    sectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-one__single">
                                        <div class="why-choose-one__list-icon">
                                            <span class="icon-contract"></span>
                                        </div>
                                        <div class="why-choose-one__list-title-box">
                                            <div class="why-choose-one__list-title-inner">
                                                <h3 class="why-choose-one__list-title">Fast & easy process</h3>
                                            </div>
                                            <div class="why-choose-one__list-text-box">
                                                <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                    sectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-one__single">
                                        <div class="why-choose-one__list-icon">
                                            <span class="icon-policy"></span>
                                        </div>
                                        <div class="why-choose-one__list-title-box">
                                            <div class="why-choose-one__list-title-inner">
                                                <h3 class="why-choose-one__list-title">Control over policy</h3>
                                            </div>
                                            <div class="why-choose-one__list-text-box">
                                                <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                    sectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-one__single">
                                        <div class="why-choose-one__list-icon">
                                            <span class="icon-fund"></span>
                                        </div>
                                        <div class="why-choose-one__list-title-box">
                                            <div class="why-choose-one__list-title-inner">
                                                <h3 class="why-choose-one__list-title">Save your money</h3>
                                            </div>
                                            <div class="why-choose-one__list-text-box">
                                                <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                    sectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose One End-->

    <!--Team One Start-->
    <section class="team-one" id="management">
        <div class="team-one__shape-1 float-bob-y">
            <img src="assets/images/shapes/team-one-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Management Team</p>
                    <div class="section-title-shape-1">
                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Meet our experienced <br> management</h2>
            </div>
            <div class="row">
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <div class="team-one__img-box">
                                <img src="assets/images/team/team-1-1.jpg" alt="">
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <p class="team-one__sub-title">Manager</p>
                            <h3 class="team-one__name"><a href="team-details.html">Thomas Jakson</a></h3>
                            <ul class="list-unstyled team-one__social-two">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <div class="team-one__img-box">
                                <img src="assets/images/team/team-1-2.jpg" alt="">
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <p class="team-one__sub-title">Manager</p>
                            <h3 class="team-one__name"><a href="team-details.html">Hallen Smith</a></h3>
                            <ul class="list-unstyled team-one__social-two">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <div class="team-one__img-box">
                                <img src="assets/images/team/team-1-3.jpg" alt="">
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <p class="team-one__sub-title">Manager</p>
                            <h3 class="team-one__name"><a href="team-details.html">David Cooper</a></h3>
                            <ul class="list-unstyled team-one__social-two">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>

        </div>
    </section>
    <!--Team One End-->

    <!--Counter One Start-->
    <Section class="counter-one">
        <div class="counter-one-shape-1 float-bob-y">
            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
        </div>
        <div class="counter-one-shape-2 float-bob-y">
            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-insurance-1"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="705">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Staff</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-group"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="50">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Branches</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-life-insurance"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="100">00</h3>
                                    <span class="counter-one__plus">k+</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Customers</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-success"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="97">00</h3>
                                    <span class="counter-one__plus">%</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Our success rate</p>
                    </div>
                </div>
                <!--Counter One Single End-->
            </div>
        </div>
    </Section>
    <!--Counter One End-->

    <!--Get about -->
    <section class="contact-page" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page__left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Contact us</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Feel free to get in touch with us anytime.</h2>
                        </div>
                        <div class="contact-page__call-email">
                            <div class="contact-page__call-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-page__call-email-content">
                                <h4>
                                    <a href="tel:9200368090" class="contact-page__call-number">+234 803 703 9539</a>
                                    <a href="mailto:needhelp@company.com" class="contact-page__email">info@albabelo.com</a>
                                </h4>
                            </div>
                        </div>
                        <p class="contact-page__location-text">TIMBER SHED, Tudan Wada 810282, Zaria</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <div class="contact-page__form">
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a message"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Send a Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section id="services">
    <!--Get about End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-shape-2 float-bob-y">
            <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
        </div>
        <div class="testimonial-one-shape-3 float-bob-y">
            <img src="assets/images/shapes/testimonial-one-shape-3.png" alt="">
        </div>
        <div class="container">
            <div class="testimonial-one__top">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="testimonial-one__top-left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">testimonials</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">What our customers are <br> talking about</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-one__top-right">
                            <p class="testimonial-one__top-text">Pellentesque habitant morbi tristique senectus
                                netus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet
                                blandit enim feugiat mattis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-one__bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                             data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2
                                    }
                                }
                            }'>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-img-box">
                                                <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                                <div class="testimonial-one__quote">
                                                    <img src="assets/images/testimonial/testimonial-1-quote.png"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <div class="testimonial-one__client-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="testimonial-one__client-details">
                                                    <h3 class="testimonial-one__client-name">Smith Vectoria</h3>
                                                    <p class="testimonial-one__client-sub-title">director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                            senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                            Donec aliquet blandit enim feugiat mattis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-img-box">
                                                <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                                <div class="testimonial-one__quote">
                                                    <img src="assets/images/testimonial/testimonial-1-quote.png"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <div class="testimonial-one__client-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="testimonial-one__client-details">
                                                    <h3 class="testimonial-one__client-name">Christine Eve</h3>
                                                    <p class="testimonial-one__client-sub-title">director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                            senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                            Donec aliquet blandit enim feugiat mattis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-img-box">
                                                <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                                <div class="testimonial-one__quote">
                                                    <img src="assets/images/testimonial/testimonial-1-quote.png"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <div class="testimonial-one__client-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="testimonial-one__client-details">
                                                    <h3 class="testimonial-one__client-name">Hallen Smith</h3>
                                                    <p class="testimonial-one__client-sub-title">director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                            senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                            Donec aliquet blandit enim feugiat mattis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-img-box">
                                                <img src="assets/images/testimonial/testimonial-1-4.jpg" alt="">
                                                <div class="testimonial-one__quote">
                                                    <img src="assets/images/testimonial/testimonial-1-quote.png"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <div class="testimonial-one__client-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="testimonial-one__client-details">
                                                    <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                                    <p class="testimonial-one__client-sub-title">director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                            senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                            Donec aliquet blandit enim feugiat mattis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Tracking Start-->
    <section class="tracking">
        <div class="container">
            <div class="tracking__inner">
                <div class="tracking-shape-1 float-bob-y">
                    <img src="assets/images/shapes/tracking-shape-1.png" alt="">
                </div>
                <div class="tracking-shape-2 float-bob-x">
                    <img src="assets/images/shapes/tracking-shape-2.png" alt="">
                </div>
                <div class="tracking-shape-3 float-bob-x">
                    <img src="assets/images/shapes/tracking-shape-3.png" alt="">
                </div>
                <div class="tracking-shape-4 float-bob-y">
                    <img src="assets/images/shapes/tracking-shape-4.png" alt="">
                </div>
                <div class="tracking__left">
                    <div class="tracking__icon">
                        <span class="icon-folder"></span>
                    </div>
                    <div class="tracking__content">
                        <p class="tracking__sub-title">Work with us</p>
                        <h3 class="tracking__title">Start developing your career</h3>
                    </div>
                </div>
                <div class="tracking__btn-box">
                    <a href="about.html" class="thm-btn tracking__btn">Apply for Job</a>
                </div>
            </div>
        </div>
    </section>
    <!--Tracking End-->

    <!--Site Footer Start-->
    <footer class="site-footer">
        <div class="site-footer-bg" style="background-image: url('{{ asset('basic/logo.png') }}');">
        </div>
        <div class="container">
            <div class="site-footer__top">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="#home"><img src="{{ asset('basic/logo.png') }}" alt="" width="160"></a>
                            </div>
                            <div class="footer-widget__about-text-box">
                                <p class="footer-widget__about-text">Aliqua id fugiat nostrud irure ex duis ea quis
                                    id quis ad et. Sunt qui esse pariatur duis deserunt.</p>
                            </div>
                            <div class="site-footer__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__contact clearfix">
                            <h3 class="footer-widget__title">Contact</h3>
                            <ul class="footer-widget__contact-list list-unstyled clearfix">
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">info@albabello.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>TIMBER SHED, Tudan Wada 810282, Zaria</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="footer-widget__open-hour">
                                <h3 class="footer-widget__open-hour-title">Open Hours</h3>
                                <h3 class="footer-widget__open-hour-text">Mon – Sun: 8:00 am to 6:00 pm Sunday:
                                    Closed</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__newsletter">
                            <h3 class="footer-widget__title">Newsletter</h3>
                            <p class="footer-widget__newsletter-text">Subscribe our newsletter to get our <br>
                                latest update & news.</p>
                            <form class="footer-widget__newsletter-form">
                                <div class="footer-widget__newsletter-input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                    <button type="submit" class="footer-widget__newsletter-btn"><i
                                            class="far fa-paper-plane"></i></button>
                                </div>
                            </form>
                            <div class="footer-widget__phone">
                                <div class="footer-widget__phone-icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="footer-widget__phone-text">
                                    <a href="tel:9200368090">+234 803 703 9539</a>
                                    <p>Call Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">© All Copyright {{ date('Y') }} by <a href="#">Albabello Trading Company Ltd</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="143"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">needhelp@insur.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/vendors/timepicker/timePicker.js') }}"></script>
<script src="{{ asset('assets/vendors/circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>


<!-- template js -->
<script src="assets/js/insur.js"></script>
</body>

</html>
