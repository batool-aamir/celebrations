<?php 
/*Template Name: Booking */
include("header.php");
?>
        <div class="preloader"></div>
        <section class="booking-an-event">
            <div class="container">
                <div class="event-booking">
                    <h3>Client Inquiry Form</h3>
                    <p class="event-booking-para">We're delighted that you've shown interest in our designs for your
                        next event. Please fill out the form below and our sales team will be in touch with you in no
                        time.</p>
                    <a href="#bookevent" class="inquiry">Book An Event</a>
                    <a href="#orderbasket" class="inquiry">Order Customized Baskets</a>
                </div>
            </div>
        </section>
        <section class="inquiry-form">
            <div class="container">
                <div class="wrap-form">
                    <h2>Event Booking</h2>
                    <form id="bookevent">
                        <div class="client-inquiry-form-all">
                            <div class="event-booking-left col-2">
                                <div class="name-box inquiry-box">
                                    <div class="name-label inquiry-label"><label>Name</label>
                                    </div>
                                    <div class="inquiry-input"><input type="text" placeholder="Full Name" name="fname"
                                            required>
                                    </div>
                                </div>
                                <div class="phone-box inquiry-box">
                                    <div class="label-phone inquiry-label"><label>Phone</label></div>
                                    <div class="inquiry-input"><input type="text" placeholder="****-*******"
                                            name="phone" required></div>
                                </div>
                                <div class="email-box inquiry-box">
                                    <div class="label-email inquiry-label"><label>Email</label></div>
                                    <div class="inquiry-input"><input type="email" placeholder="abc@gmail.com"
                                            name="email" required></div>
                                </div>
                                <div class="event-type inquiry-box">
                                    <div class="label-type inquiry-label"><label>Event Type</label></div>
                                    <select required class="select-type" name="eventselection">
                                        <option value="">Select Your Event</option>
                                        <option value="Wedding">Wedding</option>
                                        <option value="Corporate Event">Corporate Event</option>
                                        <option value="Social Event">Social Event</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="event-date inquiry-box">
                                    <div class="label-event-date inquiry-label"><label>Event Date</label></div>
                                    <div class="inquiry-input"><input type="text" readonly autocomplete="off"
                                            placeholder="MM/DD/YY" id="datepicker" name="eventdate" required>
                                    </div>
                                </div>
                            </div>
                            <div class="event-booking-right col-2">
                                <div class="event-venue inquiry-box">
                                    <div class="label-event-venue inquiry-label"><label>Event Venue</label></div>
                                    <div class="inquiry-input"><input type="text" placeholder="Name  of your venue"
                                            name="eventvenue" required></div>
                                </div>

                                <div class="event-budget inquiry-box">
                                    <div class="label-event-budget inquiry-label"><label>Event Budget</label></div>
                                    <div class="inquiry-input"><input placeholder="Estimated budget for your event"
                                            value="" name="eventbudget" required></div>
                                </div>

                                <div class="guest-box inquiry-box">
                                    <div class="label-guest inquiry-label"><label>Estimated Guest</label></div>
                                    <div class="inquiry-input"><input type="text" placeholder="******" name="eventguest"
                                            required></div>
                                </div>
                                <div class="note-box inquiry-box">
                                    <div class="label-msg inquiry-label"><label>Additional Notes</label></div>
                                    <div><textarea name="eventnote" class="inquiry-msg-box" cols="47" rows="7"
                                            placeholder="Additional notes for our designers" required></textarea></div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-submit-button">
                            <input type="submit" class="booking-submit" value="SUBMIT">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="basket-form">
            <div class="container">
                <div class="basket-wrap-form">
                    <h2>Order Customized Baskets</h2>
                    <form id="orderbasket">
                        <div class="gift-basket-form-all">
                            <div class="gift-box-left col-2">
                                <div class="name-box gift-box">
                                    <div class="name-label gift-label"><label>Name</label>
                                    </div>
                                    <div class="inquiry-input"><input type="text" placeholder="Full Name" name="fname"
                                            required>
                                    </div>
                                </div>
                                <div class="phone-box gift-box">
                                    <div class="label-phone gift-label"><label>Phone</label></div>
                                    <div class="inquiry-input"><input type="text" placeholder="****-*******"
                                            name="phone" required></div>
                                </div>
                                <div class="email-box gift-box">
                                    <div class="label-email gift-label"><label>Email</label></div>
                                    <div class="inquiry-input"><input type="email" placeholder="abc@gmail.com"
                                            name="email" required></div>
                                </div>
                                <div class="event-type gift-box">
                                    <div class="label-type gift-label"><label>Basket Type</label></div>
                                    <select required class="select-type" name="basketselection">
                                        <option value="">Select Your Basket</option>
                                        <option value="Shower Gift Basket">Shower Gift Basket</option>
                                        <option value="Chocolate Gift Basket">Chocolate Gift Basket</option>
                                        <option value="Customized Gift Baskets">Customized Gift Baskets</option>
                                        <option value="Nuts Gift Basket">Nuts Gift Basket</option>
                                        <option value="Spa Gift Basket">Spa Gift Basket</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="gift-box-right col-2">
                                <div class="event-date gift-box">
                                    <div class="label-event-date gift-label"><label>Delivery Date</label></div>
                                    <div class="inquiry-input"><input type="text" placeholder="MM/DD/YY" readonly
                                            autocomplete="off" id="datepickers" name="basketdate" required>
                                    </div>
                                </div>
                                <div class="event-budget gift-box">
                                    <div class="label-event-budget gift-label"><label>Estimated Budget</label></div>
                                    <div class="inquiry-input"><input placeholder="Estimated budget for your basket"
                                            value="" name="basketbudget" required></div>
                                </div>

                                <div class="note-box gift-box">
                                    <div class="label-msg gift-label"><label>Additional Notes</label></div>
                                    <div><textarea name="basketnotes" class="inquiry-msg-box" cols="47" rows="7"
                                            placeholder="Additional notes for our designers" required></textarea></div>
                                </div>
                            </div>
                        </div>
                        <div class="basket-submit-button">
                            <input type="submit" class="basket-booking-submit" value="SUBMIT">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php 

include("footer.php");
?>