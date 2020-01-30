
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->teacher_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>ইন্সট্রাক্টর প্রোফাইল</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Teacher Start -->
    <div class="teacher-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="teacher-details-img">
                        <img src="<?php echo base_url();?>images/teacher/<?php echo $TeacherData->image;?>" alt="teacher">
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="teacher-details-content ml-50">
                        <h2><?php echo $TeacherData->firstname;?><?php echo $TeacherData->lastname;?></h2>
                        <h5><?php echo $TeacherData->designation;?></h5>
                        <h4>আমার সম্পর্কে</h4>
                        <p style="text-align: justify;"><?php echo $TeacherData->about;?> </p>
                        <ul>
                            <li><span>পদবী :</span> <?php echo $TeacherData->designation;?></li>
                            <li><span>অভিক্ষতা :</span> <?php echo $TeacherData->experiences;?></li>
                            <li><span>ডিগ্রী :</span> <?php echo $TeacherData->educational_qualification;?></li>
                            <li><span>শখ :</span> <?php echo $TeacherData->hobby;?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="teacher-contact">
                        <p><span>ইমেইল : </span><?php echo $TeacherData->email;?></p>
                        <p><span>মোবাইল : </span><?php echo $TeacherData->phone;?></p>
                        <ul>
                            <li><a href="<?php echo $TeacherData->facebook_link;?>"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="skill-area">
                        <h4>বাণী</h4>
                        <p style="text-align: justify;"><?php echo $TeacherData->message;?>\</p>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>