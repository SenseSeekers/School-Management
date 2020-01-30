
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->site_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>আমাদের সম্পর্কে</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- About Start -->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-content pt-100">
                        <h2><span>গ্রাফিক আর্টস ইনস্টিটিউট</span></h2>
                        <p style="text-align:justify;">
                        	<?php echo $SiteOptionData->about;?> 
                   		</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-img">
                        <img src="<?php echo base_url();?>images/about/<?php echo $SiteOptionData->about_image;?>" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="about-area-expend background-color">
        <div class="container">

        	asfsdf
        </div>
    </div>-->
    <!-- About End -->
    <!-- Courses Area Start -->
    <div class="courses-area text-center" style="background: white;">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <img src="<?php echo base_url();?>Asset/img/icon/section.png" alt="section-title">
                    <h2>সকল ডিপার্টমেন্ট</h2>
                </div>
            </div>
            <div class="row">

<?php //course data loop :) start. 
    foreach ($CourseDataList as $CourseData) {
?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="<?php echo base_url('index.php/Front/Course_Details/');?><?php echo $CourseData->id;?>"><img src="<?php echo base_url();?>images/course/<?php echo $CourseData->course_image;?>" alt="course">
                                <div class="course-hover">
                                    <i class="zmdi zmdi-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href=""><?php echo $CourseData->title;?></a></h3>
                            <p style="text-align: justify;">
                                <?php 
                                $techDetails =  $CourseData->details;
                                $techDetails = character_limiter($techDetails, 153);
                                echo $techDetails;
                                ?>
                             </p>
                            <a class="gai-link-btn" href="<?php echo base_url('index.php/Front/Course_Details/');?><?php echo $CourseData->id;?>">বিস্তারিত</a>
                        </div>
                    </div>
                </div>
<?php 
    }//end of course data loop..
?>


            </div>
        </div>
    </div>
    <!-- Courses Area End -->
    <!-- commity Start -->
    <div class="teacher-area pt-100 pb-70 background-color">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <img src="<?php echo base_url();?>Asset/img/icon/section.png" alt="title">
                        <h2>পরিচালনা পর্ষদ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    foreach ($FacultyDataList as $FacultyData) {
                ?>
<?php 
 if($FacultyData->type =='Management'){
?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-teacher mb-45">
                        <div class="single-teacher-img">
						<?php 
                         if(empty($FacultyData->image)){ ?>

                            <a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>">
                        <img src="<?php echo base_url();?>images/user.png" style="height:270px;"></a>

                         <?php  }else{ ?>
                            <a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>"><img src="<?php echo base_url();?>images/teacher/<?php echo $FacultyData->image;?>" alt="teacher" style="height:270px;"></a>
                        <?php 
                            }
                        ?>
                        </div>
                        <div class="single-teacher-content text-center">
                            <h2><a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>"><?php echo $FacultyData->firstname;?><?php echo $FacultyData->lastname;?></a></h2>
                            <h4><a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>"><?php echo $FacultyData->designation;?></a></h4>
                            <ul>
                                <li><a href="tel:+88-02-9113896"><i class="zmdi zmdi-phone"></i></a></li>
                                <li><a href="mailto:info@gai.gov.bd"><i class="zmdi zmdi-email"></i></a></li>
                                <li><a href=""><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href=""><i class="zmdi zmdi-blogger"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
<?php }?>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- commity  End -->
    <!-- Notice Start -->
    <section class="notice-area two three">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="notice-right-wrapper">
                        <h2>ভিডিও ডকুমেন্টারি</h2>
                        <div class="notice-video">
                            <div class="video-icon video-hover">
                                <a href="#gaimodal" class="video-popup uk-modal-container" uk-toggle>
                                    <i class="zmdi zmdi-play"></i>
                                </a>
                                <!-- video | gai | modal -->
                                <div id="gaimodal" class="uk-modal-container" uk-modal>
                                    <div class="uk-modal-dialog uk-margin-auto-vertical">
                                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                                        <video src="<?php echo base_url();?>Asset/videos/gaivideo.mp4" playsinline
                                            uk-video="autoplay: inview"></video>
                                    </div>
                                </div>
                                <!-- video | gai | modal -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="notice-left notice-overflow-auto">

                            <?php //Notice data loop :) start. 
                            if($NoticeDataList){
                                $N=0;
                                foreach ($NoticeDataList as $NoticeData) {
                                $N++; if($N<7){
                            ?>                                             
                            <div class="single-notice-left mb-23 pb-20">
                                <a href="<?php echo base_url('index.php/Front/Notice_Details/'); ?><?php echo $NoticeData->id; ?>">
                                    <h4>  
                                        <?php  $time = date('dS M Y', strtotime($NoticeData->created_at)); echo $time;?> 
                                 </h4>
                                    <p><?php echo $NoticeData->title; ?></p>
                                </a>
                            </div>
                            <?php }
                                } // end of notice data loop...
                            }else{
                                echo 'No Recent Notice !'; 
                            }
                            ?>         
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Notice End -->
    <!-- Testimonial Area Start --
    <div class="testimonial-area pt-110 pb-105 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <div uk-slider class="uk-position-relative testimonial-slider" style="z-index: 1;">
                        <ul class="uk-slider-items uk-child-width-1-1@s uk-child-width-1-1@">
                            <li class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="<?php echo base_url();?>Asset/img/teacher/mahin.jpg" alt="testimonial">
                                </div>
                                <div class="testimonial-content">
                                    <p>I must explain to you how all this mistaken idea of denoung pleure and praising
                                        pain was born and I will give you a coete account of the system, and expound the
                                        actual</p>
                                    <h4>মাহিন খাঁন</h4>
                                    <h5>ছাত্র, কম্পিউটার টেকনোলজি</h5>
                                </div>
                            </li>
                            <li class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="<?php echo base_url();?>Asset/img/teacher/mahin.jpg" alt="testimonial">
                                </div>
                                <div class="testimonial-content">
                                    <p>I must explain to you how all this mistaken idea of denoung pleure and praising
                                        pain was born and I will give you a coete account of the system, and expound the
                                        actual</p>
                                    <h4>মাহিন খাঁন</h4>
                                    <h5>ছাত্র, কম্পিউটার টেকনোলজি</h5>
                                </div>
                            </li>
                            <li class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="<?php echo base_url();?>Asset/img/teacher/mahin.jpg" alt="testimonial">
                                </div>
                                <div class="testimonial-content">
                                    <p>I must explain to you how all this mistaken idea of denoung pleure and praising
                                        pain was born and I will give you a coete account of the system, and expound the
                                        actual</p>
                                    <h4>মাহিন খাঁন</h4>
                                    <h5>ছাত্র, কম্পিউটার টেকনোলজি</h5>
                                </div>
                            </li>
                        </ul>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->