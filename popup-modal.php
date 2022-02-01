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
<section class="breadcrumb-area banner-6">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                            <h2>Popup Modal</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Model-->
<div class="element-page pt60 pb60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb20">Modal Default</h3>
                <!--start Modal button -->
                <a href="#" class="btn-main bg-btn2 lnk" data-bs-toggle="modal" data-bs-target="#modalform">Launch
                    modal<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                <!--end Modal button -->
                <!--start Modal html -->
                <div class="popup-modals">
                    <div class="modal" id="modalform" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="common-heading">
                                        <h4 class="mt0 mb0">Popup Modal Form</h4>
                                    </div>
                                    <button type="button" class="closes" data-bs-dismiss="modal">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-block fdgn2 mt10 mb10">
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
                                                <div class="col-md-12">
                                                    <textarea placeholder="Message" name="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <input class="form-control form-control-lg" id="formFileLg2"
                                                        type="file" />
                                                    <p>
                                                        <small>Please upload maximum 5 files Only pdf, docx and
                                                            doc files.</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="fieldsets mt20 pb20">
                                                <button type="submit" name="submit" class="lnk btn-main bg-btn"
                                                    data-bs-dismiss="modal">
                                                    Submit <i class="fas fa-chevron-right fa-icon"></i><span
                                                        class="circle"></span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Modal html  -->
            </div>

            <div class="col-lg-6">
                <h3 class="mb20">Modal Full Screen</h3>
                <!--start Modal button -->
                <a href="#" class="btn-main bg-btn2 lnk" data-bs-toggle="modal" data-bs-target="#modalform-full">Launch
                    modal<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                <!--end Modal button -->

                <!--start Modal html -->
                <div class="popup-modalfull">
                    <div class="modal" id="modalform-full">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="closes abt" data-bs-dismiss="modal">
                                    &times;
                                </button>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-8 text-center">
                                                <h3 class="mb10">Popup Modal Form</h3>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mt30">
                                            <div class="col-md-9">
                                                <div class="form-block fdgn2 mt10 mb10">
                                                    <form action="#" method="post" name="feedback-form">
                                                        <div class="fieldsets row">
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="Full Name"
                                                                    name="name" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="email" placeholder="Email Address"
                                                                    name="email" />
                                                            </div>
                                                        </div>
                                                        <div class="fieldsets row">
                                                            <div class="col-md-6 form-group">
                                                                <div class="row no-gutters">
                                                                    <div class="col-md-4">
                                                                        <select required="required"
                                                                            style="padding: 0px 5px">
                                                                            <option value="">IN +91</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-8 pl5">
                                                                        <input type="text" name="phone"
                                                                            placeholder="Phone No*"
                                                                            required="required" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <select required="required">
                                                                    <option value="">Interested In*</option>
                                                                    <option value="Graphic Design">
                                                                        Graphic Design
                                                                    </option>
                                                                    <option value="Web Design">Web Design</option>
                                                                    <option value="App Design">App Design</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="fieldsets row">
                                                            <div class="col-md-6">
                                                                <select required="required">
                                                                    <option value="">Your Budget*</option>
                                                                    <option value="Less than $5,000">
                                                                        Less than $5,000
                                                                    </option>
                                                                    <option value="$5,000 - $10,000">
                                                                        $5,000 - $10,000
                                                                    </option>
                                                                    <option value="$10,000 - $20,000">
                                                                        $10,000 - $20,000
                                                                    </option>
                                                                    <option value="$20,000 - $35,000">
                                                                        $20,000 - $35,000
                                                                    </option>
                                                                    <option value="$35,000 - $50,000">
                                                                        $35,000 - $50,000
                                                                    </option>
                                                                    <option value="$50,000 - $1,00,000">
                                                                        $50,000 - $1,00,000
                                                                    </option>
                                                                    <option value="$1,00,000+">$1,00,000+</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" name="phone"
                                                                    placeholder="Skype ID/Whatsapp No."
                                                                    required="required" />
                                                            </div>
                                                        </div>
                                                        <div class="fieldsets row">
                                                            <div class="col-md-12">
                                                                <textarea placeholder="Message"
                                                                    name="message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <div class="custom-file">
                                                                    <input class="form-control form-control-lg"
                                                                        id="formFileLg" type="file" />
                                                                </div>
                                                                <p>
                                                                    <small>Please upload maximum 5 files Only pdf,
                                                                        docx and doc files.</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="fieldsets row mt30 pb20 justify-content-center">
                                                            <div class="col-md-8">
                                                                <button type="submit" name="submit"
                                                                    class="lnk btn-main bg-btn" data-bs-dismiss="modal">
                                                                    Submit
                                                                    <i class="fas fa-chevron-right fa-icon"></i><span
                                                                        class="circle"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Modal html  -->
            </div>
        </div>
    </div>
</div>
<?php
include"essentials/footer.php";
?>