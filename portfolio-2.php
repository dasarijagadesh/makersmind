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
            <div class="col-lg-4 col-md-6 grid-sizer"></div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item website">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="images/portfolio/app-img1.jpg" alt="image" class="img-fluid" />
                        </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Pets Care & Training App</a></h4>
                        <p>iOs, Android</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item website">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="images/portfolio/app-img2.jpg" alt="image" class="img-fluid" />
                        </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Car Rental App</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item app graphic">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="images/portfolio/app-img3.jpg" alt="image" class="img-fluid" />
                        </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Event Management App</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item app">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="images/portfolio/app-img4.jpg" alt="image" class="img-fluid" />
                        </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Restaurant App</a></h4>
                        <p>iOs, Android</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item graphic website">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="images/portfolio/app-img5.jpg" alt="image" class="img-fluid" />
                        </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Restaurant / Hotel App</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item graphic app">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="images/portfolio/app-img6.jpg" alt="image" class="img-fluid" />
                        </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Super Mart App</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include"essentials/footer.php";
?>