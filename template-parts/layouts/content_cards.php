<?php 
    $background_color = get_sub_field('background-color');
    if( have_rows('content_card')):
?>
    <div style="background-color:<?=$background_color;?>">
        <div class="container py-3 py-lg-5">
            <div class="row pb-5 pt-3 py-lg-5">
                <?php while( have_rows('content_card') ): the_row();
                    $image = get_sub_field('image');
                    $headline = get_sub_field('headline');
                    $content = get_sub_field('content');
                    $background_color_content = get_sub_field('background_color_content');
                ?>
                    <div class="col-12 col-lg-4">
                        <div class="card content-card border-0 rounded-0 h-100">
                            <img src="<?= wp_get_attachment_image_url($image, 'img-fluid');?>" class="card-img-top rounded-0">
                            <div class="card-body py-4 px-4" style="background-color:<?= $background_color_content; ?>">
                                <h4 class="card-title mt-5 text-primary"><?= $headline;?></h5>
                                <p class="card-text"><?= $content; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php endif;?>