<?php 
    $subline = get_sub_field('subline');
    $headline = get_sub_field('headline');
    $bild = get_sub_field('bild');
    $image = get_sub_field('image');
    $text = get_sub_field('text');
    $bildposition = get_sub_field('bildposition');
    $border = get_sub_field('border');
    $background_color = get_sub_field('background_color');
?>
<div style="background-color:<?= $background_color; ?>"  class="col-<?= $col; ?>">
    <div class="container">
        <div class="row py-4 py-lg-5 <?php if($border == 'Ja'): ?> border-bottom border-light<?php endif;?>">
            <div class="col py-4 py-lg-5">
                <h2 class="subline text-uppercase text-secondary pb-1"><?= $subline; ?></h2>
                <h3 class="headline pb-lg-3"><?= $headline; ?></h2>
                <?php if($bild == 'Nein'):?>
                    <p class="pt-3"><?= $text; ?></p>
                <?php endif;?>
                <!-- Image above text -->
                <?php if($image && $bildposition == 'Top' && $bild == 'Ja'):?>
                    <img class="py-3" src="<?= wp_get_attachment_image_url($image, 'large');?>" style="width: 100%; height: auto;">
                    <p class="pt-3"><?= $text; ?></p>
                <?php endif;?>
                <!-- Image below text -->
                <?php if($image && $bildposition == 'Bottom' && $bild == 'Ja'):?>
                    <p class="py-3"><?= $text; ?></p>
                    <div class="mb-3 mb-lg-0">
                    <img src="<?= wp_get_attachment_image_url($image, 'large');?>" style="width: 100%; height: auto;">
                    </div>
                    
                <?php endif;?>
                <!-- Image left of text -->
                <?php if($image && $bildposition == 'Left' && $bild == 'Ja'):?>
                <div class="row py-lg-3">
                    <div class="col-12 col-lg-6">
                        <img class="mb-3" src="<?= wp_get_attachment_image_url($image, 'large');?>" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="py-3"><?= $text; ?></p>
                    </div>
                </div>
                <?php endif;?>
                <!-- Image right of text -->
                <?php if($image && $bildposition == 'Right' && $bild == 'Ja'):?>
                <div class="row py-5">
                    <div class="col-12 col-lg-6">
                        <p class="py-3"><?= $text; ?></p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="<?= wp_get_attachment_image_url($image, 'large');?>" style="width: 100%; height: auto;">
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
