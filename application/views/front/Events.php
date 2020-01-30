
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->event_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>নমুনা পেইজ (ডিফল্ট)</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    
    <!-- Event Area Start -->
    <div class="event-area three text-center">
        <div class="container">
            <div class="section-title">
                <img title="Title here" src="<?php echo base_url();?>Asset/img/icon/section.png" alt="section-title">
                <h2>আসন্ন ইভেন্টসমূহ</h2>
            </div>

            <div class="row">
<?php   
    foreach ($EventDataList as $EventData) {
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
?>
            </div>

        </div>
    </div>
    <!-- Event Area End -->