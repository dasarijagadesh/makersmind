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
<section class="breadcrumb-area banner-2" data-background="images/banner/4.jpg">
    <div class="text-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Cart</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Cart</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end Breadcrumb Area-->
<!--shop products-->
<section class="shop-products-bhv pt60 pb60">
    <div class="container shop-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rpb-cart-table">
                    <table class="cart_table div-for-data">
                        <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Item Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="rpb-cart-item-td">
                                <td class="product-remove">
                                    <a href="#" class="remove">×</a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="images/shop/item-perview.jpg" alt="#" /></a>
                                </td>
                                <td class="product-name rpbrs-titl" data-title="Item Name">
                                    <a href="#">Niwax</a>
                                </td>
                                <td class="product-price rpbrs-titl" data-title="Price">
                                    <span>$17</span>
                                </td>
                                <td class="product-quantity rpbrs-titl" data-title="Quantity">
                                    <span>1</span>
                                </td>
                                <td class="product-subtotal rpbrs-titl" data-title="Total">
                                    <span>$17</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="cart-pg-coupon">
                                        <input type="text" name="#" class="input-text" placeholder="Coupon code" />
                                        <button type="submit" class="bg-btn smllbtnn lnk">
                                            Apply coupon <span class="circle"></span>
                                        </button>
                                    </div>
                                </td>
                                <td colspan="3" class="update-cart">
                                    <button type="submit" class="bg-btn3 smllbtnn lnk" name="#" value="Update cart">
                                        Update cart <span class="circle"></span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="cart-extra-sevc div-for-data mt60">
                    <h4 class="mb30">Additional Services</h4>

                    <div class="media">
                        <div class="post-image bdr-radius">
                            <a href="#"><img src="images/blog/blog-small.jpg" alt="girl" class="img-fluid" /></a>
                        </div>
                        <div class="media-body post-info">
                            <h5><a href="#">Template Installation – Custom Dev</a></h5>
                            <div class="rpb-itm-pric mt5">
                                <span class="offer-prz">$17 </span>
                                <span class="regular-prz">$25</span>
                            </div>
                            <a href="#" class="mt10 btn-main btn-small bg-btn3 lnk">Add to Cart<span
                                    class="circle"></span></a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="post-image bdr-radius">
                            <a href="#"><img src="images/blog/blog-small.jpg" alt="girl" class="img-fluid" /></a>
                        </div>
                        <div class="media-body post-info">
                            <h5><a href="#">Hosting Server Installation</a></h5>
                            <div class="rpb-itm-pric mt5">
                                <span class="offer-prz">$17 </span>
                                <span class="regular-prz">$25</span>
                            </div>
                            <a href="#" class="mt10 btn-main btn-small bg-btn3 lnk">Add to Cart<span
                                    class="circle"></span></a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="post-image bdr-radius">
                            <a href="#"><img src="images/blog/blog-small.jpg" alt="girl" class="img-fluid" /></a>
                        </div>
                        <div class="media-body post-info">
                            <h5><a href="#">WordPress CMS Installation</a></h5>
                            <div class="rpb-itm-pric mt5">
                                <span class="offer-prz">$17 </span>
                                <span class="regular-prz">$25</span>
                            </div>
                            <a href="#" class="mt10 btn-main btn-small bg-btn3 lnk">Add to Cart<span
                                    class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cart-extra-sevc div-for-data mt60">
                    <h4 class="mb30">Cart Totals</h4>

                    <table class="table border">
                        <tbody>
                            <tr>
                                <th>Subtotal</th>
                                <td>$17</td>
                            </tr>
                            <tr>
                                <th>Discount</th>
                                <td>$0.00</td>
                            </tr>
                            <tr>
                                <th>Tax</th>
                                <td>$0.00</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>$17</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn-main bg-btn3 lnk w-100">
                        Proceed to checkout <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include"essentials/footer.php";
?>