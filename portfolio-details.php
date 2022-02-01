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
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="#">Portfolio Details</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Our Portfolio</h2>
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
            <div class="col-lg-7">
                <div class="common-heading pp p-details">
                    <span>Branding Creative</span>
                    <h1>Justo Erat Tempor Eros Adipiscing</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        faucibus, risus sit amet auctor sodales, justo erat tempor eros.
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="portfolio-details">
                    <div class="portfolio-meta link-hover">
                        <ul>
                            <li>
                                <i class="fas fa-user"></i>
                                <p>Client Name: <span>Creative Tom</span></p>
                            </li>
                            <li>
                                <i class="fas fa-tags"></i>
                                <p>Project Category: <span>Web design, Developments</span></p>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <p>Project Date: <span>20 May 2020</span></p>
                            </li>
                            <li><a href="#" target="_blank">Open External Link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 single-card-item">
                <div class="isotope_item pv-">
                    <div class="item-image">
                        <img src="images/portfolio/project-view-1.jpg" alt="project name" class="img-fluid" />
                    </div>
                </div>
                <div class="isotope_item pv- mt30">
                    <div class="item-image">
                        <img src="images/portfolio/project-view-2.jpg" alt="project name" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include"essentials/footer.php";
?>