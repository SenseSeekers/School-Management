<?php //data fetch test 
    //var_dump($SiteOptionData); die(); 
?>
 <!-- INSTITUTION PROGRAMES start from here -->
    <section class="all-programes">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="programes-items">
                        <div class="">
                        <h2>নোটিস বোর্ড</h2>
                        <div class="" style="height:400px;">

                            <?php //Notice data loop :) start. 
                            if($NoticeDataList){
                                $N=0;
                                foreach ($NoticeDataList as $NoticeData) {
                                $N++; if($N<5){
                            ?>   
                    <div class="single-event mb-50">
                        <div class="event-date">
                            <h3>
                                <a href="<?php echo base_url('index.php/Front/Notice_Details/'); ?><?php echo $NoticeData->id; ?>">  
                                <?php  $time = date('dS', strtotime($NoticeData->created_at));
                                     echo $time;?>
                                <br/>
                                <?php  $time = date(' M', strtotime($NoticeData->created_at));
                                     echo $time;?>
                                </a>
                         </h3>
                         
                        </div>
                        <div class="notice-content text-left">
                            <div class="event-content-left">
                                <h4><a href="<?php echo base_url('index.php/Front/Notice_Details/'); ?><?php echo $NoticeData->id; ?>"><?php echo $NoticeData->title; ?></a></h4>
                                <ul>

                                    <li><i class="zmdi zmdi-time"></i>৯.০০ AM - ৪.৪৫ PM</li>
                                </ul>
                            </div>
                            <ul class="notice-content-right">
                                <li>
                                    <a class="default-btn nam-notice-btn" href="<?php echo base_url('index.php/Front/Notice_Details/'); ?><?php echo $NoticeData->id; ?>"
                                        style="padding-right: 10px !important;padding-left: 10px !important;">বিস্তারিত</a>
                                </li>
                                <li>
                                    <a class="default-btn nam-notice-download-btn" href="#"
                                        style="margin-right: 3px;">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a class="default-btn nam-notice-download-btn" href="#" target="_blank">
                                        <i class="zmdi zmdi-download"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
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
                <div class="col-md-6 col-sm-12">
                    <!-- gai principal -->
                    <div class="principal-intro">
                        <div class="row">
                            <?php 
                            foreach ($PrincipalDataList as $PrincipalData) {
                            ?>
                            <div class="col-md-7 col-sm-7 col-xs-6">
                                <div class="about-img principal-img">
                                    <img src="<?php echo base_url();?>images/teacher/<?php echo $PrincipalData->image;?>" alt="principal">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-6">
                                <div class="principal-intro-info">
                                    <a href="<?php echo base_url('index.php/Front/Principal_sMs/');?><?php echo $PrincipalData->id;?>"><span><?php echo $PrincipalData->firstname;?></span><?php echo $PrincipalData->lastname;?></span></a>
                                    <h5><?php echo $PrincipalData->designation;?></h5>
                                    <p style="text-align: justify;">
                                    <?php 
                                         $principalmessage =  $PrincipalData->message;
                                         $principalmessage = character_limiter($principalmessage, 155);
                                         echo $principalmessage;
                                     ?>

                                    </p>
                                    <a class="gai-link-btn" href="<?php echo base_url('index.php/Front/Principal_sMs/');?><?php echo $PrincipalData->id;?>">Read More</a>
                                </div>
                            </div> 
                            <?php 
                            }
                            ?>
                        </div>
                    </div>
                    <!-- gai principal end -->
                </div>
            </div>
        </div>
    </section>
    <!-- INSTITUTION PROGRAMES end -->
 <!-- INSTITUTION PROGRAMES start from here -->
    <section class="all-programes" style="margin-top:-60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="programes-items">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="programes-items-card">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>Asset/img/programes/industrial_icon.png" alt="">
                                        <p>Dream</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="programes-items-card">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>Asset/img/programes/mou_icon.png" alt="">
                                        <p>এমওইউ</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="programes-items-card">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>Asset/img/programes/cultural_icon.png" alt="">
                                        <p>সৃজনশীল</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="programes-items-card">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>Asset/img/programes/scout_icon.png" alt="">
                                        <p>রোভার স্কাউট</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="programes-items-card">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>Asset/img/programes/job_placement_icon.png" alt="">
                                        <p>Award</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="programes-items-card">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>Asset/img/programes/training_icon.png" alt="">
                                        <p>প্রশিক্ষণ</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- INSTITUTION PROGRAMES end -->

    <!-- Courses Area Start -->
    <div class="courses-area text-center">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <img src="<?php echo base_url();?>Asset/img/icon/section.png" alt="section-title">
                    <h2>চলমান বিভাগ সমূহ</h2>
                </div>
            </div>
            <div class="row">

<?php //course data loop :) start. 
    foreach ($CourseDataList as $CourseData) {
?>
                <div class="col-md-4 col-sm-6 col-xs-12" style="height:550px;">
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
                                $techDetails = character_limiter($techDetails,220);
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


            </div><!---row end--->          
        </div>
    </div>
    <!-- Courses Area End -->
    <!-- Choose Start -->
    <section class="choose-area" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-left-4 col-sm-8 col-md-offset-left-4" >
                    <div class="choose-content text-left">
                        <h2><?php echo $SiteOptionData->portfolio_title;?></h2>
                        <p style="color:#fff;"> 
                        	<?php 
                                $SitePortfolio =  $SiteOptionData->portfolio_content;
                                $SitePortfolio = character_limiter($SitePortfolio, 1000);
                                echo $SitePortfolio;
                            ?>
                        </p>
                        <a class="default-btn" href="<?php echo base_url('index.php/Front/Course/');?><?php echo $SiteOptionData->id;?>">সকল টেকনোলজি</a>
                    </div>
                </div>
        </div>
        
    </section>

    <section>
         <div class="col-md-8"></div>   
         <div class="col-md-4" style="height:400px; margin-top:-400px;background-image: url();" >
            <img src="<?php echo base_url();?>images/<?php echo $SiteOptionData->portfolio_background;?>" alt="n/a" style="height: 400px;">
          </div>   
             </div>
    </section>
    <!-- Choose Area End -->
    <!-- Notice Start -->
    <section class="notice-area two three">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="notice-right-wrapper">
                        <h2>ভিডিও ডকুমেন্টারি</h2>
                        <div class="gai-video" uk-lightbox>
                            <a class="uk-inline" href="https://youtu.be/DFZseqg6c60">
                                <i class="zmdi zmdi-youtube-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="notice-left-wrapper">
                        <h2>নোটিস বোর্ড</h2>
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
        </div>
    </section>
    <!-- Notice End -->
    <!-- About Start -->
    <div class="about-area bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-content">
                        <h2><span><?php echo $SiteOptionData->name;?></span></h2>
                        <p><?php 
                                $SiteAbout =  $SiteOptionData->about;
                                $SiteAbout = character_limiter($SiteAbout,1000);
                                echo $SiteAbout;
                                ?>
                        </p>
                        <a class="default-btn" href="<?php echo base_url('index.php/Front/About/');?>">আরো জানুন</a>
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
    <!-- About End -->

    <!-- Blog Area Start -->
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <img src="<?php echo base_url();?>Asset/img/icon/section.png" alt="section-title">
                        <h2>বিভাগীয় প্রধানগণ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            	<?php 
            		foreach ($FacultyDataList as $FacultyData) {
            	?>
<?php 
 if($FacultyData->type =='DepartmentalHead'){
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
    <!-- Blog Area End -->
    <!-- Event Area Start -->
    <div class="event-area three text-center">
        <div class="container">
            <div class="section-title">
                <img title="Title here" src="<?php echo base_url();?>Asset/img/icon/section.png" alt="section-title">
                <h2>আসন্ন ইভেন্টসমূহ</h2>
            </div>

            <div class="row">
<?php   
    $event =0 ;
    foreach ($EventDataList as $EventData) {
    $event++;
    if($event<4){
?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-event">
                        <div class="event-img">
                            <a href="<?php echo base_url('index.php/Front/Event_details/');?><?php echo $EventData->id;?>">
                                <img src="<?php echo base_url();?>images/event/<?php echo $EventData->image;?>" alt="event">
                            </a>
                            <div class="event-date">
                                <h3>
                                    <?php  $time = date('dS', strtotime($EventData->start_time)); echo $time;?><span><?php  $time = date('M', strtotime($EventData->start_time)); echo $time;?></span>
                                </h3>
                            </div>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="<?php echo base_url('index.php/Front/Event_details/');?><?php echo $EventData->id;?>"><?php echo $EventData->title;?></a></h4>
                            <ul>
                                <li><span>সময়:</span><?php  $time = date('g:i A', strtotime($EventData->start_time)); echo $time;?> - <?php  $time = date('g:i A', strtotime($EventData->end_time)); echo $time;?></li>
                                <li><span>ভ্যানু:</span><?php echo $EventData->venue;?> </li>
                            </ul>
                            <a class="gai-link-btn" href="<?php echo base_url('index.php/Front/Event_details/');?><?php echo $EventData->id;?>">বিস্তারিত</a>
                        </div>
                    </div>
                </div>
<?php
    }
}
?>
            </div>

        </div>
    </div>
    <!-- Event Area End -->
    <!-- campus section start frome here -->

    <!-- campus section start frome here -->
    <div class="group-club-sec">
        <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="center: true;">
            <ul class="uk-slider-items uk-grid">

                <?php     foreach ($GalleryDataList as $GalleryData) {?>
<?php if($GalleryData->type == 'Image'){?>

                <li class="uk-width-3-4">
                    <div class="uk-panel">
                        <a href="#">
                            <img src="<?php echo base_url();?>images/gallery/<?php echo $GalleryData->image;?>" alt="" style="width:100%; height: 340px;">
                        </a>
                    </div>
                </li>
<?php   } ?>
                <?php   } ?>
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover gai-nav" href="#" uk-slidenav-previous
                uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover gai-nav" href="#" uk-slidenav-next
                uk-slider-item="next"></a>
        </div>
    </div>
    <!-- campus section end -->

    <!-- campus section end -->