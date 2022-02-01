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
                  <input
                    type="email"
                    placeholder="Email Address"
                    name="email"
                  />
                </div>
                <div class="col-md-12">
                  <input
                    type="number"
                    placeholder="Contact Number"
                    name="phone"
                  />
                </div>
                <div class="col-md-12">
                  <input type="text" placeholder="Subject" name="subject" />
                </div>
                <div class="col-md-12">
                  <textarea placeholder="Message" name="message"></textarea>
                </div>
              </div>
              <div class="fieldsets mt20 pb20">
                <button
                  type="submit"
                  name="submit"
                  class="lnk btn-main bg-btn"
                  data-bs-dismiss="modal"
                >
                  Submit <i class="fas fa-chevron-right fa-icon"></i
                  ><span class="circle"></span>
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
<section class="breadcrumb-area banner-5">
  <div class="text-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 v-center">
          <div class="bread-inner">
            <div class="bread-menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Case Study</a></li>
              </ul>
            </div>
            <div class="bread-title">
              <h2>Case Studies</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Case Study-->
<section class="case-study pad-tb pt40">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-sm-6">
        <div class="full-image-card hover-scale">
          <div class="image-div">
            <a href="#"
              ><img
                src="images/case-study/img-1.jpg"
                alt="case-study"
                class="img-fluid"
            /></a>
          </div>
          <div class="info-text-block">
            <h4><a href="#">Food Delivery Application</a></h4>
            <p>Ios | Android | Bootstrap | Jquery</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="full-image-card hover-scale">
          <div class="image-div">
            <a href="#"
              ><img
                src="images/case-study/img-2.jpg"
                alt="case-study"
                class="img-fluid"
            /></a>
          </div>
          <div class="info-text-block">
            <h4><a href="#">Real Estate Project</a></h4>
            <p>Ios | Android | Bootstrap | Jquery</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="full-image-card hover-scale">
          <div class="image-div">
            <a href="#"
              ><img
                src="images/case-study/img-3.jpg"
                alt="case-study"
                class="img-fluid"
            /></a>
          </div>
          <div class="info-text-block">
            <h4><a href="#">Interior Decoration</a></h4>
            <p>Ios | Android | Bootstrap | Jquery</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="full-image-card hover-scale">
          <div class="image-div">
            <a href="#"
              ><img
                src="images/case-study/img-4.jpg"
                alt="case-study"
                class="img-fluid"
            /></a>
          </div>
          <div class="info-text-block">
            <h4><a href="#">Gym Membership Portal</a></h4>
            <p>Ios | Android | Bootstrap | Jquery</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="full-image-card hover-scale">
          <div class="image-div">
            <a href="#"
              ><img
                src="images/case-study/img-5.jpg"
                alt="case-study"
                class="img-fluid"
            /></a>
          </div>
          <div class="info-text-block">
            <h4><a href="#">Stock Market</a></h4>
            <p>Ios | Android | Bootstrap | Jquery</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="full-image-card hover-scale">
          <div class="image-div">
            <a href="#"
              ><img
                src="images/case-study/img-6.jpg"
                alt="case-study"
                class="img-fluid"
            /></a>
          </div>
          <div class="info-text-block">
            <h4><a href="#">Business Consulting</a></h4>
            <p>Ios | Android | Bootstrap | Jquery</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include"essentials/footer.php";
?>
