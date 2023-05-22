<?php if( have_rows('slide')):?>
<div id="carouselHero" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php while( have_rows('slide') ): the_row();
            $headline = get_sub_field('headline');
            $text = get_sub_field('text');
            $background_image = get_sub_field('hintergrundbild');
        ?>
        <?php if(get_row_index()==1):?>
        <div class="carousel-item active" style="background-image:url('<?= wp_get_attachment_image_url($background_image, 'full');?>'); background-size:cover; background-position:top; background-repeat:no-repeat;">
            <div class="hero-overlay" style="background-color: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>    
            <div class="container height-100 pt-5 pt-lg-0">
                <div class="row height-100 d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <div class="col-lg-7 col-12">

                    </div>
                    <div class="col-12 col-lg-5 hero-content">
                        <h1 class="text-white"><?= $headline; ?></h1>
                        <p class="py-3 text-white"><?= $text; ?></p>
                        <?php if(have_rows('buttons')):?>
                            <?php while(have_rows('buttons')): the_row();
                                $button_text = get_sub_field('button_text');
                                $button_url = get_sub_field('button_url');
                            ?>
                                <a href="<?= $button_url; ?>"><button class="btn btn-outline-light me-3 mb-3 mb-lg-0" type="button"><?= $button_text; ?></button></a>
                            <?php endwhile;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <?php if(get_row_index()>1):?>
        <div class="carousel-item" style="background-image:url('<?= wp_get_attachment_image_url($background_image, 'full');?>'); background-size:cover; background-position:top; background-repeat:no-repeat;">
            <div class="hero-overlay" style="background-color: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>    
            <div class="container height-100 pt-5 pt-lg-0">
                <div class="row height-100 d-flex flex-row align-items-center">
                    <div class="col-12 col-lg-7">

                    </div>
                    <div class="col-12 col-lg-5 hero-content">
                        <h1 class="text-white"><?= $headline; ?></h1>
                        <p class="py-3 text-white"><?= $text; ?></p>
                        <?php if(have_rows('buttons')):?>
                            <?php while(have_rows('buttons')): the_row();
                                $button_text = get_sub_field('button_text');
                                $button_url = get_sub_field('button_url');
                            ?>
                                <a href="<?= $button_url; ?>"><button class="btn btn-outline-light me-3 mb-3 mb-lg-0" type="button"><?= $button_text; ?></button></a>
                            <?php endwhile;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <?php endwhile;?>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php endif;?>