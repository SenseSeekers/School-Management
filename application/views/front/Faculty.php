  <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->teacher_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>শিক্ষক ডাটাবেজ</h2>
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
            	<?php 
            		foreach ($FacultyDataList as $FacultyData) {
            	?>

<?php 
       if($FacultyData->type =='DepartmentalHead'){
?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-teacher mb-45">
                        <div class="single-teacher-img">
						<?php 
                         if(empty($FacultyData->image)){ ?>

                            <a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>">
                        <img src="<?php echo base_url();?>images/user.png" style="height:270px;"></a>

                         <?php  }else{ ?>
                            <a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>"><img src="<?php echo base_url();?>images/teacher/<?php echo $FacultyData->image;?>" alt="teacher" style="height:270px;"></a>
                        <?php 
                            }
                        ?>
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
<?php } elseif($FacultyData->type =='Instructor'){?>

                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-teacher mb-45">
                        <div class="single-teacher-img">
						<?php 
                         if(empty($FacultyData->image)){ ?>

                            <a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>">
                        <img src="<?php echo base_url();?>images/user.png" style="height:270px;"></a>

                         <?php  }else{ ?>
                            <a href="<?php echo base_url('index.php/Front/Teacher_Details/');?><?php echo $FacultyData->id;?>"><img src="<?php echo base_url();?>images/teacher/<?php echo $FacultyData->image;?>" alt="teacher" style="height:270px;"></a>
                        <?php 
                            }
                        ?>
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