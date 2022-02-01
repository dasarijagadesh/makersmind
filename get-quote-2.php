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
<section class="breadcrumb-area banner-6">
  <div class="text-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 v-center">
          <div class="bread-inner">
            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
              <h2>Contact</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Enquire Form-->
<section class="contact-page pad-tb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 contact2dv">
        <div class="info-wrapr">
          <h3 class="mb-4">Contact us</h3>
          <div class="dbox d-flex align-items-start">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="fas fa-map-marker"></i>
            </div>
            <div class="text pl-4">
              <p><span>Address:</span>123 Business Centre London SW1A 1AA</p>
            </div>
          </div>
          <div class="dbox d-flex align-items-start">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="text pl-4">
              <p>
                <span>Phone:</span> <a href="tel://1234567920">+ 123 5647 89</a>
              </p>
            </div>
          </div>
          <div class="dbox d-flex align-items-start">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="text pl-4">
              <p>
                <span>Email:</span>
                <a
                  href="https://separateweb.com/cdn-cgi/l/email-protection#aac3c4ccc5eac4c3ddcbd284c9c5c7"
                  ><span
                    class="__cf_email__"
                    data-cfemail="7b12151d143b15120c1a0355181416"
                    >[email&#160;protected]</span
                  ></a
                >
              </p>
            </div>
          </div>
          <div class="dbox d-flex align-items-start">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="fa fa-globe"></i>
            </div>
            <div class="text pl-4">
              <p><span>Website</span> <a href="#">www.niwax.com</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7 m-mt30 pr30 pl30">
        <div class="common-heading text-l">
          <h2 class="mt0 mb0">Get in touch</h2>
          <p class="mb60 mt10">
            We will catch you as early as we receive the message
          </p>
        </div>
        <div class="form-block">
          <form id="contactForm" data-bs-toggle="validator" class="shake">
            <div class="row">
              <div class="form-group col-sm-6">
                <input
                  type="text"
                  id="name"
                  placeholder="Enter name"
                  required
                  data-error="Please fill Out"
                />
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-sm-6">
                <input
                  type="email"
                  id="email"
                  placeholder="Enter email"
                  required
                />
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <input
                  type="text"
                  id="mobile"
                  placeholder="Enter mobile"
                  required
                  data-error="Please fill Out"
                />
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-sm-6">
                <select name="Dtype" id="Dtype" required>
                  <option value="">Select Requirement</option>
                  <option value="web">web</option>
                  <option value="graphic">graphic</option>
                  <option value="video">video</option>
                </select>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea
                id="message"
                rows="5"
                placeholder="Enter your message"
                required
              ></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="custom-control custom-checkbox">
              <input
                type="checkbox"
                class="custom-control-input"
                id="customCheck"
                name="example1"
                checked="checked"
              />
              <label class="custom-control-label" for="customCheck"
                >I agree to the
                <a href="javascript:void(0)">Terms &amp; Conditions</a> of
                Business Name.</label
              >
            </div>
            <button
              type="submit"
              id="form-submit"
              class="btn lnk btn-main bg-btn"
            >
              Submit <span class="circle"></span>Submit
            </button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
            <p class="trm">
              <i class="fas fa-lock"></i>We hate spam, and we respect your
              privacy.
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Enquire Form-->

<!--Start Location-->
<div class="contact-location">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="map-div">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113874.29338087817!2d75.72051791246247!3d26.885346595411875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1611838825763!5m2!1sen!2sin"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include"essentials/footer.php";
?>
