<?php 
    //var_dump($NoticeDataById); die(); 
?>
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->event_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Event</h2>
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
                            <img src="<?php echo base_url();?>images/event/<?php echo $EventDataById->image;?>" alt="notice-details" style="width: 100%; ">
                            <div class="event-date" >
                                <h3>
                                    <?php  $time = date('dS', strtotime($EventDataById->start_time)); echo $time;?><span><?php  $time = date('M', strtotime($EventDataById->start_time)); echo $time;?></span>
                                </h3>
                            </div>
                        </div>
                        <div class="event-details-content">
                            <h2><?php echo $EventDataById->title; ?></h2>
                            <ul>
                                <li><span>
                                    সময় : </span><?php  $time = date('g:i A', strtotime($EventDataById->start_time)); echo $time;?> - <?php  $time = date('g:i A', strtotime($EventDataById->end_time)); echo $time;?>
                                    </span>
                                  </li>
                            </ul>
                            <p><?php echo $EventDataById->details;?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">


                        <div class="single-blog-widget">
                            <h3 style="margin-bottom: 0;">Al Last Event </h3>
                            <div class="single-post" style="height: 350px; margin-bottom: 50px; border-bottom: 4px double #9e9c9c;">
                                <marquee style="height: 350px;" class="nam-notice-slider-marquee" behavior="scroll-up"
                                    direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                                <?php //Notice data loop :) start. 
                                    $event = 0;
                                if($EventDataList){
                                    foreach ($EventDataList as $EventData) {
                                      $event++;
                                      if($event<5){
                                ?>                                           
                                    <div class="single-event nam-latest-notice mb-15" style="overflow:hidden">
                                        <div class="event-date nam-latest-notice-card">
                                            <h3><a href="<?php echo base_url('index.php/Front/Event_details/');?><?php echo $EventData->id;?>">
                                    <?php  $time = date('dS', strtotime($EventData->start_time)); echo $time;?><span><?php  $time = date('M', strtotime($EventData->start_time)); echo $time;?></span>
                                            </a></h3>
                                        </div>
                                        <div class="event-content text-left nam-latest-notice-content">
                                            <div class="event-content-left">
                                                <h4>
                                                   <a href="<?php echo base_url('index.php/Front/Event_details/');?><?php echo $EventData->id;?>"><?php echo $EventData->title; ?></a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                    }
                                 } // end of notice data loop...
                                }else{
                                    echo 'No Recent Notice !'; 
                                }
                                ?>
                                </marquee>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Notice Details End -->