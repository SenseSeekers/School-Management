
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->teacher_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>অধ্যক্ষ মহোদয়</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- About Start -->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-img principal-img">
                        <img src="<?php echo base_url();?>images/teacher/<?php echo $PrincipalData->image;?>" alt="about">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="teacher-details-content principal-message ml-50">
                        <h2> <span><?php echo $PrincipalData->firstname;?><?php echo $PrincipalData->lastname;?></span></h2>
                        <h5>
                            <?php echo $PrincipalData->designation;?>
                        </h5>
                        <h4 style="font-weight: bold;">About Me</h4>
                        <p style="text-align: justify;"><?php echo $PrincipalData->about;?>
                        </p>
                        <ul>
                            <li><span>পদবী :</span> 
                                <b><?php echo $PrincipalData->designation;?></b>
                            </li>
                            <li><span>অভিক্ষতা :</span>
                                <?php echo $PrincipalData->experiences;?> 
                            </li>
                            <li><span>ডিগ্রী :</span> 
                                <?php echo $PrincipalData->educational_qualification;?> 
                            </li>
                            <li><span>শখ :</span> 
                                <?php echo $PrincipalData->hobby;?> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Principal Message Start -->
    <div class="principal-message-sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <img src="<?php echo base_url();?>Asset/img/icon/section.png" alt="title">
                        <h2>অধ্যক্ষ মহোদয়ের বাণী</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="about-content principal-message">
                    <p>
                    <?php echo $PrincipalData->message;?> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Principal Message end -->
    <!-- Teacher Start -->
    <div class="teacher-area">
        <div class="container">
            <div class="section-title text-center">
                <img src="<?php echo base_url();?>Asset/img/icon/section.png" alt="title">
                <h2>পরিচালনা পর্ষদ</h2>
            </div>
            <div class="row">
                <?php 
                    foreach ($FacultyDataList as $FacultyData) {
                ?>
<?php 
       if($FacultyData->type =='Management'){
?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-teacher mb-45">
                        <div class="single-teacher-img">
                            <a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>"><img src="<?php echo base_url();?>images/teacher/<?php echo $FacultyData->image;?>" alt="teacher"></a>
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
    <!-- Teacher End -->