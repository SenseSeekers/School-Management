
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->student_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <div class="subscribe-content text-center">
                                    <h2>স্টুডেন্ট রেজিস্টেশন ফ্রম</h2>
                                    <p>স্টুডেন্ট রেজিস্টেশন ফ্রম অবশ্যই সঠিক তথ্য দিয়ে পূরণ করতে হবে। সাবমিট করার আগে
                                        ভালোভাবে চেক করে নিন</p>

                                    <!------>
                                    <?php echo $this->session->flashdata('msg'); ?>
                                    <!------>
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
    <div class="signup-sec">
        <div class="container">
            <?php echo form_open_multipart('Front/StudentReg_Add/');?>
                <div class="row">
                    <div class="col-md-3">
                        <div class="image mb-50">
                            <div class="wrapper">
                                <img src="<?php echo base_url();?>images/user.png?>" id="blah" alt="" style="width:100%; margin: 0px auto;border-radius: 50%;" alt="n/a">
                            </div> 
                         <input type="file" name="image" onchange="readURL(this);" class="default" multiple>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-1">
                                <legend class="uk-legend">Academic Information</legend>
                            </div>
                            <div class="uk-width-1-1">
                                <input class="uk-input" type="text" value="Diploma in Engineering" disabled>
                                <input  type="hidden" name="type" value="Student" >
                            </div>
                            <div class="uk-width-1-3@s">
                                <select name="trade" class="uk-select" required>
                                    <option value="">Select Technology</option>
                                    <?php 
                                        foreach ($CourseDataList as  $CourseData) {
                                    ?>
                                    <option value="<?php echo $CourseData->title;?>"><?php echo $CourseData->title;?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="uk-width-1-3@s">
                                <select class="uk-select" name="shift" required>
                                    <option value="">Select Shift</option>
                                    <option value="1st Shift">1st Shift</option>
                                    <option value="2nd Shif">2nd Shift</option>
                                </select>
                            </div>
                            <div class="uk-width-1-3@s">
                                <input class="uk-input" name="session" type="number" placeholder="Enter Session" required>
                            </div>
                            <div class="uk-width-1-2@s">
                                <input name="board_roll" class="uk-input" type="number" placeholder="Input Board Roll No" required>
                            </div>
                            <div class="uk-width-1-2@s">
                                <input name="board_reg" class="uk-input" type="number" placeholder="Input Board Registation No" required>
                            </div>
                            <div class="uk-width-1-1">
                                <legend class="uk-legend">Personal Information</legend>
                            </div>
                            <div class="uk-width-1-1">
                                <input name="full_name_eng" class="uk-input" type="text" placeholder="Full Name" required>
                            </div>
                            <div class="uk-width-2-3@s">
                                <input  name="full_name_bang" class="uk-input" type="text" placeholder="তোমার পুরা নাম বাংলায় লিখ" required>
                            </div>
                            <div class="uk-width-1-3@s">
                                <select  name="religion" class="uk-select" required>
                                    <option value="">Select Religion</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Hinduism">Hinduism</option>
                                    <option value="Buddhists">Buddhists</option>
                                    <option value="Christians">Christians</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="uk-width-1-2@s">
                                <input  name="father_name" class="uk-input" type="text" placeholder="Father's Name" required>
                            </div>
                            <div class="uk-width-1-2@s">
                                <input  name="mother_name" class="uk-input" type="text" placeholder="Mother's Name" required>
                            </div>
                            <div class="uk-width-1-3@s">
                                <input  name="dob" class="uk-input" type="date" title="Date of Birth" placeholder="Date of Birth" required>
                            </div>
                            <div class="uk-width-1-3@s">
                                <select  name="gender" class="uk-select" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="uk-width-1-3@s">
                                <select  name="blood_group" class="uk-select" required>
                                    <option value="">Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                            <div class="uk-width-1-3@s">
                                <input  name="student_phone" class="uk-input" type="number" placeholder="Mobile Number" required>
                            </div>
                            <div class="uk-width-2-3@s">
                                <input  name="student_email" class="uk-input" type="email" placeholder="Email Address (if any)">
                            </div>
                            <div class="uk-width-1-2@s">
                                <textarea  name="present_address" class="uk-textarea" rows="4" placeholder="Present Address"></textarea>
                            </div>
                            <div class="uk-width-1-2@s">
                                <textarea  name="permanent_address" class="uk-textarea" rows="4" placeholder="Permanent Address"
                                    required></textarea>
                            </div>
                            <div class="uk-width-1-1">
                                <legend class="uk-legend">Local Guardian Information</legend>
                            </div>
                            <div class="uk-width-2-3@s">
                                <input  name="guardian_name" class="uk-input" type="text" placeholder="Name" required>
                            </div>
                            <div class="uk-width-1-3@s">
                                <input  name="guardian_relation" class="uk-input" type="text" placeholder="Relation" required>
                            </div>
                            <div class="uk-width-1-3@s">
                                <input name="guardian_phone"  class="uk-input" type="number" placeholder="Mobile Number" required>
                            </div>
                            <div class="uk-width-2-3@s">
                                <input  name="guardian_nid" class="uk-input" type="number" placeholder="Guardian NID Number" >
                            </div>
                            <div class="uk-width-1-1">
                                <textarea  name="guardian_address" class="uk-textarea" rows="4" placeholder="Permanent Address"
                                    required></textarea>
                            </div>
                            <div class="uk-width-1-1">
                                <button class="uk-button uk-button-primary" style="background: #2C2B5E;"
                                    type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- page contant end -->