<?php
include"essentials/header.php";
?>
<!--Mobile contact-->
<div class="popup-modal1">
    <div class="modal" id="menu-popup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="common-heading">
                        <h4 class="mt0 mb0">Write a Message</h4>
                    </div>
                    <button type="button" class="closes" data-bs-dismiss="modal">
                        &times;
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-block fdgn2 mt10 mb10">
                        <form action="#" method="post" name="feedback-form">
                            <div class="fieldsets row">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Full Name" name="name" />
                                </div>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Email Address" name="email" />
                                </div>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Contact Number" name="phone" />
                                </div>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Subject" name="subject" />
                                </div>
                                <div class="col-md-12">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </div>
                            </div>
                            <div class="fieldsets mt20 pb20">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn" data-bs-dismiss="modal">
                                    Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Mobile contact-->
<!--End Header -->

<!--Start Hero-->
<section class="hero-card-web bg-gradient12 shape-bg3" id="home">
    <div class="hero-main-rp container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <!-- <div class="hero-heading-sec">

                    <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s" data-bs-toggle="modal"
                        data-bs-target="#menu-popup">Contact Us <i class="fas fa-chevron-right fa-ani"></i><span
                            class="circle"></span></a>
                    <div class="awards-block-tt wow fadeIn" data-wow-delay="1s">
                        <img src="images/hero/awards-logo.png" alt="awards-logo" class="img-fluid" />
                    </div>
                </div> -->
                <img src="images/rocket2.png" alt="" class="img-wh">
            </div>
            <div class="col-lg-7">
                <div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">
                    <div class="video-intro-pp">

                    </div>
                    <div class="hero-heading-sec">
                        <h2 class="wow fadeIn" data-wow-delay="0.3s">
                            <span>Web.</span> <span>Mobile.</span> <span>Graphic.</span>
                            <span>Marketing.</span>
                        </h2>
                        <p class="wow fadeIn" data-wow-delay="0.6s">
                            Website and App development solution for transforming and innovating
                            businesses.
                        </p>


                    </div>

                </div>

                <div class="hero-right-scmm">
                    <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                        <div class="d-flex lines-s mb-2 mt-4">
                            <div class="line-h"></div>
                            <h4>Our Technology</h4>
                            <div class="line-h"></div>
                        </div>
                        <div class="owl-carousel service-card-prb">
                            <div class="card-wh">
                                <div class="service-slide card-bg-c" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="images/ux.png" />
                                                <div class="title-serv-c">
                                                    <span>Web Development</span>
                                                </div>
                                            </div>
                                            <div class="white-box">

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-wh">
                                <div class="service-slide card-bg-b" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="images/marketing-strategy.png" />
                                                <div class="title-serv-c">
                                                    <span>Digital Marketing </span>
                                                </div>
                                            </div>
                                            <div class="white-box">

                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-wh">
                                <div class="service-slide card-bg-a" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="images/app-develop.png" />
                                                <div class="title-serv-c"><span>App Development </span> </div>
                                            </div>
                                            <div class="white-box">

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class=" card-wh">
                                <div class="service-slide card-bg-d" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="images/business-card.png" />
                                                <div class="title-serv-c">
                                                    <span>Brand Identity </span>
                                                </div>
                                            </div>
                                            <div class="white-box">

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class=" card-wh">
                                <div class="service-slide card-bg-e" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="images/service/marketing.png" />
                                                <div class="title-serv-c">
                                                    <span>Marketing</span> Solution
                                                </div>
                                            </div>
                                            <div class="white-box">

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>


                            <div class=" card-wh">
                                <div class="service-slide card-bg-f" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="images/service/ewallet.png" />
                                                <div class="title-serv-c">
                                                    <span>e-Wallet</span> Solution
                                                </div>
                                            </div>
                                            <div class="white-box">

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Hero-->
<!-- company awards icons -->

