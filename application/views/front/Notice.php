
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->notice_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>গ্রাফিক আর্টস ইনস্টিটিউট</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Notice Area Start -->
    <div class="event-area one text-center">
        <div class="container">
            <div class="section-title">
                <img src="<?php echo base_url();?>Asset/img/icon/section.png" alt="section-title">
                <h2>নোটিশ বোর্ড</h2>
            </div>
            <div class="row">

<?php //Notice data loop :) start. 
if($NoticeDataList){
    foreach ($NoticeDataList as $NoticeData) {
?>                                                
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-event mb-35">
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
                </div>
<?php 
    } // end of notice data loop...
}else{
    echo 'No Recent Notice !'; 
}
?>                 

                <div class="col-md-12">
                    <div class="nam-load-more-btn pt-50">
                        <div uk-spinner="ratio: 2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Notice Area End -->