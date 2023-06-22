<?php 
    $subline = get_sub_field('subline');
    $headline = get_sub_field('headline');
    $bild = get_sub_field('bild');
    $overlapping_images = get_sub_field('overlapping_images');
    $image = get_sub_field('image');
    $image_left = get_sub_field('image_left');
    $image_right = get_sub_field('image_right');
    $text = get_sub_field('text');
    $bildposition = get_sub_field('bildposition');
    $bildumlaufend = get_sub_field('bildumlaufend');
    $text_unter_bild = get_sub_field('text_unter_bild');
    $border = get_sub_field('border');
    $background_color = get_sub_field('background_color');
    $abstand = get_sub_field('abstand');
?>
<div style="background-color:<?= $background_color; ?>"  class="col-<?= $col; ?>">
    <div class="container">
        <div class="row<?php if($abstand == 'Ja'): ?> py-4 py-lg-5<?php endif;?><?php if($abstand== 'Nein'): ?> pt-4 pt-lg-5<?php endif?> <?php if($border == 'Ja'): ?> border-bottom border-secondary<?php endif;?>">
            <div class="col <?php if($abstand == 'Ja'): ?> py-4 py-lg-5<?php endif;?><?php if($abstand == 'Nein'): ?> pt-4 pt-lg-5<?php endif?>">
                <h2 class="subline text-uppercase text-secondary pb-1"><?= $subline; ?></h2>
                <h3 class="headline pb-lg-3"><?= $headline; ?></h3>
                <?php if($bild == 'Nein'):?>
                    <p class="pt-3"><?= $text; ?></p>
                <?php endif;?>
                <!-- Image above text -->
                <?php if($bildposition == 'Top' && $bild == 'Ja'):?>
                    <div class="row">
                        <?php if($overlapping_images == 'Ja'):?>
                            <div class="col-6">
                                <img class="py-3" src="<?= wp_get_attachment_image_url($image_left, 'large');?>" style="width: 100%; height: auto;">
                            </div>
                            <div class="col-6">
                                <img class="py-3 mt-5 image-overlap" src="<?= wp_get_attachment_image_url($image_right, 'large');?>" style="width: 100%; height: auto;">
                            </div>
                        <?php endif;?>
                        <?php if($overlapping_images == 'Nein'):?>
                            <div class="col-12">
                                <img class="py-3" src="<?= wp_get_attachment_image_url($image, 'large');?>" style="width: 100%; height: auto;">
                            </div>
                        <?php endif;?>
                    </div>
                    
                    <p class="pt-3"><?= $text; ?></p>
                <?php endif;?>
                <!-- Image below text -->
                <?php if($bildposition == 'Bottom' && $bild == 'Ja'):?>
                    <p class="py-3"><?= $text; ?></p>
                    <div class="row">
                        <?php if($overlapping_images == 'Ja'):?>
                            <div class="col-6">
                                <img class="py-3" src="<?= wp_get_attachment_image_url($image_left, 'large');?>" style="width: 100%; height: auto;">
                            </div>
                            <div class="col-6">
                                <img class="py-3 mt-5 image-overlap" src="<?= wp_get_attachment_image_url($image_right, 'large');?>" style="width: 100%; height: auto;">
                            </div>
                        <?php endif;?>
                        <?php if($overlapping_images == 'Nein'):?>
                            <div class="col-12">
                                <img class="py-3" src="<?= wp_get_attachment_image_url($image, 'large');?>" style="width: 100%; height: auto;">
                            </div>
                        <?php endif;?>
                    </div>
                    
                <?php endif;?>
                <!-- Image left of text -->
                <?php if($bildposition == 'Left' && $bild == 'Ja'):?>
                <div class="row py-lg-3">
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <?php if($overlapping_images == 'Ja'):?>
                                <div class="col-6 position-relative">
                                    <img class="py-3 image-overlap-right" src="<?= wp_get_attachment_image_url($image_left, 'large');?>" style="width: 100%; height: auto;">
                                </div>
                                <div class="col-6">
                                    <img class="py-3 mt-5 " src="<?= wp_get_attachment_image_url($image_right, 'large');?>" style="width: 100%; height: auto;">
                                </div>
                            <?php endif;?>
                            <?php if($overlapping_images == 'Nein'):?>
                                <div class="col-12">
                                    <img class="py-3" src="<?= wp_get_attachment_image_url($image, 'large');?>" style="width: 100%; height: auto;">
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="py-lg-3 pt-3"><?= $text; ?></p>
                    </div>
                    <?php if($bildumlaufend == 'Ja'):?>
                        <div class="row">
                            <div class="col-12">
                                <p class="py-lg-3"><?= $text_unter_bild; ?></p>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <?php endif;?>
                <!-- Image right of text -->
                <?php if($bildposition == 'Right' && $bild == 'Ja'):?>
                <div class="row py-5">
                    <div class="col-12 col-lg-6">
                        <p class="py-3"><?= $text; ?></p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <?php if($overlapping_images == 'Ja'):?>
                                <div class="col-6">
                                    <img class="py-3" src="<?= wp_get_attachment_image_url($image_left, 'large');?>" style="width: 100%; height: auto;">
                                </div>
                                <div class="col-6">
                                    <img class="py-3 mt-5 image-overlap" src="<?= wp_get_attachment_image_url($image_right, 'large');?>" style="width: 100%; height: auto;">
                                </div>
                            <?php endif;?>
                            <?php if($overlapping_images == 'Nein'):?>
                                <div class="col-12">
                                    <img class="py-3" src="<?= wp_get_attachment_image_url($image, 'large');?>" style="width: 100%; height: auto;">
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php if($bildumlaufend == 'Ja'):?>
                        <div class="row">
                            <div class="col-12">
                                <p class="py-lg-3"><?= $text_unter_bild; ?></p>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