<!-- company awards icons -->
<!--Start About-->
<section class="about-sec-app pad-tb pt60 dark-bg2" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 cls-pt">
                <div class="common-heading text-l">
                    <h2 class="mb30 clr-w">
                        About Us
                    </h2>
                    <h6 class="color-sha">
                        About Us
                    </h6>
                    <p class="clr-w">
                        Lorem Ipsum is text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled
                        it to make a type specimen book.
                    </p>
                    <p class="mt10 clr-w">
                        <span class="">Lorem Ipsumis simply dummy text of the printing and typesetting
                            industry. Simply dummy text of the printing and typesetting
                            industry.
                        </span>
                    </p>
                </div>
                <div class="cta-card mt40">
                    <!-- <h3 class="mb30 clr-w">Let's Start a New Project Together</h3> -->
                    <a href="#" class="btn-outline lnk">Request A Quote<i class="fas fa-chevron-right fa-icon"></i><span
                            class="circle"></span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="funfact">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                            <div class="funfct srcl1">
                                <img src="images/icons/startup.svg" alt="niwax app development template" />
                                <span class="services-cuntr counter">20</span><span class="services-cuntr">+</span>
                                <p class="font-s14">Years Experience</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                            <div class="funfct srcl2">
                                <img src="images/icons/team.svg" alt="niwax app development template" />
                                <span class="services-cuntr counter">250</span><span class="services-cuntr">+</span>
                                <p class="font-s14">Talented Squad</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                            <div class="funfct srcl3">
                                <img src="images/icons/mobile.svg" alt="niwax app development template" />
                                <span class="services-cuntr counter">1200</span><span class="services-cuntr">+</span>
                                <p class="font-s14">Apps Developed</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                            <div class="funfct srcl4">
                                <img src="images/icons/computers.svg" alt="niwax app development template" />
                                <span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
                                <p class="font-s14">Projects Delivered</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                            <div class="funfct srcl5">
                                <img src="images/icons/world.svg" alt="niwax app development template" />
                                <span class="services-cuntr counter">120</span><span class="services-cuntr">+</span>
                                <p class="font-s14">Countries Served</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                            <div class="funfct srcl1">
                                <img src="images/icons/deal.svg" alt="niwax app development template" />
                                <span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
                                <p class="font-s14">Client Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End About-->
<div class="niwax-company-awards-cover">
    <div class="container text-center">
        <div class="row v-center text-center effects">

            <div class="companytime nxlp-b col-lg-3">
                <!-- <p>20 Years* <span>Industry Experience</span></p> -->
                <p>We are experts in</p>
            </div>

            <div class="companyawards col-lg-9">
                <div class="niwax-logo-awards niwax-logo-slider owl-carousel">
                    <div class="industry-workfors">
                        <img src="images/icons/house.svg" alt="img" />
                        <h6 class="clr-w">Real estate</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/travel-case.svg" alt="img" />
                        <h6 class="clr-w">Tour &amp; Travels</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/video-tutorials.svg" alt="img" />
                        <h6 class="clr-w">Education</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/taxi.svg" alt="img" />
                        <h6 class="clr-w">Transport</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/event.svg" alt="img" />
                        <h6 class="clr-w">Event</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/smartphone.svg" alt="img" />
                        <h6 class="clr-w">eCommerce</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/joystick.svg" alt="img" />
                        <h6 class="clr-w">Game</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/healthcare.svg" alt="img" />
                        <h6 class="clr-w">Healthcare</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/money-growth.svg" alt="img" />
                        <h6 class="clr-w">Finance</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/baker.svg" alt="img" />
                        <h6 class="clr-w">Restaurant</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/mobile-app.svg" alt="img" />
                        <h6 class="clr-w">On-Dexxxxxxxd</h6>
                    </div>

                    <div class="industry-workfors">
                        <img src="images/icons/groceries.svg" alt="img" />
                        <h6 class="clr-w">Grocery</h6>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<!--Start Service-->
