    
<?php 
    $background_color = get_sub_field('background_color');
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    if( have_rows('images')):?>
    <div class="swiper-row-desktop" style="background-image: linear-gradient(to bottom, <?= $background_color;?> 0%, <?= $background_color;?> 50%, transparent 50%">
        <div class="py-5">
            <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="subline text-uppercase text-secondary pb-1"><?= $subline; ?></h2>
                    <h3 class="headline pb-3"><?= $headline; ?></h2>
                </div>
            </div>
            </div>
            
            <div class="row py-5 mx-auto my-auto justify-content-center">
                <div style="overflow-x: hidden;">
                    <div class="negative-margin">
                        <div class="swiper-controls" id="swiper-controls-desktop" data-role="slider-controls">
                            <div class="swiper-button swiper-button-next nav nav_next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><span class="carousel-control-next-icon" aria-hidden="true" style=""></span></div>
                            <div class="swiper-button swiper-button-prev nav nav_prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><span class="carousel-control-prev-icon" aria-hidden="true" style=""></span></div>
                        </div>
                        <div class="swiper mySwiper"  id="imgCarousel">
                            <div class="swiper-wrapper">
                                <?php while( have_rows('images') ): the_row();
                                    $image = get_sub_field('image');
                                    $titel = get_sub_field('titel');
                                    $url = get_sub_field('url');
                                    $neuer_tab = get_sub_field('neuer_tab');
                                ?>
                                <div class="swiper-slide">
                                    <div class="col d-flex justify-content-center align-items-center">
                                        <div class="p-3">
                                            <a href="<?=$url;?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>>
                                                <div class="overlay-transparent">
                                                    <div class="no-overflow">
                                                        <?php $alt_text = get_post_meta($image , '_wp_attachment_image_alt', true);?>
                                                        <img class="img-fluid" src="<?= wp_get_attachment_image_url($image, 'full');?>" alt="<?= $alt_text;?>">
                                                    </div>
                                                    <h2 class="slider-subline mt-3"><?= $titel; ?></h2>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-row-mobile" style="background-image: linear-gradient(to bottom, <?= $background_color;?> 0%, <?= $background_color;?> 50%, transparent 50%">
        <div class="py-3">
            <div class="row py-3 mx-auto my-auto justify-content-center">
                <div style="overflow-x: hidden;">
                    <div class="negative-margin">
                        <div class="swiper-controls" data-role="slider-controls">
                            <div class="swiper-button swiper-button-next nav nav_next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><span class="carousel-control-next-icon" aria-hidden="true" style=""></span></div>
                            <div class="swiper-button swiper-button-prev nav nav_prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><span class="carousel-control-prev-icon" aria-hidden="true" style=""></span></div>
                        </div>
                        <div class="swiper mySwiperMobile"  id="imgCarousel">
                            <div class="swiper-wrapper">
                                <?php while( have_rows('images') ): the_row();
                                    $image = get_sub_field('image');
                                    $titel = get_sub_field('titel');
                                ?>
                                <div class="swiper-slide">
                                    <div class="col d-flex justify-content-center align-items-center">
                                        <div class="p-3">
                                            <div class="overlay-transparent">
                                                <div class="no-overflow">
                                                    <?php $alt_text = get_post_meta($image , '_wp_attachment_image_alt', true);?>
                                                    <img class="img-fluid" src="<?= wp_get_attachment_image_url($image, 'full');?>" alt="<?= $alt_text;?>">
                                                </div>
                                                <h2 class="slider-subline mt-3"><?= $titel; ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>