<?php //data fetch test 
    //var_dump($SiteOptionData); die(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $SiteOptionData->title;?></title>
    <link rel="shortcut icon" href="<?php echo base_url();?>Asset/favicon.png" type="image/x-icon">
    <!-- bootstrap stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>Asset/css/bootstrap.min.css">
    <!-- ui kit stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>Asset/css/uikit.min.css">
    <!-- animated css -->
    <link rel="stylesheet" href="<?php echo base_url();?>Asset/css/animate.css">
    <!-- material design iconic font stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>Asset/css/mobilemenu.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Asset/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Asset/css/media.css">
    <!--  -->
    <style>
.header-top {
    background:#6CB317;
    position: relative;
    overflow: hidden;
}
.header-top:after {
    background:#FF9900;
    position: absolute;
    right: 0;
    top: 0;
    content: "";
    height: 100%;
    width: 37%;
}

.header-top-right::after {
    background: #FF9900;
    content: "";
    height: 110px;
    left: -68px;
    position: absolute;
    top: -48px;
    transform: rotate(-45deg);
    width: 60px;
}
    </style>   
</head>

<body>
    <!-- Header Area Start -->
    <header class="top">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <div class="news-bar">
                                <div class="news-title">
                                    <p>??????????????????????????????</p>
                                </div>
                                <ul>
                                    <li>
                                        <marquee behavior="" direction="" onmouseover="this.stop();"
                                            onmouseout="this.start();">
                                            <p>
<?php //Notice data loop :) start. 
if($NoticeDataList){
    $noticeQty = 0; 
    foreach ($NoticeDataList as $NoticeData) {
        $noticeQty++;
        if($noticeQty<6){ 
?>                                                
<a href="<?php echo base_url('index.php/Front/Notice_Details/'); ?><?php echo $NoticeData->id; ?>"><?php echo $NoticeData->title; ?> |</a>
<?php 
        }//end of notice limited..
    } // end of notice data loop...
}else{
    echo 'No Recent Notice !'; 
}
?>                                                
                                            </p>
                                        </marquee>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="header-top-right text-right">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('index.php/User/');?>"><i class="zmdi zmdi-account"></i><span>????????????</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/Front/Student_Reg/');?>"><i
                                            class="zmdi zmdi-account-add"></i><span>??????????????????????????????</span></a>
                                </li>
                                <li>
                                    <a href="#"><img class="lang-flag" src="<?php echo base_url();?>Asset/img/engligh.png"
                                            alt=""><span>English</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area two header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="logo">
                            <a href="<?php echo base_url('index.php/Front/');?>"><img src="<?php echo base_url();?>images/logo/<?php echo $SiteOptionData->logo;?>" alt="GAI" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="content-wrapper text-right">
                            <!-- Main Menu Start -->
                            <div class="main-menu">
                                <nav>
                                    <ul class="menu-nav-overflow-auto">
                                        <li><a href="<?php echo base_url('index.php/Front/');?>">?????????</a>
                                        </li>
                                        <li><a href="">??????????????????????????????</a>
                                            <ul>
                                                <li><a href="<?php echo base_url('index.php/Front/About/');?>">?????????????????????</a></li>
                                                <li><a href="<?php echo base_url('index.php/Front/History/');?>">??????????????????????????? ??????????????????</a></li>
                                                <li class="nam-drop-right"><a href="<?php echo base_url('index.php/Front/Course/');?>">????????????????????????</a>
                                                    <ul>

													<?php //course data loop :) start. 
													    foreach ($CourseDataList as $CourseData) {
													?>
                                                        <li><a href="<?php echo base_url('index.php/Front/Course_Details/');?><?php echo $CourseData->id;?>"><?php echo $CourseData->title;?></a>
                                                        </li>
													<?php 
													    }//end of course data loop..
													?>
                                                    </ul>
                                                </li>
                                                <li class="nam-drop-right"><a href="#">?????????????????????</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url('index.php/Front/Teacher/');?>">??????????????????</a></li>
                                                        <li><a href="<?php echo base_url('index.php/Front/Staff/');?>">???????????????????????????/????????????????????????</a></li>
                                                        <li><a href="<?php echo base_url('index.php/Front/Student/');?>">???????????????/??????????????????</a></li>
                                                    </ul>
                                                </li>
                                                <?php 
                                                	foreach ($PrincipalDataList as $PrincipalData) {
                                                ?>
                                                <li><a href="<?php echo base_url('index.php/Front/Principal_sMs/');?><?php echo $PrincipalData->id;?>">??????????????????????????? ????????????</a> 
                                                </li>
                                                <?php
                                                	}
                                                ?>

                                                <li><a href="<?php echo base_url('index.php/Front/Citizen_charter/');?>">????????????????????? ?????????????????????</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url();?>">????????????????????????</a>
                                            <ul>
                                                <li><a href="<?php echo base_url('index.php/Front/Admission_Info/');?>">??????????????? ????????????</a></li>
                                                <li class="nam-drop-right"><a href="#">???????????????????????????</a>
                                                    <ul>
                                                    	<?php 
                                                    	 foreach ($CurriDataList as $CurriData) {
                                                    	?>
                                                        <li><a href="<?php echo base_url('index.php/Front/Curriculum/');?><?php echo $CurriData->id;?>">
                                                        	<?php echo $CurriData->name;?> 
                                                    </a></li>
                                                    	<?php 
                                                    	 }
                                                    	?>
                                                       
                                                    </ul>
                                                </li>
                                                <li class="nam-drop-right"><a href="<?php echo base_url();?>Asset/#">??????-?????????????????? ???????????????????????????</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url();?>Asset/rover-scout.html">??????????????? ??????????????????</a></li>
                                                        <li><a href="<?php echo base_url();?>Asset/sports.html">????????????-????????????</a></li>
                                                        <li><a href="<?php echo base_url();?>Asset/cultural.html">?????????????????????????????? ???????????????</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo base_url('index.php/Front/A_Calendar/');?>">???????????????????????? ?????????????????????????????????</a></li>
                                                <li><a href="<?php echo base_url('index.php/Front/Events/');?>"> ???????????? ???????????? ????????????????????????</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('index.php/Front/Notice/');?>">???????????????</a>
                                        </li>
                                        <li><a href="<?php echo base_url('index.php/Front/Contact/');?>">?????????????????????</a></li>
                                        <li><a href="">????????????????????????</a>
                                            <ul>
                                                <li><a href="<?php echo base_url('index.php/Front/Photo_Gallery/');?>">????????? ????????????????????????</a></li>
                                                <li><a href="<?php echo base_url('index.php/Front/Video_Gallery/');?>">??????????????? ????????????????????????</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Search Form Start-->
                            <div class="search-btn">
                                <ul data-toggle="dropdown" class="header-search search-toggle">
                                    <li class="search-menu">
                                        <i class="zmdi zmdi-search"></i>
                                    </li>
                                </ul>
                                <div class="search">
                                    <div class="search-form">
                                        <form id="search-form" action="#">
                                            <input type="search" placeholder="???????????? ??????????????????????????? ????????????..." name="search" />
                                            <button type="submit">
                                                <span><i class="zmdi zmdi-search"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End of Search Form-->
                            <!-- Main Menu End -->
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->