<!-- <section class="service-section service-2 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Services We’re Provided</span>
                    <h2 class="mb30">Our Digital Marketing Services</h2>
                </div>
            </div>
        </div>
        <div class="row upset link-hover">
            <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="wide-block service-img1" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>PPC</span>
                        <h4>Digital Media & PPC Advertising</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
                <div class="wide-block service-img2" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>MARKETING </span>
                        <h4>Content Marketing Service</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                <div class="wide-block service-img3" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>SEO</span>
                        <h4>Search Engine Optimization</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
                <div class="wide-block service-img4" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>WEB DESIGN</span>
                        <h4>Website Design & Development</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow zoomInDown" data-wow-delay=".9s">
                <p>Let's Start A <span>New Project Together</span></p>
                <a href="#" class="btn-main bg-btn2 lnk">Request A Quote <i
                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="">
    <div class="statistics-wrap niwax-company-awards-cover ">
        <div class="container">
            <div class="row small t-ctr mt0">
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div class="statistics-img">
                            <img src="images/icons/deal.svg" alt="happy" class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">450</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div class="statistics-img">
                            <img src="images/icons/computers.svg" alt="project" class="img-fluid" />
                        </div>
                        <div class="statnumb counter-number">
                            <span class="counter">48</span><span>k</span>
                            <p>Projects Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div class="statistics-img">
                            <img src="images/icons/worker.svg" alt="work" class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">95</span><span>k</span>
                            <p>Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics mb0">
                        <div class="statistics-img">
                            <img src="images/icons/customer-service.svg" alt="support" class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">24</span><span>/</span><span class="counter">7</span>
                            <p>Support Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="bhv-service bg-gradient5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading text-center">

                    <h2 class="mb20 pt-4 clr-w mt-4">
                        Our Services
                    </h2>
                    <h6 class="color-sha-services">
                        Our Services
                    </h6>
                    <p class="mb30 clr-w text-center">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem
                    </p>
                </div>
            </div>
        </div>
        <div class="row upset ovr-bg2 bd-hor">
            <div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">

                        <div class="s-card-icon"><img src="images/coder.png" alt="service" class="img-fluid" />
                        </div>
                        <h4 class="service-cardh">Web Development</h4>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                        <div>
                            <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s"
                                data-bs-toggle="modal" data-bs-target="#menu-popup">Learn More<i
                                    class="fas fa-chevron-right fa-ani"></i></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/digital-marketing.png" alt="service"
                                class="img-fluid" />
                        </div>
                        <h4 class="service-cardh">Digital Marketing</h4>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                        <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s" data-bs-toggle="modal"
                            data-bs-target="#menu-popup">Learn More<i class="fas fa-chevron-right fa-ani"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/social-marketing.png" alt="service"
                                class="img-fluid" />
                        </div>
                        <h4 class="service-cardh">Social Media Marketing</h4>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                        <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s" data-bs-toggle="modal"
                            data-bs-target="#menu-popup">Learn More<i class="fas fa-chevron-right fa-ani"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/app.png" alt="service" class="img-fluid" />
                        </div>
                        <h4 class="service-cardh">App Development</h4>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                        <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s" data-bs-toggle="modal"
                            data-bs-target="#menu-popup">Learn More<i class="fas fa-chevron-right fa-ani"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">

                        <div class="s-card-icon"><img src="images/coder.png" alt="service" class="img-fluid" />
                        </div>
                        <h4 class="service-cardh">Web Development</h4>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                        <div>
                            <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s"
                                data-bs-toggle="modal" data-bs-target="#menu-popup">Learn More<i
                                    class="fas fa-chevron-right fa-ani"></i></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/digital-marketing.png" alt="service"
                                class="img-fluid" />
                        </div>
                        <h4 class="service-cardh">Digital Marketing</h4>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                        <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s" data-bs-toggle="modal"
                            data-bs-target="#menu-popup">Learn More<i class="fas fa-chevron-right fa-ani"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/social-marketing.png" alt="service"
                                class="img-fluid" />
                        </div>
                        <h4 class="service-cardh">Social Media Marketing</h4>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                        <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s" data-bs-toggle="modal"
                            data-bs-target="#menu-popup">Learn More<i class="fas fa-chevron-right fa-ani"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/app.png" alt="service" class="img-fluid" />
                        </div>
                        <h4 class="service-cardh">App Development</h4>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                        <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s" data-bs-toggle="modal"
                            data-bs-target="#menu-popup">Learn More<i class="fas fa-chevron-right fa-ani"></i></a>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70 mb-4">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1s">
                    <p>Want to <span>kick start</span> your project right now?</p>
                    <div class="cta-card">
                        <!-- <h3 class="mb30 clr-w">Let's Start a New Project Together</h3> -->
                        <a href="#" class="btn-outline lnk">Request A Quote<i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service-->
