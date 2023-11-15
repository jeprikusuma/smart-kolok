<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Developing Education, Economics and Social Center for Kolok Disability Community (Dumb and Deaf) based Mobile Application" />
    <meta name="keywords" content="Smart Kolok, Bengkala, Kolok" />

    <!--====== TITLE TAG ======-->
    <title>Smart Kolok: Hola!</title>

    <!--====== FAVICON ICON =======-->
    <link rel="icon" href="{{asset('images/welcome/favicon.png')}}" />

    <!--====== STYLESHEETS ======-->
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/typography.css')}}" rel="stylesheet">
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/blog-and-pages.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <script src="{{asset('js/welcome/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- include the script -->
    <link rel="stylesheet" href="{{asset('css/alertify.min.css')}}" />
    <script src="{{asset('js/alertify.min.js')}}"></script>

</head>

<body class="overflow-xhidden" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <header class="top-area" id="home">
    <!--START TOP AREA-->
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 flex-v-center">
                                <div class="navbar-header">
                                    <a href="index.html" class="custom-logo-link default-logo"><img src="{{asset('images/welcome/logo.png')}}" alt="logo"></a>
                                    <a href="index.html" class="custom-logo-link sticky-logo"><img src="{{asset('images/welcome/sticky_logo.png')}}" alt="logo"></a>
                                </div>
                                <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50">
                                    <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                                    <path class="line middle" d="m 30,50 h 40" />
                                    <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                                </svg>
                                <div id="main-nav" class="stellarnav">
                                    <ul id="nav" class="nav navbar-nav pull-right">
                                        <li class="active"><a href="#home">Home</a>
                                        </li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#teams">Teams</a></li>
                                        <li><a href="#screenshots">Screenshots</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-call-to-action hidden-sm hidden-xs hidden-md">
                                    <a href="#" class="action-button">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
    </header>
    <!--END TOP AREA-->

    <!--WELCOME TEXT AREA-->
    <div class="welcome-text-area font16 white">
        <div class="area-bg"></div>
        <div class="welcome-area section-padding">
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                        <div class="welcome-text">
                            <h4 class="wow fadeInUp" data-wow-delay="0.3s">Holaa</h4>
                            <h1 class="wow fadeInUp" data-wow-delay="0.6s">Introduction for <span>Smart Kolok Mobile Application</span></h1>
                            <p class="wow fadeInUp" data-wow-delay="0.9s">Developing Education, Economics and Social Center for Kolok Disability Community (Dumb and Deaf) based Mobile Application</p>
                            <div class="home-button mt40 xs-mt40 wow fadeInUp" data-wow-delay="1.2s">
                                <a class="xs-mb20" href="#">download</a>
                                <a href="#features" class="scrollTo">get started <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-layer-1 hidden-sm hidden-xs">
                <div class="home1-layer-1 wow fadeInRight" data-wow-delay="0.5s">
                    <img src="{{asset('images/welcome/screenshots/s1.png')}}" alt="">
                </div>
                <div class="home1-layer-2 wow fadeInUp" data-wow-delay="1s">
                    <img src="{{asset('images/welcome/screenshots/s2.png')}}" alt="">
                </div>
                <div class="home1-layer-3 wow fadeInRight" data-wow-delay="1.5s">
                    <img src="{{asset('images/welcome/screenshots/s3.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--WELCOME TEXT AREA END-->

    <!--FEATURES AREA-->
    <section class="features-area section-padding fix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="area-title sm-center xs-center">
                        <h4 class="subtitle">App Features</h4>
                        <h2>Powerful Set of Features</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="features-slider">
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-graduation"></i></div>
                            <h3>Education</h3>
                        </div>
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-graph-pie"></i></div>
                            <h3>Economy</h3>
                        </div>
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-user-group"></i></div>
                            <h3>Socials</h3>
                        </div>
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-photo-group"></i></div>
                            <h3>Arts</h3>
                        </div>
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-archive"></i></div>
                            <h3>Kolok Dictionaries</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FEATURES AREA END-->

    <!--ABOUT AREA-->
    <section class="about-area section-padding gray-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="area-image-content sm-mb50 xs-mb50 wow fadeInRight" data-wow-delay="0.3s">
                        <img src="{{asset('images/welcome/about/about-mockup.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="area-content">
                        <h3 class="wow fadeInRight" data-wow-delay="0.3s">Hi! This Is Me, Smart Kolok</h3>
                        <div class="text-icon-box details-content-box wow fadeInRight" data-wow-delay="0.6s">
                            <div class="box-icon"><i class="dripicons-graph-pie"></i></div>
                            <p>Smart Kolok is an application that becomes an educational center for kolok students, helps the kolok people economic activities, and presents the cultures and art of kolok people. In addition, in the Smart Kolok application, also contains a kolok dictionary feature.</p>
                            <a href="#screenshots" class="scrollTo read-more active">See more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--PROCESS AREA-->
    <section class="process-area padding-top" id="process">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title center">
                        <h4 class="subtitle">quick setup</h4>
                        <h2>Come Join and Be A Part of Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="process-content">
                        <div class="area-bg"></div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-process-box text-icon-box xs-mb50 wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="process-icon"><i class="dripicons-enter"></i></div>
                                    <h3>Register First</h3>
                                    <p>Download the application and register yourself by completing the registration form on the application</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-process-box text-icon-box xs-mb50 wow fadeInLeft" data-wow-delay="0.6s">
                                    <div class="process-icon"><i class="dripicons-user"></i></div>
                                    <h3>Verify Your Account</h3>
                                    <p>Verify your account in verification link that has been sent to your email</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-process-box text-icon-box hidden-sm wow fadeInLeft" data-wow-delay="0.9s">
                                    <div class="process-icon"><i class="dripicons-device-mobile"></i></div>
                                    <h3>Enjoy All for Free</h3>
                                    <p>Access all services in just one hand, anywhere and anytime free</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PROCESS AREA END-->

    <!--GOAL AREA-->
    <section class="goal-area section-padding" id="goal">
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="area-content sm-center xs-center wow fadeInLeft" data-wow-delay="0.3s">
                        <h3>Smart Kolok Is The Right Choice</h3>
                        <p>This application aims to optimizing the learning (education) process for kolok students at the Inclusive School of SDN 2 Bengkala, optimizing the marketing of the kolok community's creative industry products during the COVID-19 pandemic, providing information on an overview of the culture and arts of the kolok community, and providing references in the form of a kolok dictionary to people who didnt know kolok sign language.</p>
                        <a href="#" class="read-more active">download now</a>
                        <a href="#contact" class="scrollTo read-more">contact us</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="area-image-content hidden-sm hidden-xs wow fadeIn" data-wow-delay="0.6s">
                        <div class="goal-layers">
                            <div class="goal-layer-1"><img src="{{asset('images/welcome/mockups/s7.png')}}" alt=""></div>
                            <div class="goal-layer-2" data-parallax='{"y": 180}'><img src="{{asset('images/welcome/mockups/s2.png')}}" alt=""></div>
                            <div class="goal-layer-3" data-parallax='{"y": 70}'><img src="{{asset('images/welcome/mockups/goal-dots-shape.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--GOAL AREA END-->

    <!--VIDEO  AREA-->
    <section class="video-promo-area section-padding white" id="video">
        <div class="area-bg"></div>
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="area-image-content sm-center xs-center sm-mb50 xs-mb50 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="video-bg-layer" data-parallax='{"x": -50,"y": -50}'><img src="{{asset('images/welcome/video/dots-layer.png')}}" alt=""></div>
                        <img src="{{asset('images/welcome/video/video-bg.jpg')}}" alt="">
                        <div class="video-button item-center"><button class="video-popup" data-video-id="0DQ-Tr7jC30"><i class="fa fa-play"></i></button></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="area-content sm-center xs-center wow fadeInRight" data-wow-delay="0.6s">
                        <h4 class="subtitle">latest video</h4>
                        <h3>Perfect Solution For Kolok People</h3>
                        <p>Bengkala Village known as kolok village.Kolok literally means dumb and deaf, then Kolok Village means a village where some of the people do not have the ability to speak and hear. These limitations have caused a serious problem for the kolok people in all aspects of life such as education, social, art, and economic aspects. Based on the problems above, Smart Kolok is here as a solution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--VIDEO  AREA END-->

    <!--TEAM AREA-->
    <section class="team-area padding-100-50 gray-bg" id="teams">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="area-title">
                        <h4 class="subtitle">our teams</h4>
                        <h2>Here we developed with Love</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="team-slider-two">
                        <div class="single-team">
                            <div class="member-thumb">
                                <img src="{{asset('images/welcome/team/anggri.png')}}" alt="">
                                <div class="member-social">
                                    <ul>
                                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/ktanggriani_/"><i class="fa fa-instagram"></i></a></li>
                                        <li><a target="_blank" href="mailto:niketut1504anggriani@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="name-designation">
                                <h3>Ketut Anggriani</h3>
                                <p class="designation">Leader</p>
                            </div>
                        </div>
                        <div class="single-team">
                            <div class="member-thumb">
                                <img src="{{asset('images/welcome/team/jepri.png')}}" alt="">
                                <div class="member-social">
                                    <ul>
                                        <li><a target="_blank" href="https://www.facebook.com/people/Jepri-Kusuma/100008853168554/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/jeprikusuma_/"><i class="fa fa-instagram"></i></a></li>
                                        <li><a target="_blank" href="mailto:jeprikusuma11@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="name-designation">
                                <h3>Jepri Kusuma</h3>
                                <p class="designation">Developer</p>
                            </div>
                        </div>
                        <div class="single-team">
                            <div class="member-thumb">
                                <img src="{{asset('images/welcome/team/pirda.png')}}" alt="">
                                <div class="member-social">
                                    <ul>
                                        <li><a target="_blank" href="https://www.facebook.com/ayu.virdayanti"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/ayupirday/"><i class="fa fa-instagram"></i></a></li>
                                        <li><a target="_blank" href="mailto:ayu.pirdayanti33@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="name-designation">
                                <h3>Ayu Pirda</h3>
                                <p class="designation">Content Creator</p>
                            </div>
                        </div>
                        <div class="single-team">
                            <div class="member-thumb">
                                <img src="{{asset('images/welcome/team/pardi.png')}}" alt="">
                                <div class="member-social">
                                    <ul>
                                        <li><a target="_blank" href="https://web.facebook.com/pardy.devata"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/pardi_1343/"><i class="fa fa-instagram"></i></a></li>
                                        <li><a target="_blank" href="mailto:wayan.pardi@undiksha.ac.id"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="name-designation">
                                <h3>Wayan Pardi</h3>
                                <p class="designation">Supervisor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TEAM AREA END-->

    <!--SCREENSHOT AREA-->
    <section class="screenshot-area fix section-padding " id="screenshots">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="area-content xs-center xs-mb50">
                        <h4 class="subtitle">Minimalist Design</h4>
                        <h3>Smart Kolok Screenshots</h3>
                        <p>Here, we offer a minimalist design that makes it easy for the users to use this application. Also, this application does not require a large memory so it can be used on all android devices.</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="screenshot-slider">
                        <div class="single-screenshot">
                            <img src="{{asset('images/welcome/screenshots/s1.png')}}" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="{{asset('images/welcome/screenshots/s2.png')}}" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="{{asset('images/welcome/screenshots/s3.png')}}" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="{{asset('images/welcome/screenshots/s4.png')}}" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="{{asset('images/welcome/screenshots/s5.png')}}" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="{{asset('images/welcome/screenshots/s6.png')}}" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="{{asset('images/welcome/screenshots/s7.png')}}" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="{{asset('images/welcome/screenshots/s8.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SCREENSHOT AREA END-->

    <!--FAQS AREA-->
    <section class="faqs-area padding-top" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="area-image-content hidden-sm hidden-xs">
                        <div class="faqs-mockup-1" data-parallax='{"y": 150, "smoothness": 100}'><img src="{{asset('images/welcome/screenshots/s1.png')}}" alt=""></div>
                        <div class="faqs-mockup-2"><img src="{{asset('images/welcome/faqs/faqs-question.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="area-content sm-mb80 xs-mb50">
                        <h4 class="subtitle font500 alt-font uppercase">ask questions</h4>
                        <h2>Frequently Asked Questions</h2>
                        <div class="panel-group sm-mt50 xs-mt50" id="accordion-main">

                            <!-- start tab content -->
                            <div class="panel panel-default active">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseOne">
                                        <div class="panel-title">
                                            <span>01</span>
                                            <span>What is Smart Kolok? ?</span>
                                            <i class="pull-right fa fa-angle-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">Smart Kolok is an application that becomes an educational center for kolok students, helps the kolok people economic activities, and presents the cultures and art of kolok people. In addition, in the Smart Kolok application, also contains a kolok dictionary feature.</div>
                                </div>
                            </div>
                            <!-- end tab content -->

                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseTwo">
                                        <div class="panel-title">
                                            <span>02</span>
                                            <span>Who is the Smart Kolok application for ?</span>
                                            <i class="pull-right fa fa-angle-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">Smart Kolok kolok application can be used by the kolok people, kolok students, and other people who want to buy the kolok people creative industry products, and also for people who want to know information about the kolok village and kolok people.</div>
                                </div>
                            </div>
                            <!-- end tab content -->


                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseFour">
                                        <div class="panel-title">
                                            <span>03</span>
                                            <span>Can Smart Kolok content increase ?</span>
                                            <i class="pull-right fa fa-angle-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">Yes, of course. adapting the development and conditions of the kolok people, Smart Kolok content will always update and develop so that it can be used optimally.</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQS AREA END-->

    <!--CONTACT AREA-->
    <section class="contact-area padding-100-50 gray-bg" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title center">
                        <h4 class="subtitle">Contact Us</h4>
                        <h2>Call Us Or Started To Talk With Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="contact-content padding50 mb50">
                        <div class="single-contact">
                            <div class="contact-icon"><i class="dripicons-location"></i></div>
                            <h3>Location</h3>
                            <p>Singaraja, Bali, <br>Indonesia</p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon"><i class="dripicons-mail"></i></div>
                            <h3>Mail</h3>
                            <p>admin@smartkolok.com</p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon"><i class="dripicons-phone"></i></div>
                            <h3>Contact</h3>
                            <p>+62 877-3966-2360</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="contact-form mb50">
                        <form action="https://quomodosoft.com/html/applic/applic/process.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="name-field">
                                        <div class="form-input">
                                            <label for="form-name">Your Name</label>
                                            <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Enter Name..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="email-field">
                                        <div class="form-input">
                                            <label for="form-email">Your Mail</label>
                                            <input type="email" class="form-control" id="form-email" name="form-email" placeholder="support@mail.com" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="phone-field">
                                        <div class="form-input">
                                            <label for="form-phone">Your Subject</label>
                                            <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Subject..">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="message-field">
                                        <div class="form-input">
                                            <label for="form-message">Your Message</label>
                                            <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group mb0">
                                        <button class="read-more active" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT AREA END-->

    <!--FOOER AREA-->
    <footer class="footer-area white d-none">
        <div class="area-bg"></div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center">
                            <p>Copyright &copy; Smart Kolok. All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->
    @if (session('registered'))
    <script>
        //get the closable setting value.
        var closable = alertify.alert().setting('closable');
        //grab the dialog instance using its parameter-less constructor then set multiple settings at once.
        alertify.alert()
        .setting({
            'title': 'Welcome to Smart Kolok',
            'label':'Continue',
            'message': 'Congratulation! Your registration has been successful. Please re-open Smart Kolok application and enjoy all the features for free!' ,
            'onok': function(){ alertify.success('Welcome');}
        }).show();
    </script>
    @endif
    <!--====== SCRIPTS JS ======-->
    <script src="{{asset('js/welcome/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/welcome/vendor/bootstrap.min.js')}}"></script>

    <!--====== PLUGINS JS ======-->
    <script src="{{asset('js/welcome/vendor/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/welcome/vendor/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('js/welcome/vendor/jquery.appear.js')}}"></script>

    <script src="{{asset('js/welcome/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/welcome/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/welcome/stellar.js')}}"></script>
    <script src="{{asset('js/welcome/jquery.parallax-layer-scroll.js')}}"></script>
    <script src="{{asset('js/welcome/chaffle.min.js')}}"></script>
    <script src="{{asset('js/welcome/anime.min.js')}}"></script>
    <script src="{{asset('js/welcome/jquery-modal-video.min.js')}}"></script>
    <script src="{{asset('js/welcome/venobox.min.js')}}"></script>
    <script src="{{asset('js/welcome/stellarnav.min.js')}}"></script>
    <script src="{{asset('js/welcome/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/welcome/wow.min.js')}}"></script>
    <script src="{{asset('js/welcome/placeholdem.min.js')}}"></script>
    <script src="{{asset('js/welcome/odometer.min.js')}}"></script>
    <script src="{{asset('js/welcome/contact-form.js')}}"></script>
    <script src="{{asset('js/welcome/footer-reveal.min.js')}}"></script>
    <script src="{{asset('js/welcome/ResizeSensor.min.js')}}"></script>
    <script src="{{asset('js/welcome/theia-sticky-sidebar.min.js')}}"></script>

    <!--===== ACTIVE JS=====-->
    <script src="{{asset('js/welcome/main.js')}}"></script>

</body>
</html>