<?php 
    $background_color = get_sub_field('background-color');
    $headline_option = get_sub_field('headline_option');
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    if( have_rows('content_card')):
?>
    <div style="background-color:<?=$background_color;?>">
        <div class="container py-3 py-lg-5">
            <div class="row pb-5 pt-3 py-lg-5">
                <?php if($headline_option == 'Ja'):?>
                    <h2 class="subline text-uppercase text-secondary pb-1"><?= $subline; ?></h2>
                    <h3 class="headline pb-lg-3"><?= $headline; ?></h3>
                <?php endif;?>
                <?php while( have_rows('content_card') ): the_row();
                    $image = get_sub_field('image');
                    $headline = get_sub_field('headline');
                    $content = get_sub_field('content');
                    $background_color_content = get_sub_field('background_color_content');
                    $button_text = get_sub_field('button_text');
                    $button_url = get_sub_field('button_url');
                    $neuer_tab = get_sub_field('neuer_tab');
                ?>
                    <div class="col-12 col-lg-4">
                        <div class="card content-card border-0 rounded-0 h-100">
                            <?php if($image):?>
                            <?php $alt_text = get_post_meta($image , '_wp_attachment_image_alt', true);?>
                            <img src="<?= wp_get_attachment_image_url($image, 'img-fluid');?>" class="card-img-top rounded-0" alt="<?= $alt_text;?>">
                            <?php endif;?>
                            <div class="card-body py-4 px-5" style="background-color:<?= $background_color_content; ?>">
                                <h4 class="card-title<?php if($image):?> mt-5<?php endif;?> text-primary"><?= $headline;?></h5>
                                <div class="card-text<?php if(!$image):?> mt-5<?php endif;?>"><?= $content; ?></div>
                                <?php if($button_text):?><a href="<?= $button_url; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><button class="btn btn-link ps-0" type="button"><i class="bi bi-chevron-right text-secondary"></i><?= $button_text; ?></button></a><?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php endif;?>