<!--Start Testinomial-->
<section class="testinomial-section-nx bg-gradient6 pb100 mt-4 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="common-heading text-l">

                    <h2 class="mb20 pt-4 clr-w mt-4">
                        Client Reviews
                    </h2>
                    <h6 class="client-sha">
                        Client Reviews
                    </h6>
                </div>
                <div class="owl-carousel testimonial-card-b mt60">
                    <div class="testimonial-card">
                        <p class="clr-w">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.
                        </p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p class="clr-w">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.
                        </p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p class="clr-w">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.
                        </p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p class="clr-w">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.
                        </p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p class="clr-w">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.
                        </p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p class="clr-w">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.
                        </p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="clients-creative-pic pl25">
                    <div class="owl-dots" id="testimonials-avatar">
                        <button class="dot-c1 tcc1 owl-dot active">
                            <img alt="image" src="images/user-thumb/user1.jpg" />
                        </button>
                        <button class="dot-c1 tcc2 owl-dot">
                            <img alt="image" src="images/user-thumb/user2.jpg" />
                        </button>
                        <button class="dot-c1 tcc3 owl-dot">
                            <img alt="image" src="images/user-thumb/user3.jpg" />
                        </button>
                        <button class="dot-c1 tcc4 owl-dot">
                            <img alt="image" src="images/user-thumb/user4.jpg" />
                        </button>
                        <button class="dot-c1 tcc5 owl-dot">
                            <img alt="image" src="images/user-thumb/user5.jpg" />
                        </button>
                        <button class="dot-c1 tcc6 owl-dot">
                            <img alt="image" src="images/user-thumb/user1.jpg" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testinomial-->
<!--Start work-category-->
<section class="work-category pb-4 mt-4 tilt3d tech-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 v-center">
                <div class="">
                    <div class="">
                        <img src="images/img.gif" alt="" class="img-our-tech">
                    </div>
                    <div class=" tech-adjust">
                        <div class="common-heading text-l">
                            <!-- <span>Industries we work for</span> -->

                            <h2 class="mb20 pt-4 clr-w  heading-techno">
                                Our <span>Technologies</span>
                            </h2>
                            <h6 class="technologies-sha">
                                Our <span>Technologies</span>
                            </h6>
                            <!-- <p>
                        Successfully delivered digital products Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry.
                    </p> -->
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-8 padding-cards-tech">
                <div class="work-card-set text-center">
                    <div class="icon-set wow fadeIn" data-wow-delay=".2s">
                        <div class="work-card cd1">
                            <div class="icon-bg">
                                <img src="images/HTML5.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay=".4s">
                        <div class="work-card cd2">
                            <div class="icon-bg">
                                <img src="images/CSS3.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay=".6s">
                        <div class="work-card cd3">
                            <div class="icon-bg">
                                <img src="images/Bootstrap.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay=".8s">
                        <div class="work-card cd4">
                            <div class="icon-bg">
                                <img src="images/JavaScript.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1s">
                        <div class="work-card cd5">
                            <div class="icon-bg">
                                <img src="images/jQuery.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                        <div class="work-card cd6">
                            <div class="icon-bg">
                                <img src="images/node_js.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                        <div class="work-card cd7">
                            <div class="icon-bg">
                                <img src="images/My_SQL.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                        <div class="work-card cd8">
                            <div class="icon-bg">
                                <img src="images/React JS.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                        <div class="work-card cd9">
                            <div class="icon-bg">
                                <img src="images/Ajax.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="2s">
                        <div class="work-card cd10">
                            <div class="icon-bg">
                                <img src="images/Less CSS.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.2s">
                        <div class="work-card cd11">
                            <div class="icon-bg">
                                <img src="images/ar_vr.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.4s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/java.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.6s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/python.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.8s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/SASS.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.0s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/Csharp (1).png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/Angular JS.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                        <div class="work-card cd1">
                            <div class="icon-bg">
                                <img src="images/Laravel.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                        <div class="work-card cd2">
                            <div class="icon-bg">
                                <img src="images/Vue_js.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                        <div class="work-card cd3">
                            <div class="icon-bg">
                                <img src="images/linux.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="2.0s">
                        <div class="work-card cd4">
                            <div class="icon-bg">
                                <img src="images/adobe-illustrator.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.2s">
                        <div class="work-card cd1">
                            <div class="icon-bg">
                                <img src="images/swiftc.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.4s">
                        <div class="work-card cd2">
                            <div class="icon-bg">
                                <img src="images/opencart-1.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.6s">
                        <div class="work-card cd3">
                            <div class="icon-bg">
                                <img src="images/shopify.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.8s">
                        <div class="work-card cd4">
                            <div class="icon-bg">
                                <img src="images/kotlin.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1s">
                        <div class="work-card cd5">
                            <div class="icon-bg">
                                <img src="images/Android_Studio.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                        <div class="work-card cd6">
                            <div class="icon-bg">
                                <img src="images/GitHub.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                        <div class="work-card cd7">
                            <div class="icon-bg">
                                <img src="images/azure.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                        <div class="work-card cd8">
                            <div class="icon-bg">
                                <img src="images/xcode.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                        <div class="work-card cd9">
                            <div class="icon-bg">
                                <img src="images/aspnet.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="2s">
                        <div class="work-card cd10">
                            <div class="icon-bg">
                                <img src="images/aws.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.2s">
                        <div class="work-card cd11">
                            <div class="icon-bg">
                                <img src="images/Tableau.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.4s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/REST_API.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.6s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/adobe-photoshop.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="0.8s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/adobe-xd.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.0s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/adobe-after-effects.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                        <div class="work-card cd12">
                            <div class="icon-bg">
                                <img src="images/man.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                        <div class="work-card cd1">
                            <div class="icon-bg">
                                <img src="images/Magento.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                        <div class="work-card cd2">
                            <div class="icon-bg">
                                <img src="images/corel-draw.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                        <div class="work-card cd3">
                            <div class="icon-bg">
                                <img src="images/adobe-premier-pro.png" alt="Industries" class="w-100" />
                            </div>

                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="2.0s">
                        <div class="work-card cd4">
                            <div class="icon-bg">
                                <img src="images/adobe-spark.png" alt="Industries" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End  work-category-->
