
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center"  style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->tech_img;?>">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper" >
                            <div class="banner-content" >
                                <h2><?php echo $CourseDataById->title;?><?php echo $CourseDataById->cover_image;?></h2>
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
                        <div class="courses-details-img">
                            <img src="<?php echo base_url();?>images/course/<?php echo $CourseDataById->course_image;?>" alt="courses-details">
                        </div>
                        <div class="course-details-content">
                            <h2><?php echo $CourseDataById->title;?></h2>
                            <p  style="text-align: justify;"><?php echo $CourseDataById->details;?></p>
                            <div class="course-details-left">
                                <div class="single-course-left">
                                    <h3>কোর্স সম্পর্কে</h3>
                                    <p style="text-align: justify;"><?php echo $CourseDataById->about_course;?></p>
                                </div>
                                <div class="single-course-left">
                                    <h3>যেভাবে আবেদন করবেন</h3>
                                    <p  style="text-align: justify;"><?php echo $CourseDataById->apply_process;?></p>
                                </div>
                                <div class="single-course-left">
                                    <h3>পাঠ্যসূচি</h3>
                                    <p class="margin"  style="text-align: justify;"><?php echo $CourseDataById->curriculumn;?></p>
                                </div>
                            </div>
                            <div class="course-details-right">
                                <h3>কোর্স ফিচার</h3>
                                <ul>
                                    <li>কোর্স শুরু <span><?php echo $CourseDataById->course_start;?></span></li>
                                    <li>কোর্স ডিউরেশন <span><?php echo $CourseDataById->course_duration;?> বছর</span></li>
                                    <li>মোট সেমিস্টার <span><?php echo $CourseDataById->total_semester;?> টি</span></li>
                                    <li>ক্লাস ডিউরেশন <span><?php echo $CourseDataById->class_duration;?> ঘন্টা</span></li>
                                    <li>শিফট <span>shift টি</span></li>
                                    <li>আসন সংখ্যা <span><?php echo $CourseDataById->no_of_seat;?> টি</span></li>
                                    <li>ইন্সট্রাক্টর <span><?php echo $CourseDataById->faculty_member;?> জন</span></li>
                                    <li>দক্ষতা স্তর <span>success_level</span></li>
                                    <li>ভাষা <span>বাংলা</span></li>
                                </ul>
                                <h3 class="red"><a href="#">সেমিস্টার ফি _____ ৳</a></h3>
                            </div>
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
                $Sl=0;
                    foreach ($FacultyDataList as $FacultyData) {
                  $Sl++;
                  if($Sl<3)  {   
                ?>
<?php 
 if($FacultyData->type =='DepartmentalHead'){
?>
                            <div class="single-blog-banner">
                            <a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>"><img src="<?php echo base_url();?>images/teacher/<?php echo $FacultyData->image;?>" alt="teacher"></a>
                            <h2><a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>"><?php echo $FacultyData->firstname;?><?php echo $FacultyData->lastname;?></a>
                                    <span><?php echo $FacultyData->designation;?><br><?php echo $FacultyData->department;?></span>
                                </h2>
                            </div>
<?php }?>
                <?php
                    }
                }
                ?>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3>ইন্সট্রাক্টর</h3>
                            <div class="instructor">
                                <div class="row">


                <?php 
                $Sl=0;
                    foreach ($FacultyDataList as $FacultyData) {
                  $Sl++;
                  if($Sl<20)  {   
                ?>
<?php 
 if($FacultyData->type =='Instructor'){
?>
                                    <div class="col-md-6 col-sm-3 col-xs-6">
                                        <div class="instructor-item">
                                              <a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>">
                                                <img src="<?php echo base_url();?>images/teacher/<?php echo $FacultyData->image;?>" alt="teacher">
                                                <h5><?php echo $FacultyData->firstname;?><?php echo $FacultyData->lastname;?></h5>
                                                <p><?php echo $FacultyData->designation;?></p>
                                            </a>
                                        </div>
                                    </div>
<?php }?>
                <?php
                    }
                }
                ?>
                                </div>
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