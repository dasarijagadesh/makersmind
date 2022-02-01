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

<!--Start Hero Slider-->
<section class="hero-slider hero-style">
    <div class="swiper-container">
        <!-- start swiper-wrapper -->
        <div class="swiper-wrapper">
            <!--slider 1 start -->
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="images/hero/slider-1.jpg">
                    <div class="container">
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>Build Your Brand With Niwax</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>
                                We are enabling digital transformation for our clients since
                                1999 by providing tailored solutions
                            </p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="#" class="btn-main bg-btn lnk">View Showcase <i
                                    class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--slider 1 end -->
            <!--slider 2 start -->
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="images/hero/slider-2.jpg">
                    <div class="container">
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>Find Your Place on the Web</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>
                                We are enabling digital transformation for our clients since
                                1999 by providing tailored solutions
                            </p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="#" class="btn-main bg-btn lnk">View Showcase <i
                                    class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--slider 2 end -->
        </div>
        <!-- end swiper-wrapper -->
        <!-- swipper controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- swipper controls -->
    </div>
</section>
<?php
include"essentials/footer.php";
?>