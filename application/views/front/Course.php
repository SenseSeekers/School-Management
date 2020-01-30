  <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->tech_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>চলমান বিভাগ সমূহ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Teacher Start -->
    <div class="teacher-area pt-150 pb-105">
        <div class="container">
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

            </div>
        </div>
    </div>
    <!-- Teacher End -->