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
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-4">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="#">Member Details</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Member Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Team Details-->
<section class="team pad-tb deep-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5">
                <div class="image-block upset bg-shape">
                    <div class="image-div">
                        <a href="#"><img src="images/team/team-single.jpg" alt="team" class="img-fluid" /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="full-image-card mt0">
                    <div class="info-text-block">
                        <h4><a href="#">Anna Rexia</a></h4>
                        <p>Company CTO</p>
                    </div>
                    <div class="otherinfo">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum is simply dummy text of the printing and typesetting
                            industry. is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                        <div class="social-media-profile">
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
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