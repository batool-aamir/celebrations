<?php 
/*Template Name: Contact us */
include("header.php");
?>
        <div class="preloader"></div>
        <section class="Contact-Us-top-color">
            <div class="container">
                <div class="Contact-Us-top">
                    <div class="query">If Any Query</div>
                    <h2>Contact Us</h2>
                    <div class="style-img"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/styling-images/heart.png" alt="heart"></div>
                </div>
            </div>
        </section>
        <section class="Contact-Us-bottom-color">
            <div class="container">


                <div class="contact-us-total">
                    <div class="Contact-Us-bottom">
                        <form id="form">
                            <div class="form-side">
                                <div class="name-box contact-box">
                                    <div class="name-label contact-label"><label>Name*</label>
                                    </div>
                                    <div class="contact-input"><input type="text" placeholder="Full Name" name="fname"
                                            required></div>
                                </div>
                                <div class="email-box contact-box">
                                    <div class="label-email contact-label"><label>Email</label></div>
                                    <div class="contact-input"><input type="email" placeholder="abc@gmail.com"
                                            name="email" required></div>
                                </div>
                                <div class="phone-box contact-box">
                                    <div class="label-phone contact-label"><label>Phone*</label></div>
                                    <div class="contact-input"><input type="text" placeholder="****-*******"
                                            name="phone" required></div>
                                </div>
                            </div>
                            <div class="form-side">
                                <div class="msg-box contact-box">
                                    <div class="label-msg contact-label"><label>Message</label></div>
                                    <div><textarea class="contact-msg-box" cols="35" rows="8" name="msg"
                                            required></textarea></div>
                                </div>
                            </div>
                            <div class="submit-button">
                                <input type="submit" class="contact-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="Contact-Us-bottom-right">
                        <div class="Contact-Us-bottom-right-heading">
                            <h3>Contact Info</h3>
                        </div>
                        <div class="Contact-Us-bottom-right-all">
                            <div class="contact-us-text-all">
                                <i class="fas fa-map-marker-alt"></i>
                                <address>
                                    1519, Tchoupitoulas Street<br>
                                    New Orleans, LA 70130
                                </address>
                               
                            </div>
                            <div class="contact-us-text-all">
                                <a href="tel:03222214030"><i class="fas fa-phone-volume"></i></a>
                                <h3>Call Us</h3>
                                <p>03222214030</p>
                            </div>
                            <div class="contact-us-text-all">
                                <a href="mailto:info@celebrations.net"><i class="fas fa-envelope"></i></a>
                                <h3>Mail Us</h3>
                                <p>info@celebrations.net</p>
                            </div>
                            <div class="contact-us-text-all">
                                <i class="fas fa-clock"></i>
                                <h3>Opening Time</h3>
                                <p>Mon-Sat: 09:00am to 18:00pm</p>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </section>
        <section class="contact-last-main-color">
            <div class="container">
                <div class="contact-last-main">
                    <div class="address col-2 contact-last">
                        <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo-ideas/logo.png" alt="logo" class="logo-img-contact"></div>
                    </div>
                    <div class="google-map col-2 contact-last">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=genetechs%20solutions&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe><a
                                    href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/"></a></div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
include("footer.php");
?>