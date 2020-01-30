     <!-- Subscribe Start -->
    <div class="subscribe-area pt-60 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="subscribe-content section-title text-center">
                        <h2>নিউজলেটার সাবস্ক্রাইব করুন</h2>
                        <p>ইমেইলের মাধ্যমে আপডেট পেতে আমাদের নিউজলেটার সাবস্ক্রাইব করুন</p>
                    </div>
                    <div class="newsletter-form mc_embed_signup">
                        <form id="mc-embedded-subscribe-form" class="validate" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" name="EMAIL" class="email" id="mce-EMAIL"
                                    placeholder="আপনার ভেরিফাই করা ইমেইল দিন" required>
                                <div class="mc-news" aria-hidden="true"><input type="email" tabindex="-1">
                                </div>
                                <button id="mc-embedded-subscribe" class="default-btn" type="submit">
                                    <span>সাবস্ক্রাইব</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

    <!-- Footer Start -->
    <footer class="footer-area">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-widget pr-60">
                            <div class="footer-logo pb-25">
                                <a href="index.html"><img src="<?php echo base_url();?>images/logo/<?php echo $SiteOptionData->logo;?>" alt="GAI"></a>
                            </div>
                            <p>
                                <b>  
                                <?php 
                                $SiteAbout =  $SiteOptionData->about;
                                $SiteAbout = character_limiter($SiteAbout, 153);
                                echo $SiteAbout;
                                ?><a href="about.html">...</a></b>
                            </p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="tel:+88-02-9113896"><i class="zmdi zmdi-phone"></i></a></li>
                                    <li><a href="mailto:info@gai.gov.bd"><i class="zmdi zmdi-email"></i></a></li>
                                    <li><a href="https://www.facebook.com/groups/1068207879943410/" target="_blank"><i
                                                class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>তথ্য বাতায়ন</h3>
                            <ul>
                                <li><a class="uk-button-text" href="<?php echo base_url('index.php/Front/About/');?>">প্রতিষ্ঠান পরিচিতি</a></li>
                                <li><a class="uk-button-text" href="<?php echo base_url('index.php/Front/Course/');?>">সকল টেকনোলজি</a></li>
                                <li><a class="uk-button-text" href="<?php echo base_url('index.php/Front/Teacher/');?>">প্রতিষ্ঠানের ডাটাবেজ</a></li>
                                <li><a class="uk-button-text" href="#">এলডিজি কর্ম পরিকল্পনা</a></li>
                                <li><a class="uk-button-text" href="#">বার্ষিক কর্ম সম্পাদন চুক্তি</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>গুরুত্বপূর্ণ লিংক </h3>
                            <ul>
                                <?php 
                                    foreach ($ImportantDataLink as $key => $Datalink) {
                                 ?>
                                <li><a class="uk-button-text" href="<?php echo $Datalink->link?>" target="_blank"><?php echo $Datalink->title?></a></li>   
                                <?php 
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>যোগাযোগ করুন</h3>
                            <p><?php echo $SiteOptionData->address;?></p>
                            <p><?php echo $SiteOptionData->phone;?><br><?php echo $SiteOptionData->online;?></p>
                            <p> <?php echo $SiteOptionData->email;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Onession Heigh School &copy;2020</p>
                    </div>
                    <div class="col-md-6">
                        <p><a href="">Development  by Masud Rana </a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- scroll up -->
    <a class="scroll-up" href="#top" uk-scroll>
        <i class="zmdi zmdi-chevron-up"></i>
    </a>
    <!-- scroll up -->
    <script src="<?php echo base_url();?>Asset/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url();?>Asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>Asset/js/mobilemenu.js"></script>
    <script src="<?php echo base_url();?>Asset/js/uikit.min.js"></script>
    <script src="<?php echo base_url();?>Asset/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="<?php echo base_url();?>Asset/js/main.js"></script>    

    <script>
        
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width()
                    .height();
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    </script>
</body>

</html>