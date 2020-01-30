
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" style="background-image: url(<?php echo base_url();?>images/coverimg/<?php echo $coverimgData->site_img;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>ফটো  গ্যালারি</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- enner eliments start from here -->
    <!-- gallery section start frome here -->
    <div class="gallery-sec">
        <div class="container">

                <?php     foreach ($GalleryDataList as $GalleryData) {?>
<?php if($GalleryData->type == 'Image'){?>

            <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-teacher mb-45">
                        <div class="single-teacher-img">
                            <img src="<?php echo base_url();?>images/gallery/<?php echo $GalleryData->image;?>" alt="teacher" style="width:100%;height: 200px;">
                        </div>
                        <div class="single-teacher-content text-center">
                            <h2><?php echo $GalleryData->caption;?></h2>
                            <h4><?php echo $GalleryData->content;?></h4>
                        </div>
                    </div>
                </div>

<?php   } ?>
                <?php   } ?> 
        </div>
    </div>
    <!-- gallery section end -->
    </div>
    <!-- enner eliments end -->