
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->curri_img;?>">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper" >
                            <div class="banner-content" >
                                <h2><?php echo $curriData->name;?><?php //echo $CourseDataById->cover_image;?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="courses-details-area blog-area pt-100 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="courses-details">
                    <?php 
                            foreach ($CurriDataListId as $CurriData) {
                       ?>
                        <div class="courses-details-img">
                            <img src="<?php echo base_url();?>images/curri/<?php echo $CurriData->curri_file;?>" alt="courses-details" style="width:100%;"><br/><br/><br/>
                        </div>
                       <?php 
                            }
                        ?>
                        <div class="reply-area">
                            <h3>মন্তব্য করুন</h3>
                            <p>গ্রাফিক আর্টস ইনস্টিটিউট, ঢাকা গ্রাফিক আর্টস ইনস্টিটিউট, ঢাকা গ্রাফিক আর্টস ইনস্টিটিউট,
                                ইনস্টিটিউট, ঢাকা গ্রাফিক আর্টস ইনস্টিটিউট, গ্রাফিক আর্টস ইনস্টিটিউট,</p>
                            <form id="contact-form" action="" method="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>নাম</p>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="col-md-12">
                                        <p>ইমেইল</p>
                                        <input type="email" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <p>বিষয়</p>
                                        <input type="text" name="subject" id="subject">
                                        <p>মেসেজ</p>
                                        <textarea name="message" id="message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <a class="reply-btn" href="#" data-text="send"><span>মেসেজ পাঠান</span></a>
                                <p class="form-messege"></p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>সর্বাধিক পঠিত</h3>
                            <ul>
                                <?php 
                                   foreach ($CurriDataList as $CurriData) {
                                 ?>
                                   <li>
                                    <a href="<?php echo base_url('index.php/Front/Curriculum/');?><?php echo $CurriData->id;?>"> <?php echo $CurriData->name;?>  </a>
                                    </li>
                                <?php 
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3 style="margin-bottom: 0;">সর্বশেষ নোটিশ</h3>
                            <div class="single-post" style="height: 350px; margin-bottom: 50px;">
                                <marquee style="height: 350px;" class="nam-notice-slider-marquee" behavior="scroll-up"
                                    direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                                <?php //Notice data loop :) start. 
                                if($NoticeDataList){
                                    foreach ($NoticeDataList as $NoticeData) {
                                ?>                                           
                                    <div class="single-event nam-latest-notice mb-15" style="overflow:hidden">
                                        <div class="event-date nam-latest-notice-card">
                                            <h3><a href="<?php echo base_url('index.php/Front/Notice_Details/'); ?><?php echo $NoticeData->id; ?>">
                                            <?php  $date = date('dS', strtotime($NoticeData->created_at));
                                                 echo $date;?>
                                            <br/>
                                            <?php  $month = date(' M', strtotime($NoticeData->created_at));
                                                 echo $month;?>
                                            </a></h3>
                                        </div>
                                        <div class="event-content text-left nam-latest-notice-content">
                                            <div class="event-content-left">
                                                <h4>
                                                   <a href="<?php echo base_url('index.php/Front/Notice_Details/'); ?><?php echo $NoticeData->id; ?>"><?php echo $NoticeData->title; ?></a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                } // end of notice data loop...
                                }else{
                                    echo 'No Recent Notice !'; 
                                }
                                ?>   
                                </marquee>
                            </div>
                        </div>
                        <div class="single-blog-widget">
                            <h3>সকল টেকনোলজি</h3>

<?php //course data loop :) start. 
    foreach ($CourseDataList as $CourseData) {
?>
                            <div class="single-post">
                                <div class="single-post-img">
                                    <a href="blog-details.html"><img src="<?php echo base_url();?>images/course/<?php echo $CourseData->course_image;?>" alt="post" style="height:80px;">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="blog-details.html"><?php echo $CourseData->title;?></a></h4>
                                    <p><?php echo $CourseData->no_of_seat;?> </p>
                                </div>
                            </div>
<?php 
    }//end of course data loop..
?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->