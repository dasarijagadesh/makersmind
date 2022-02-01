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
<section class="breadcrumb-area banner-3">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Our Projects</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Portfolio-->
<section class="portfolio-page pad-tb">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-6">
                <div class="common-heading pp">
                    <span>Our Work</span>
                    <h2>Portfolio</h2>
                </div>
            </div>
            <div class="col-lg-6 v-center">
                <div class="filters">
                    <ul class="filter-menu">
                        <li data-filter="*" class="is-checked">All</li>
                        <li data-filter=".website">Website</li>
                        <li data-filter=".app">Mobile App</li>
                        <li data-filter=".graphic">Graphic</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row card-list">
            <div class="col-lg-12 col-md-12 grid-sizer"></div>

            <div class="col-lg-12 col-sm-12 single-card-item app">
                <div class="portfolio-block bg-gradient8">
                    <div class="portfolio-item-info">
                        <span>ios, design</span>
                        <h3 class="mt30 mb30">
                            <a href="#">UX design for a startup focusing on measuring Team
                                Performance</a>
                        </h3>
                        <div class="reviews-card pr-shadow">
                            <div class="review-text">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type
                                    specimen book.
                                </p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid" />
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-image">
                        <a href="#"><img src="images/portfolio/website-mockup1.jpg" alt="portfolio" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 single-card-item website">
                <div class="portfolio-block bg-gradient6">
                    <div class="portfolio-item-info">
                        <span>ios, design</span>
                        <h3 class="mt30 mb30">
                            <a href="#">UX design for a startup focusing on measuring Team
                                Performance</a>
                        </h3>
                        <div class="reviews-card pr-shadow">
                            <div class="review-text">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type
                                    specimen book.
                                </p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid" />
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-image">
                        <a href="#"><img src="images/portfolio/website-mockup2.jpg" alt="portfolio" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 single-card-item graphic">
                <div class="portfolio-block bg-gradient4">
                    <div class="portfolio-item-info">
                        <span>ios, design</span>
                        <h3 class="mt30 mb30">
                            <a href="#">UX design for a startup focusing on measuring Team
                                Performance</a>
                        </h3>
                        <div class="reviews-card pr-shadow">
                            <div class="review-text">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type
                                    specimen book.
                                </p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid" />
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-image">
                        <a href="#"><img src="images/portfolio/website-mockup3.jpg" alt="portfolio" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 single-card-item website">
                <div class="portfolio-block bg-gradient9">
                    <div class="portfolio-item-info">
                        <span>ios, design</span>
                        <h3 class="mt30 mb30">
                            <a href="#">UX design for a startup focusing on measuring Team
                                Performance</a>
                        </h3>
                        <div class="reviews-card pr-shadow">
                            <div class="review-text">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type
                                    specimen book.
                                </p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid" />
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-image">
                        <a href="#"><img src="images/portfolio/website-mockup4.jpg" alt="portfolio" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include"essentials/footer.php";
?>