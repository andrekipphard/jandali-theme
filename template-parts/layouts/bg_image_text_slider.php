<?php if( have_rows('slide')):?>
    <div id="carouselBG-Image-Text" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php while( have_rows('slide') ): the_row();
                $slide = get_sub_field('slide');
                if (is_array($slide)) {
                    $count = count($slide);
                    }
                $headline = get_sub_field('headline');
                $subline = get_sub_field('subline');
                $text = get_sub_field('text');
                $background_image = get_sub_field('background_image');
                $button_text = get_sub_field('button_text');
                $button_url = get_sub_field('button_url');
                $neuer_tab = get_sub_field('neuer_tab');
            ?>
                <?php if(get_row_index()==1):?>
                    <div class="carousel-item active" style="background-image:url('<?= wp_get_attachment_image_url($background_image, 'full');?>'); background-size:cover; background-position:center; background-repeat:no-repeat; background-attachment: fixed;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="bg-white p-5 p-lg-5 my-5 d-flex flex-column">
                                        <hr class="text-secondary opacity-100 w-50 tagline">
                                        <h3 class="text-uppercase pb-3"><?php if (is_array($slide) && $count > 1):?><?php if(get_row_index()<10):?>0<?php endif;?><?= get_row_index();?><?php endif;?> <span class="gedankenstrich"><?= $subline; ?></span></h3>
                                        <h2 class="text-secondary mb-4"><?= $headline; ?></h2>
                                        <p><?= $text; ?></p>
                                        <a href="<?= $button_url; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><button class="btn btn-link ps-0" type="button"><i class="bi bi-chevron-right text-secondary"></i><?= $button_text; ?></button></a>
                                        <hr class="text-secondary opacity-100">
                                       
                                        
                                        <?php if( have_rows('logos')):?>
                                            <div class="row">
                                                <?php while( have_rows('logos') ): the_row();
                                                    $logo = get_sub_field('logo');
                                                ?>
                                                    <div class="col-6 col-lg-4 d-flex align-items-center">
                                                        <?php $alt_text = get_post_meta($logo , '_wp_attachment_image_alt', true);?>
                                                        <img class="logo" src="<?= wp_get_attachment_image_url($logo, 'img-fluid');?>" v>
                                                    </div>
                                                <?php endwhile;?>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(get_row_index()>1):?>
                    <div class="carousel-item" style="background-image:url('<?= wp_get_attachment_image_url($background_image, 'full');?>'); background-size:cover; background-position:center; background-repeat:no-repeat; background-attachment: fixed;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="bg-white p-5 my-5 d-flex flex-column">
                                        <hr class="text-secondary opacity-100 w-50 align-self-center tagline">
                                        <h3 class="text-uppercase pb-3"><?php if (is_array($slide) && $count > 1):?><?php if(get_row_index()<10):?>0<?php endif;?><?= get_row_index();?><?php endif;?> <span class="gedankenstrich"><?= $subline; ?></span></h3>
                                        <h2 class="text-secondary mb-4"><?= $headline; ?></h2>
                                        <p><?= $text; ?></p>
                                        <hr class="text-secondary opacity-100">
                                        <a href="<?= $button_url; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><button class="btn btn-link ps-0" type="button"><i class="bi bi-chevron-right text-secondary"></i><?= $button_text; ?></button></a>
                                        
                                        <?php if( have_rows('logos')):?>
                                            <div class="row">
                                                <?php while( have_rows('logos') ): the_row();
                                                    $logo = get_sub_field('logo');
                                                ?>
                                                    <div class="col-6 col-lg-4 d-flex align-items-center">
                                                        <?php $alt_text = get_post_meta($logo , '_wp_attachment_image_alt', true);?>
                                                        <img class="logo" src="<?= wp_get_attachment_image_url($logo, 'img-fluid');?>" alt="<?= $alt_text;?>">
                                                    </div>
                                                <?php endwhile;?>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            <?php endwhile;?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBG-Image-Text" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBG-Image-Text" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php endif;?>