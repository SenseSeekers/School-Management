
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->student_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <div class="subscribe-content text-center">
                                    <h2>ছাত্র-ছাত্রীদের তালিকা</h2>
                                    <p>খোঁজ করার জন্য অনুসন্ধান বক্সে নাম, রোল, টেকনলোজি, শিফট অথবা সেশন লিখুন</p>
                                </div>
                                <div class="newsletter-form student-search">
                                    <form action="#">
                                        <input type="search" name="number" class="email"
                                            placeholder="শিক্ষার্থী অনুসন্ধান করুন..." required>
                                        <button class="default-btn" type="submit">
                                            <span>অনুসন্ধান করুন</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- page contant start from here -->
    <!-- filter section -->
    <div class="filter-sec">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <select class="uk-select filtering">
                            <option value="all-tec">সকল টেকনলোজি</option>
                            <option value="cmt">কম্পিউটার টেকনলোজি</option>
                            <option value="design">গ্রাফিক ডিজাইন টেকনলোজি</option>
                            <option value="print">প্রিন্টিং টেকনলোজি</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <select class="uk-select filtering">
                            <option value="both-shift">উভয় শিফট</option>
                            <option value="1st-shift">১ম শিফট</option>
                            <option value="2nd-shift">২য় শিফট</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <select class="uk-select filtering">
                            <option value="all-session">সকল সেশন</option>
                            <option value="2019-20">২০১৯-২০</option>
                            <option value="2018-19">২০১৮-১৯</option>
                            <option value="2017-18">২০১৭-১৮</option>
                            <option value="2016-17">২০১৬-১৭</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <select class="uk-select filtering">
                            <option value="students">ছাত্র ও ছাত্রী</option>
                            <option value="male-students">ছাত্র</option>
                            <option value="female-students">ছাত্রী</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- filter section end -->
    <!-- .student-database-section start -->
    <div class="student-db-sec">
        <div class="container">
            <div class="uk-overflow-auto">
                <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                    <thead>
                        <tr>
                            <th>ক্রমিক নং</th>
                            <th>ছবি</th>
                            <th>নাম</th>
                            <th>বোর্ড রোল</th>
                            <th>টেকনলোজি</th>
                            <th>শিফট</th>
                            <th>সেশন</th>
                            <th>##</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $no = 0;
                            foreach ($StudentDataList as $StudentData) {
                                $no++;
                        ?>

                        <tr>
                            <td><?php echo $no;?></td>
                            <td>
                            	<?php if(empty($StudentData->image == !null)){
                            	?>
                            	<img class="uk-preserve-width uk-border-circle" src="<?php echo base_url();?>images/user.png" alt=""> 
                            	<?php
                            	}else{
                            	?>
                            	<img class="uk-preserve-width uk-border-circle" src="<?php echo base_url();?>images/student/<?php echo $StudentData->image;?>" alt=""> 
                            	<?php
                           		}
                            	?>

                            </td>
                            <td class="text-left"><?php echo $StudentData->full_name_eng;?></td>
                            <td><?php echo $StudentData->board_roll;?></td>
                            <td><?php echo $StudentData->trade;?></td>
                            <td><?php echo $StudentData->shift;?></td>
                            <td><?php echo $StudentData->session;?></td>
                            <td><a href="<?php echo base_url('index.php/Front/StudentDetails/');?><?php echo $StudentData->id; ?>" >view</a></td>
                        </tr>

                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- .student-database-section end -->
    <!-- page contant end -->