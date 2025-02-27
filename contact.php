<?php include "header.php" ?>
<section class="contact-page">
            <div class="contact-page__shape-1 float-bob-y">
                <img src="assets/images/shapes/contact-page-shape-1.png" alt="">
            </div>
            <div class="contact-page__shape-2 float-bob-x">
                <img src="assets/images/shapes/contact-page-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline"><span class="section-title__tagline-border"></span>
                        OUR CONTACT
                    </h6>
                    <h3 class="section-title__title title-animation">Join With Us To As<br>
                        Contact Now!</h3>
                </div>
                <div class="contact-page__inner">
                    <form class="contact-form-validated contact-page__form" action="assets/inc/sendemail.php"
                        method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input-box">
                                    <input type="text" name="name" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input-box">
                                    <input type="email" name="Email" placeholder="Email Address" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input-box">
                                    <input type="text" name="Phone" placeholder="Phone Number" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input-box">
                                    <div class="select-box">
                                        <select class="selectmenu wide">
                                            <option selected="selected">Service Type
                                            </option>
                                            <option>Type Of Service 01</option>
                                            <option>Type Of Service 02</option>
                                            <option>Type Of Service 03</option>
                                            <option>Type Of Service 04</option>
                                            <option>Type Of Service 05</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-page__input-box text-message-box">
                                    <textarea name="message" placeholder="Messege"></textarea>
                                </div>
                                <div class="contact-page__btn-box">
                                    <button type="submit" class="thm-btn"> send a
                                        message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
         <!--Contact Three Start-->
         <section class="contact-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-three__left">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                class="contact-three__google-map" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-three__right">
                            <ul class="contact-three__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Address</h4>
                                        <p>Pundag, Ranchi (India) </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Email Address</h4>
                                        <p><a href="mailto:info.svgs.jharkhand@gmail.com">info.svgs.jharkhand@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Phone number</h4>
                                        <p><a href="tel:+666 888 0000">+666 888 0000</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Three End-->
<?php include "footer.php" ?>