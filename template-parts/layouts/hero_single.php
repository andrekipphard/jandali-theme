<?php
    $image = get_sub_field('image');
    $headline = get_sub_field('headline');
    $text = get_sub_field('text');
    $layout = get_sub_field('layout');
    $background_color = get_sub_field('background_color');
?>
<div style="background-color:<?= $background_color; ?>">
    <div class="container">
        <div class="row pt-4 border-bottom border-light">
            <div class="col ps-lg-0">
                <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
            </div>
        </div>
        <?php if($layout == 'Image'):?>
            <div class="row py-5 py-lg-3 mt-0 mt-lg-4 hero-single" style="background-image:url('<?= wp_get_attachment_image_url($image, 'full');?>'); background-position:left; background-size:contain; background-repeat:no-repeat;">
                <div class="col-12 col-lg-5 offset-0 offset-lg-7 d-flex flex-column justify-content-center flex-lg-row align-items-center">
                    <div class="p-4 bg-primary-opacity-half">
                        <hr class="text-secondary opacity-100 w-50 align-self-center tagline">
                        <h1 class="text-white"><?= $headline; ?></h1>
                        <p class="text-white"><?= $text; ?></p>
                    </div>
                </div>
            </div>
        <?php endif;?>
        <?php if($layout == 'Text'):?>
            <div class="row pt-lg-5 py-5 pb-lg-0 mt-4 hero-single-text">
                <div class="col-12 col-lg-6 d-flex align-items-center">
                    <div class="p-4 text-white bg-primary">
                        <hr class="text-secondary opacity-100 w-50 align-self-center tagline">
                        <h1 class="text-white pb-3"><?= $headline; ?></h1>
                        <p><?= $text; ?></p>
                    </div>
                </div>
            </div>
        <?php endif;?>
    </div>
</div>
