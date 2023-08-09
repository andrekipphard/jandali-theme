<?php 
    $layout = get_sub_field('layout');  
    $background_color = get_sub_field('background_color');  
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
?>
<?php if($layout == "Slider"):
    $testimonials = get_sub_field('testimonial');
    ?>
    <div style="background-color:<?= $background_color; ?>">
        <div class="container py-3 py-lg-5">
            <div class="row pt-5 pb-5 py-lg-5">
                <div class="col">
                    <h2 class="topline text-uppercase text-secondary text-center"><?= $headline; ?></h2>
                    <div id="carouselTestimonialMobile" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <?php $loop = 0;?>
                            <?php foreach (array_chunk($testimonials, 1) as $chunk):?>
                                <button type="button" data-bs-target="#carouselTestimonialMobile" data-bs-slide-to="<?= $loop;?>" <?php if ($loop ==0):?>class="active" <?php endif;?>aria-current="true" aria-label="Slide <?= $loop;?>"></button>
                                <?php $loop++;?>
                            <?php endforeach;?>
                        </div>
                        <div class="carousel-inner">
                            <?php $loop = 1;?>
                            <?php foreach (array_chunk($testimonials, 1) as $chunk):?>
                                <div class="carousel-item <?php if ($loop ==1): echo'active'; endif;?>">
                                    <div class="row">
                                        <?php foreach ($chunk as $slide):?>
                                            <div class="col-12 col-lg-6">
                                                <div class="p-3 text-center">
                                                    <img class="quote" src="<?php echo get_template_directory_uri(); ?>/assets/images/Quote_258.png" alt="quote">
                                                    <p class="text-white pt-3"><?= $slide['feedback']; ?></p>
                                                    <h3 class="text-secondary text-uppercase pt-3"><?= $slide['name']; ?></h3>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                                <?php $loop++;?>
                            <?php endforeach; ?>
                            <button class="carousel-control-prev d-flex justify-content-start" type="button" data-bs-target="#carouselTestimonialMobile" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next d-flex justify-content-end" type="button" data-bs-target="#carouselTestimonialMobile" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <?php 
                        $headline = get_sub_field('headline');
                        $testimonials = get_sub_field('testimonial');
                        $loop = 1;
                    ?>
                    <div id="carouselTestimonial" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach (array_chunk($testimonials, 2) as $chunk):?>
                                <div class="carousel-item <?php if ($loop ==1): echo'active'; endif;?>">
                                    <div class="row">
                                        <?php foreach ($chunk as $slide):?>
                                            <div class="col-12 col-lg-6">
                                                <div class="p-5 text-center">
                                                    <img class="quote" src="<?php echo get_template_directory_uri(); ?>/assets/images/Quote_258.png" alt="quote">
                                                    <p class="text-white pt-3"><?= $slide['feedback']; ?></p>
                                                    <h3 class="text-secondary text-uppercase pt-3"><?= $slide['name']; ?></h3>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                                <?php $loop++;?>
                            <?php endforeach; ?>
                            <button class="carousel-control-prev d-flex justify-content-start" type="button" data-bs-target="#carouselTestimonial" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next d-flex justify-content-end" type="button" data-bs-target="#carouselTestimonial" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<?php endif;?>
<?php if($layout == "Spalten"):
    $feedback = get_sub_field('feedback');
    ?>
    <div style="background-color:<?= $background_color; ?>">
        <div class="container py-4 py-lg-5">
            <div class="row py-4 py-lg-5">
                <div class="col-12 px-lg-5">
                    <h2 class="subline text-uppercase text-secondary pb-1"><?= $subline; ?></h2>
                    <h3 class="headline pb-3"><?= $headline; ?></h2>
                    <div class="row px-3">
                        <?php while( have_rows('feedback') ): the_row();
                            $titel = get_sub_field('titel');
                            $text = get_sub_field('text');
                            $image = get_sub_field('image');?>
                            <div class="col-12 col-lg-4 d-flex flex-column">
                                <div class="bg-white p-5 p-lg-5 my-5 d-flex flex-column justify-content-between h-100">
                                    <div class="div-text">
                                        <hr class="text-secondary opacity-100 w-50 tagline">
                                        <h4 class="text-uppercase"><?= $titel; ?></h4>
                                        <p><?= $text; ?></p>
                                    </div>
                                    <div class="div-image">
                                        <?php $alt_text = get_post_meta($image , '_wp_attachment_image_alt', true);?>
                                        <img src="<?= wp_get_attachment_image_url($image, 'full');?>" class="img-fluid" alt="<?= $alt_text;?>">
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>