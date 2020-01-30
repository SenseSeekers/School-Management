<?php 
    //var_dump($NoticeDataById); die(); 
?>
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->notice_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>নোটিশ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Notice Details Start -->
    <div class="event-details-area blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="event-details">
                        <div class="event-details-img">
                            <img src="<?php echo base_url();?>images/notice/<?php echo $NoticeDataById->notice_file;?>" alt="notice-details" style="width:100%;">
                            <div class="event-date" >
                                <h3>
                                <?php  $time = date('dS', strtotime($NoticeDataById->created_at));
                                     echo $time;?>
                                <br/>
                                <?php  $time = date('M', strtotime($NoticeDataById->created_at));
                                     echo $time;?>
                                </h3>
                            </div>
                        </div>
                        <div class="event-details-content">
                            <h2><?php echo $NoticeDataById->title; ?></h2>
                            <ul>
                                <li><span>
                                    সময় : <?php  $time = date('g:i A', strtotime($NoticeDataById->created_at));
                                     echo $time;?>
                                    </span>
                                  </li>
                                <li><span>ক্যাটাগরি : </span><?php //echo $NoticeDataById->notice_body;?></li>
                                <li><a href="#">ডাউনলোড</a></li>
                            </ul>
                            <p><?php echo $NoticeDataById->notice_body;?></p>
                        </div>
                        <div class="reply-area">
                            <h3>মন্তব্য করুন</h3>
                            <p>গ্রাফিক আর্টস ইনস্টিটিউট, ঢাকা গ্রাফিক আর্টস ইনস্টিটিউট, ঢাকা গ্রাফিক আর্টস ইনস্টিটিউট,
                                ইনস্টিটিউট, ঢাকা গ্রাফিক আর্টস ইনস্টিটিউট, গ্রাফিক আর্টস ইনস্টিটিউট,</p>
                            <form id="contact-form" action="mail.php" method="post">
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
                    <?php //Notice data loop :) start. 
                        if($NoticeDataList){
                          $noticeQty = 0; 
                        foreach ($NoticeDataList as $NoticeData) {
                             $noticeQty++;
                        if($noticeQty<2){ 
                    ?> 
                             <div class="single-blog-banner">
                                <a href="<?php echo base_url('index.php/Front/Notice_Details/'); ?><?php echo $NoticeData->id; ?>" id="blog">
                                    <img src="<?php echo base_url();?>images/notice/<?php echo $NoticeDataById->notice_file;?>" alt="blog">
                                </a>
                                <h2><?php echo $NoticeData->title;?></h2>
                            </div>
                    <?php 
                            }//end of notice limited..
                        } // end of notice data loop...
                    }else{
                        echo 'No Recent Notice !'; 
                    }
                    ?>     
                        </div>

                        <div class="single-blog-widget">
                            <h3 style="margin-bottom: 0;">সর্বশেষ নোটিশ</h3>
                            <div class="single-post" style="height: 350px; margin-bottom: 50px; border-bottom: 4px double #9e9c9c;">
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
                            <div class="single-blog-widget">
                                <h3>ট্যাগ</h3>
                                <div class="single-tag">
                                    <a class="mr-10 mb-10" href="#">কম্পিউটার</a>
                                    <a class="mr-10 mb-10" href="#">প্রোগ্রামিং</a>
                                    <a class="mr-10 mb-10" href="#">ডিজাইন</a>
                                    <a class="mr-10 mb-10" href="#">মেশিন</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Notice Details End -->