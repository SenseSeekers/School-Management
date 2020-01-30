<?php //data fetch test 
    //var_dump($SliderDataList); die(); 
?>
 <!-- banner Area Start -->
    <section id="slider-container" class="slider-area three">
        <div uk-slideshow="autoplay: true; animation: push; autoplay-interval: 3500; min-height: 300; max-height: 450;">
            <ul class="uk-slideshow-items">
                <?php //slider data loop :) start
                    foreach ($SliderDataList as $SliderData) {
                ?>

                <li class="single-slide item" style="background-image: url(<?php echo base_url();?>images/banner/<?php echo $SliderData->image;?>)">
                    <div class="slider-content-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="slide-content">
                                        <h2><?php echo $SliderData->title;?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php 
                    }//slider  Data loop :)end...
                ?>
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover gai-nav" href="#" uk-slidenav-previous
                uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover gai-nav" href="#" uk-slidenav-next
                uk-slideshow-item="next"></a>
        </div>
    </section>
    <!-- banner Area End -->