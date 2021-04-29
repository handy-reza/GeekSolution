<!doctype html lang="en">

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Geek Solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Este é um site exemplo usando o Bootstrap Snippets">
    <meta name="author" content="Antonio Carlos Barbosa">

    <link rel="apple-touch-icon" href="[INSERT apple-tuch-icon.png]">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- External Styles -->
    <link href="assets/css/ionicons.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
    <link href="assets/js/animate.min.css" rel="stylesheet" />
    <link href="assets/css/animations.min.css" rel="stylesheet" />
    <link href="assets/css/style-solid-red.css" rel="stylesheet" />
    <link href="assets/js/vegas/jquery.vegas.min.css" rel="stylesheet" />
    <!-- End External Styles -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <! -- DOWNLOAD LAST VERSION IN http://modernizr.com/ -->
    <!-- script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
</head>

<body data-spy="scroll" data-target="#menu-section">

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Start coding here -->

    <!--MENU SECTION START-->
    <div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">G E E K</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">HOME</a>
                    </li>
                    <li><a href="#services">SERVICES</a>
                    </li>
                    <li><a href="#pricing">PRICING</a>
                    </li>
                    <li><a href="#team">TEAM</a>
                    </li>
                    <li><a href="#contact">CONTACT</a>
                    </li>
                    <li ><a href="./Admin/login.php" class="btn button-custom btn-custom-one col-md-12">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--MENU SECTION END-->

    <div id='home'>
        <div class="container">
            <!-- Text Corousel -->
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                    <div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">
                        <div class="carousel-inner">
                            <div class="item active">
                                <h3>GEEK PARTNERSHIP</h3>
                                <p>Kami siap menjadi partner anda dalam melayani pengembangan teknologi informasi terkini yang lebih efektif dan efisien serta berkomitmen dalam memberikan support system terkait permasalahan IT.</p>
                            </div>
                            <div class="item">
                                <h3>GEEK SOLUTION</h3>
                                <p>Kami menawarkan berbagai layanan Teknologi Informasi untuk mendukung serta meningkatkan kinerja bisnis dan usaha anda baik untuk perusahaan swasta, instansi pemerintahan hingga usaha kecil menengah (UKM/UMKM).</p>
                            </div>
                            <!-- Add more Items as you want ... -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Text Carousel -->
            <!-- Social Buttons -->
            <div class="row animate-in" data-anim-type="fade-in-up">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
                    <p> <a href="#services" class="btn button-custom btn-custom-one">Learn More</a></p>
                    <div class="social">
                        <a href="facebook.com" class="btn button-custom btn-custom-one"><i class="fa fa-facebook "></i></a>
                        <a href="twitter,com" class="btn button-custom btn-custom-one"><i class="fa fa-twitter"></i></a>
                        <a href="google.com" class="btn button-custom btn-custom-one"><i class="fa fa-google-plus "></i></a>
                        <a href="linkedin.com" class="btn button-custom btn-custom-one"><i class="fa fa-linkedin "></i></a>
                        <a href="pinterest.com" class="btn button-custom btn-custom-one"><i class="fa fa-pinterest "></i></a>
                        <a href="github.com" class="btn button-custom btn-custom-one"><i class="fa fa-github "></i></a>
                    </div>
                </div>
            </div>
            <!-- End Social Buttons -->
        </div>

    </div>

    <div id='services'>
        <div class="container">

            <!-- SERVICE SECTION START -->
            <div class="row text-center header">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                    <h3>Services</h3>
                    <hr/>
                </div>
            </div>
            <div class="row animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="services-wrapper">
                        <i class="ion-iphone"></i>
                        <h3>Phone Applications</h3> Aplikasi berbasis mobile dapat membantu bisnis anda tetap kompetitif dan meningkatkan produktivitas.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="services-wrapper">
                        <i class="ion-wrench"></i>
                        <h3>Tools Development</h3> Dengan Tools Developent anda dapat meningkatkan efesiensi pengelolahan sumber daya bisnis secara signifikan.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="services-wrapper">
                        <i class="ion-cloud"></i>
                        <h3>Cloud Support</h3> Cloud support menawarkan banyak keuntungan bagi bisnis Anda salah satunya fleksibilitas untuk terhubung ke bisnis Anda di mana saja, kapan saja.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="services-wrapper">
                        <i class="ion-android-chat"></i>
                        <h3>Chat Applications</h3> Chat Aplication sangat penting dalam bisnis modern karena komunikasi adalah fondasi untuk membangun lingkungan kerja yang sukses.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="services-wrapper">
                        <i class="ion-social-wordpress"></i>
                        <h3>Word Press Portal</h3> WordPress memiliki fitur dan fungsi yang membuatnya ideal untuk membangun semua jenis situs web bisnis yang anda perlukan.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="services-wrapper">
                        <i class="ion-android-call"></i>
                        <h3>VOIP Systems</h3> VOIP System dapat mengurangi investasi biaya dan waktu sekaligus meningkatkan produktivitas untuk bisnis anda.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="services-wrapper">
                        <i class="ion-university"></i>
                        <h3>e-Learning Portals</h3> e-Learning Portals dapat membuat produktivitas karyawan bisnis anda menjadi lebih tinggi serta efisiensi kerja yang lebih baik.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="services-wrapper">
                        <i class="ion-map"></i>
                        <h3>Geo-processing Systems</h3> Geo-processing Systems dalam bisnis telah menjadi arus utama di setiap sektor bisnis baik di sektor swasta maupun publik.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="services-wrapper">
                        <i class="ion-cash"></i>
                        <h3>Financial Apps</h3> Dengan menggunakan Financial Apps anda dapat meningkatkan regulasi keuangan yang dimiliki perusahan anda
                    </div>
                </div>
            </div>
            <!--SERVICE SECTION END-->

        </div>
    </div>

    <div id='pricing'>
        <div class="container">

            <!-- PRICING SECTION START -->
            <div class="row text-center header animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>Pricing</h3>
                    <hr/>
                </div>
            </div>
            <div class="row pad-bottom animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <div class="row db-padding-btm db-attached">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="light-pricing">
                                <div class="price">
                                    <sup>$</sup>199<sub><h6>/ month</h6></sub>
                                    
                                </div>
                                <div class="type">STARTER</div>
                                <ul>
                                    <li><i class="glyphicon glyphicon-user"></i>30 Users </li>
                                    <li><i class="glyphicon glyphicon-folder-open"></i>150 Projects </li>
                                    <li><i class="glyphicon glyphicon-tower"></i>Lead Required</li>
                                    <li><i class="glyphicon glyphicon-time"></i>3 year minimum</li>
                                </ul>
                                <div class="pricing-footer">
                                    <a href="#contact" class="btn button-custom btn-custom-one">ORDER</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="light-pricing popular">
                                <div class="price">
                                    <sup>$</sup>499<sub><h6>/ month</h6></sub>
                                </div>
                                <div class="type">PROFESSIONAL</div>
                                <ul>
                                    <li><i class="glyphicon glyphicon-user"></i>50 Users </li>
                                    <li><i class="glyphicon glyphicon-folder-open"></i>300 Projects </li>
                                    <li><i class="glyphicon glyphicon-tower"></i>Lead Required</li>
                                    <li><i class="glyphicon glyphicon-time"></i>2 year minimum</li>
                                </ul>
                                <div class="pricing-footer">
                                    <a href="#contact" class="btn button-custom btn-custom-one">ORDER</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="light-pricing">
                                <div class="price">
                                    <sup>$</sup>1.999<sub><h6>/ month</h6></sub>
                                </div>
                                <div class="type">EXPERT</div>
                                <ul>
                                    <li><i class="glyphicon glyphicon-user"></i>250 Users </li>
                                    <li><i class="glyphicon glyphicon-folder-open"></i>500 Projects </li>
                                    <li><i class="glyphicon glyphicon-tower"></i>Lead Required</li>
                                    <li><i class="glyphicon glyphicon-time"></i>1 year minimum</li>
                                </ul>
                                <div class="pricing-footer">
                                    <a href="#contact" class="btn button-custom btn-custom-one">ORDER</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="light-pricing">
                                <div class="price">
                                    <sup>$</sup>12,599<sub><h6>one time</h6></sub>
                                </div>
                                <div class="type">CORPORATE</div>
                                <ul>
                                    <li><i class="glyphicon glyphicon-user"></i>Unlimited Users </li>
                                    <li><i class="glyphicon glyphicon-folder-open"></i>Unlimited Projects </li>
                                    <li><i class="glyphicon glyphicon-tower"></i>Lead not Required</li>
                                    <li><i class="glyphicon glyphicon-time"></i>No Obligation</li>
                                </ul>
                                <div class="pricing-footer">
                                    <a href="#contact" class="btn button-custom btn-custom-one">ORDER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRICING SECTION END -->
        </div>
    </div>


    </div>

    <div id='team'>
        <div class="container">

            <!-- TEAM SECTION START -->
            <div class="row text-center header animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>Our Team</h3>
                    <hr/>
                </div>
            </div>
            <div class="row animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-wrapper">
                        <div class="team-inner" style="background-image: url('assets/img/team/5.jpg')">
                        </div>
                        <div class="description">
                            <h3> Bagus Sadewa</h3>
                    <h5> <strong> Backend Developer </strong></h5>
                    <p>Hallo Bagus here, I'll do your backend system perfectly</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="team-wrapper">
                <div class="team-inner" style="background-image: url('assets/img/team/7.jpeg')">
                </div>
                <div class="description">
                    <h3> Cholid Firdaus Abada </h3>
                    <h5> <strong> Mobile Developer </strong></h5>
                    <p>Hallo Cholid here, i create beatiful and usefull mobile apps.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="team-wrapper">
                <div class="team-inner" style="background-image: url('assets/img/team/3.jpg')">
                </div>
                <div class="description">
                    <h3>Handy Reza </h3>
                    <h5> <strong> Web Developer </strong></h5>
                    <p>Hallo Reza here, i love to code beautifully simple thing.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="team-wrapper">
                <div class="team-inner" style="background-image: url('assets/img/team/6.jpg')">

                </div>
                <div class="description">
                    <h3>Anonymous</h3>
                    <h5> <strong> Project Sacrifice</strong></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM SECTION END -->

    </div>

    </div>

    <div id='contact'>
        <div class="container">
            <!-- CONTACT SECTION START -->
            <div class="row text-center header animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>Address </h3>
                    <hr/>
                </div>
            </div>
            <div class="row animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="contact-wrapper">
                        <h3>Social Network</h3>
                        <p>
                            page you can visit to find out about our company.
                        </p>
                        <div class="social-below">
                            <a href="#" class="btn button-custom btn-custom-two"> Facebook</a>
                            <a href="#" class="btn button-custom btn-custom-two"> Twitter</a>
                            <a href="#" class="btn button-custom btn-custom-two"> Google +</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="contact-wrapper">
                        <h3>Quick Contact</h3>
                        <h4><strong>Email : </strong> geekforce@gmail.com</h4>
                        <h4><strong>Call : </strong> +62 8123456789 </h4>
                        <h4><strong>IG : </strong> GeekForce </h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="contact-wrapper">
                        <h3>Address : </h3>
                        <h4>Dau, Malang</h4>
                        <h4>Indonesia</h4>
                    </div>
                </div>
            </div>
            <!--CONTACT SECTION END-->

        </div>

        <div id='signup'>
            <div class="container">
                <!-- SECTION SIGN UP START -->
                <div class="contact-page">
                    <div class="container">
                        <div class="center">
                            <h2>Leave a Message</h2>
                        </div>
                        <div class="row contact-wrap">
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="[change.php]">
                                <div class="wow fadeInDown">
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" name="name" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" name="email" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone *</label>
                                            <input type="tel" class="form-control" value="" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="company-name">Company Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="wow fadeInRight">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="subject">Subject *</label>
                                            <input type="text" name="subject" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message *</label>
                                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- SECTION SIGN UP END -->

            </div>

        </div>

    </div>

    <section id="copyright">
        <div class="container">
            <div class="footer-div center">
                &copy; 2021 Geek Solution | <a target="_blank">by Geek</a>
            </div>
        </div>
    </section>


    <!-- Coding End -->

    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- External Libs -->
    <script src="assets/js/vegas/jquery.vegas.min.js"></script>
    <script src="assets/js/jquery.easing.min.jsj"></script>
    <script src="assets/js/source/jquery.fancybox.js"></script>
    <script src="assets/js/jquery.isotope.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="assets/js/animations.min.js"></script>
    <!-- End External Libs -->
    <script src="assets/js/app.js"></script>

</body>

</html>
