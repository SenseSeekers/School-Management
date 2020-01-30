 <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->site_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>সিটিজেন চার্টার</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <h2 style="color:#342;opacity: .6;"><?php echo $CitizenData->title;?></h2>
                        <div class="blog-details-img">
                            <img src="<?php echo base_url();?>images/citizen/<?php echo $CitizenData->image;?>" alt="blog-details" style="width: 100%;">
                        </div>
                        <div class="blog-details-content">
                            <ul>
                                <li>
                                    <a href=""><i class="zmdi zmdi-account"></i>এডমিন</a>
                                </li>
                                <li>
                                    <a href=""><i class="zmdi zmdi-time"></i>
                                <?php  $time = date('g:i A ' ,strtotime($CitizenData->created_at));
                                     echo $time;?>,
                                <?php  $time = date('dS M Y', strtotime($CitizenData->created_at));
                                     echo $time;?>
                                </a>
                                </li>
                                <li>
                                    <a href=""><i class="zmdi zmdi-comment-text"></i>৬</a>
                                </li>
                            </ul>
                            <p><?php echo $CitizenData->content;?></p>
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
                        <?php 

                            $cl=6;
                            foreach ($CitizenDataList as $CitizenData) {
                            $cl++;
                            if($cl<8) { 

                        ?>
                            <div class="single-blog-banner">
                                <a href="<?php echo base_url('index.php/Front/Citizen_charter/');?><?php echo $CitizenData->id;?>" id="blog"><img src="<?php echo base_url();?>images/citizen/<?php echo $CitizenData->image;?>" alt="blog"></a>
                                <h2>এসডিজি<br> কার্যক্রম<br></h2>
                            </div>
                        <?php 
                          }  
                         }
                        ?>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3>সর্বশেষ নোটিশ</h3>
                        <?php 
                         $cl=0;
                            foreach ($CitizenDataList as $CitizenData) {
                            $cl++;
                            if($cl<6) { 
                        ?>
                            <div class="single-post">
                                <div class="single-post-img" style="width:30%;">
                                    <a href="<?php echo base_url('index.php/Front/Citizen_charter/');?><?php echo $CitizenData->id;?>"><img src="<?php echo base_url();?>images/citizen/<?php echo $CitizenData->image;?>" alt="post" style="width:100%;">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content col-md-8 col-xs-8">
                                    <h4><a href=""><?php echo $CitizenData->title;?></a></h4>
                                    <p>
                                     <?php  $time = date( 'g:i A dS M Y', strtotime($CitizenData->created_at));
                                     echo $time;?> 
                                 </p>
                                </div>
                            </div>
                        <?php 
                          }  
                            }
                        ?>
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
    <!-- Blog End -->