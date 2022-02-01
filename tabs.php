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
<section class="breadcrumb-area banner-5">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-title">
                            <h2>Tabs</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Tabs-->
<section class="pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt60">
                <div class="tabs-layout">
                    <ul class="nav nav-tabs" id="myTab1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent1">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h4>Tab 1</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h4>Tab 2</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <h4>Tab 3</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt60">
                <div class="outline-tabs tabs-layout">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab2" data-bs-toggle="tab" href="#home-2" role="tab"
                                aria-controls="home-2" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-bs-toggle="tab" href="#profile-2" role="tab"
                                aria-controls="profile-2" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab2" data-bs-toggle="tab" href="#contact-2" role="tab"
                                aria-controls="contact-2" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="home-2" role="tabpanel" aria-labelledby="home-tab2">
                            <h4>Tab 1</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile-2" role="tabpanel" aria-labelledby="profile-tab2">
                            <h4>Tab 2</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="contact-2" role="tabpanel" aria-labelledby="contact-tab2">
                            <h4>Tab 3</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt60">
                <div class="tab-17 tabs-layout">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab1a" data-bs-toggle="tab" href="#tab1" role="tab"
                                aria-controls="tab1" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab2b" data-bs-toggle="tab" href="#tab2" role="tab"
                                aria-controls="tab2" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab3c" data-bs-toggle="tab" href="#tab3" role="tab"
                                aria-controls="tab3" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1a">
                            <h4>Tab 1</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2b">
                            <h4>Tab 2</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3c">
                            <h4>Tab 3</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<<?php
include"essentials/footer.php";
?>