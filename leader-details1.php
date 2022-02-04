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
<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">
    <div class="container-fluid">
        <!-- <div class="row justify-content-center">
            <div class="col-lg-7"> -->
        <div class="row">
            <div class="col-md-12 bread-titlev2 port-gradiant">
                <div class="row">
                    <div class="col-4">
                        <div class="">
                            <h1 class="wow fadeInUp head-service" data-wow-delay=".2s">
                                ABOUT US
                            </h1>
                            <p class=" wow fadeInUp" data-wow-delay=".4s">
                                Lorem Ipsum is simply dummy
                            </p>
                            <a href="#" class="btn-main slider-button bg-btn2 lnk  wow zoomInDown"
                                data-wow-delay=".6s">Get Quote
                                <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                    <div class="col-8 slider-8">
                        <div class="clientslider wd-slider">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="niwax-client-slider owl-carousel">
                                            <div class="awardlogo">
                                                <img src="images/client/customer-logo-1.png" alt="icon" />
                                            </div>
                                            <div class="awardlogo">
                                                <img src="images/client/customer-logo-2.png" alt="icon" />
                                            </div>
                                            <div class="awardlogo">
                                                <img src="images/client/customer-logo-3.png" alt="icon" />
                                            </div>
                                            <div class="awardlogo">
                                                <img src="images/client/customer-logo-4.png" alt="icon" />
                                            </div>
                                            <div class="awardlogo">
                                                <img src="images/client/customer-logo-5.png" alt="icon" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- 
            </div>
        </div> -->
    </div>
</section>
<!--End Breadcrumb Area-->`

<!--Start Team Details-->
<section class="team pad-tb deep-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5">
                <div class="image-block upset bg-shape">
                    <div class="image-div">
                        <a href="#"><img src="images/jhon-sir.jpeg" alt="team" class="img-fluid" /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="full-image-card mt0">
                    <div class="">
                        <h2 class="clr-w">
                            John Williams</h2>
                        <p class="clr-or">Founder & Director</p>
                    </div>
                    <div class="otherinfo">
                        <p class="clr-w">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum is simply dummy text of the printing and typesetting
                            industry. is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                        <div class="member-social">
                            <ul class="social-listing leaders-li">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include"essentials/footer.php";
?>