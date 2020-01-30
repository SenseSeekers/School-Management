
    <!-- Contact Start -->
    <div class="map-area">
        <!-- google-map-area start -->
        <div class="google-map-area">
            <!--  Map Section -->
            <div id="contacts" class="map-area">
                <div class="mapouter">
                    <div class="gmap_canvas">
                     <?php echo $SiteOptionData->map;?>
                    </div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 440px;
                            width: 100%;
                        }

                        .mapouter iframe {
                            height: 440px;
                            width: 100%;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 440px;
                            width: 100%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="contact-contents text-center">
                        <div class="single-contact mb-50">
                            <div class="contact-icon">
                                <img src="<?php echo base_url();?>Asset/img/contact/contact1.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>ঠিকানা</h3>
                                <?php echo $SiteOptionData->address;?>
                            </div>
                        </div>
                        <div class="single-contact mb-50">
                            <div class="contact-icon">
                                <img src="<?php echo base_url();?>Asset/img/contact/contact2.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>যোগাযোগ</h3>
                                <p>
                                	<?php echo $SiteOptionData->phone;?> 
                                	<br/>
                                	<?php echo $SiteOptionData->hotline_phone;?> 
                            </p>
                            </div>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <img src="<?php echo base_url();?>Asset/img/contact/contact3.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>অনলাইন</h3>
                                <p> <?php echo $SiteOptionData->email;?>  <br>www.gai.gov.bd</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="reply-area">
                        <form id="contact-form" action="" method="">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>নাম</p>
                                    <input type="text" name="name" id="name" required>
                                </div>
                                <div class="col-md-12">
                                    <p>ইমেইল</p>
                                    <input type="email" name="email" id="email" required>
                                </div>
                                <div class="col-md-12">
                                    <p>বিষয়</p>
                                    <input type="text" name="subject" id="subject">
                                    <p>মেসেজ</p>
                                    <textarea name="message" id="message" cols="15" rows="10" required></textarea>
                                </div>
                            </div>
                            <button class="reply-btn" type="submit" data-text="send"><span>মেসেজ পাঠান</span></button>
                            <p class="form-messege"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->