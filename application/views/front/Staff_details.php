
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content"><h2>কর্মচারী প্রোফাইল</h2>
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
                    <div class="teacher-details-img" style="text-align: center;">
                        <img src="<?php echo base_url();?>images/staff/<?php echo $StaffData->image;?>" alt="teacher">

                        <h2><?php echo $StaffData->firstname;?><?php echo $StaffData->lastname;?></h2>
                        <h5><?php echo $StaffData->designation;?></h5>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="teacher-details-content ml-50">
                        <h4>আমার সম্পর্কে</h4>
                        <p><?php echo $StaffData->about;?>
                        </p>
                        <ul>
                            <li><span>পদবী :</span> <?php echo $StaffData->designation;?></li>
                            <li><span>অভিক্ষতা :</span> <?php echo $StaffData->experiences;?></li>
                            <li><span>ডিগ্রী :</span> <?php echo $StaffData->educational_qualification;?></li>
                            <li><span>শখ :</span> <?php echo $StaffData->hobby;?></li>
                        </ul>

            <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="teacher-contact">
                        <h4>কনটাক্ট ইনফরমেশন</h4>
                        <p><span>ইমেইল : </span><?php echo $StaffData->email;?></p>
                        <p><span>মোবাইল : </span><?php echo $StaffData->phone;?></p>
                        <ul>
                            <li><a href="<?php echo $StaffData->facebook_link;?>"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                    </div>
                    </div>
                </div>

            </div>
            </div>
            </div>
    <!-- Teacher End -->