<!--Start Blogs-->
<!--Start blog-->
<section class="blog-home pb100 cls-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <!-- <span class="text-effect">what's going on</span> -->
                    <h2 spellcheck="true" class="mb20 pt-4 clr-w mt-4">
                        Latest Stories
                    </h2>
                    <h6 class="stories-sha">
                        Latest Stories
                    </h6>

                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="images/blog/blog-dg-1.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Nodejs</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 23, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4>
                                <a href="#"> Know About Nodejs!</a>
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                            </p>
                        </div>
                        <div class="post-social">
                            <div
                                class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="images/blog/blog-dg-2.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Laravel</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 24, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4>
                                <a href="#"> Features of Laravel </a>
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                            </p>
                        </div>
                        <div class="post-social">
                            <div
                                class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="images/blog/blog-dg-3.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Mobile</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 25, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4>
                                <a href="#"> Mobile Application </a>
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                            </p>
                        </div>
                        <div class="post-social">
                            <div
                                class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="images/blog/blog-dg-3.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Mobile </a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 25, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4>
                                <a href="#"> Mobile App Development</a>
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                            </p>
                        </div>
                        <div class="post-social">
                            <div
                                class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Blogs-->

<!--Start contact-->
<!-- <section class="contact--block bg-gradient1 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="common-heading text-l text-wt">
                    <h2 class="mb0 clr-w">Interested in working with us?</h2>
                    <p class="clr-w">LET’S TALK AND GET STARTED</p>
                </div>
                <div class="contact-fields">
                    <div class="connect-block mt40">
                        <a href="https://separateweb.com/cdn-cgi/l/email-protection#f0999e969fb091929394de939f9d"
                            tabindex="-1">
                            <div class="icon-fld-nx v-center">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text-fld-nx v-center">
                                <span class="small-text rows">mail to our hr department</span>
                                <span class="large-text rows"><span class="__cf_email__"
                                        data-cfemail="640d0a020b240a0d13051c4a070b0914050a1d4a070b09">[email&#160;protected]</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="connect-block mt30">
                        <a href="tel:12345679" class="transition" tabindex="-1">
                            <div class="icon-fld-nx v-center">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text-fld-nx v-center">
                                <span class="small-text rows">Our contact Number</span>
                                <span class="large-text rows">(91) 123 456 7890</span>
                            </div>
                        </a>
                    </div>
                    <div class="text-fieds- mt40">
                        <h4 class="clr-w">& What's you will get :</h4>
                        <ul class="list-style- mt10">
                            <li class="clr-w">Excellent Customer Support</li>
                            <li class="clr-w">Project Consulting by Experts</li>
                            <li class="clr-w">On-Time Project Delivery</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form-card-pr contact-block-btm">
                    <div class="form-block">
                        <form action="#" id="quotes-form" method="post">
                            <div class="fieldsets row">
                                <div class="col-md-6 form-group floating-label">
                                    <input type="text" placeholder=" " required="required" class="floating-input" />
                                    <label>Full Name*</label>
                                </div>
                                <div class="col-md-6 form-group floating-label">
                                    <input type="email" placeholder=" " required="required" class="floating-input" />
                                    <label>Email Address*</label>
                                </div>
                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-6 form-group floating-label">
                                    <input type="tel" placeholder=" " required="required" class="floating-input" />
                                    <label>Mobile Number*</label>
                                </div>
                                <div class="col-md-6 form-group floating-label">
                                    <select required="required" class="floating-select">
                                        <option value="">&nbsp;</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="App Design">App Design</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <label>Interested In*</label>
                                </div>
                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-6 form-group floating-label">
                                    <select required="required" class="floating-select">
                                        <option value="">&nbsp;</option>
                                        <option value="#">Less than $500</option>
                                        <option value="#">$500 - $1000</option>
                                        <option value="#">$1000 - $2000</option>
                                        <option value="#">$2000 - $300</option>
                                        <option value="#">$3000+</option>
                                    </select>
                                    <label>Your Budget*</label>
                                </div>
                                <div class="col-md-6 form-group floating-label">
                                    <input type="text" placeholder=" " required="required" class="floating-input" />
                                    <label>Skype ID/Whatsapp No.*</label>
                                </div>
                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-12 form-group floating-label">
                                    <textarea placeholder=" " required="required" class="floating-input"></textarea>
                                    <label>Message*</label>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1"
                                    checked="checked" />
                                <label class="custom-control-label" for="customCheck">I agree to the
                                    <a href="javascript:void(0)">Terms &amp; Conditions</a> of
                                    Business Name.</label>
                            </div>
                            <div class="fieldsets mt20">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn">
                                    Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                </button>
                            </div>
                            <p class="trm">
                                <i class="fas fa-lock"></i>We hate spam, and we respect your
                                privacy.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--End contact-->
<!--Start Enquire Form-->
<section class="enquire-form pb100">
    <div class="container">
        <div class="row light-bgs">
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <h2 spellcheck="true" class="messiage-heading  mb20 pt-4 clr-w mt-4">
                        Contact Now
                    </h2>
                    <h6 class="messiage-sha">
                        Contact Now

                    </h6>
                    <span> Have Question? Write a Message</span>
                </div>
                <div class="form-block">
                    <form action="#" method="post" name="feedback-form">
                        <div class="fieldsets row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Full Name" name="name" />
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email Address" name="email" />
                            </div>
                        </div>
                        <div class="fieldsets row">
                            <div class="col-md-6">
                                <input type="number" placeholder="Contact Number" name="phone" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" name="subject" />
                            </div>
                        </div>
                        <div class="fieldsets">
                            <textarea placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1"
                                checked="checked" />
                            <label class="custom-control-label" for="customCheck">I agree to the
                                <a href="javascript:void(0)">Terms &amp; Conditions</a> of
                                Business Name.</label>
                        </div>
                        <div class="fieldsets mt20 d-flex justify-content-center">
                            <button type="submit" name="submit" class="lnk btn-main bg-btn">
                                Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                            </button>
                        </div>
                        <p class="trm">
                            <i class="fas fa-lock"></i>We hate spam, and we respect your
                            privacy.
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 v-center">
                <div class="enquire-image">
                    <img src="images/icon.gif" alt="enquire" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Enquire Form-->

<?php
include"essentials/footer.php";
?>