<?php 
    $layout = get_sub_field('layout');
    $anzahl_der_videos = get_sub_field('anzahl_der_videos');  
    $background_color = get_sub_field('background_color');  
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $titel = get_sub_field('titel');
    $text = get_sub_field('text');
    $button_url = get_sub_field('button_url');
    $neuer_tab = get_sub_field('neuer_tab');
    $button_text = get_sub_field('button_text');
?>
<div style="background-color:<?= $background_color; ?>">
    <div class="container py-4 py-lg-5">
        <div class="row py-4 py-lg-5">
            <div class="col-12 px-lg-5">
                <h2 class="subline text-uppercase text-secondary pb-1"><?= $subline; ?></h2>
                <h3 class="headline pb-3"><?= $headline; ?></h2>
                <div class="row my-5">
                    <?php 
                        $video = get_sub_field('video');
                        $video_instagram = get_sub_field('video_instagram'); 
                        $video_type = get_sub_field('video_type'); 
                        $text_video = get_sub_field('text_video'); 
                        $video2 = get_sub_field('video2'); 
                        $video2_instagram = get_sub_field('video2_instagram'); 
                        $video_type2 = get_sub_field('video_type2'); 
                        $text_video2 = get_sub_field('text_video2'); ?>
                    <div class="col-12 order-1 <?php if($anzahl_der_videos == '1'):?>col-lg-8<?php endif;?><?php if($anzahl_der_videos == '2'):?>col-lg-6<?php endif;?><?php if($layout == 'Text links' && $anzahl_der_videos == '1'):?> order-lg-1 pe-lg-3<?php endif;?><?php if($layout == 'Text links' && $anzahl_der_videos == '2'):?> order-lg-1<?php endif;?><?php if($layout == 'Text rechts' && $anzahl_der_videos == '1'):?> order-lg-2 ps-lg-3<?php endif;?><?php if($layout == 'Text rechts' && $anzahl_der_videos == '2'):?> order-lg-3<?php endif;?> d-flex flex-column">
                        <div class="bg-white p-5 p-lg-5 d-flex flex-column justify-content-between h-100">
                            <div class="div-text">
                                <hr class="text-secondary opacity-100 w-50 tagline">
                                <h4 class="text-uppercase"><?= $titel; ?></h4>
                                <?= $text; ?>
                                <?php if($button_text):?>
                                <div class="mt-3 mt-lg-0">
                                    <a href="<?= $button_url; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><button class="btn btn-link ps-0" type="button"><i class="bi bi-chevron-right text-secondary"></i><?= $button_text; ?></button></a>
                                    <hr class="text-secondary opacity-100">
                                </div>
                            <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 <?php if($anzahl_der_videos == '2'):?>col-md-6<?php endif;?> order-2 mt-3 mt-lg-0 <?php if($anzahl_der_videos == '1'):?>col-lg-4<?php endif;?><?php if($anzahl_der_videos == '2'):?>col-lg-3<?php endif;?><?php if($layout == 'Text links'):?> order-lg-2 ps-lg-3<?php endif;?><?php if($layout == 'Text rechts' && $anzahl_der_videos == '2'):?> order-lg-1 pe-lg-3<?php endif;?> d-flex flex-column<?php if($layout == 'Text rechts' && $anzahl_der_videos == '1'):?> order-lg-1 <?php endif;?>">
                        <div class="div-image">
                            <?php if($video_type == 'Youtube'):?>
                                <iframe width="100%" height="503px" src="<?=$video;?>" frameborder="0" allowfullscreen></iframe>
                            <?php endif;?>
                            <?php if($video_type == 'Self Hosted'):?>
                                <video width="100%" height="auto" src="<?=$video;?>" controls="true"></video>
                            <?php endif;?>
                            <?php if($video_type == 'Instagram'):?>
                                <?= $video_instagram; ?>
                            <?php endif;?>
                        </div>
                        <div class="div-text pt-3">
                            <?= $text_video; ?>
                        </div>
                    </div>
                    <?php if($anzahl_der_videos == '2'):?>
                        <div class="col-12 col-md-6 order-3 col-lg-3 mt-3 mt-lg-0 <?php if($layout == 'Text links'):?>order-lg-3 ps-lg-3<?php endif;?><?php if($layout == 'Text rechts' && $anzahl_der_videos == '2'):?>order-lg-2 pe-lg-3<?php endif;?> d-flex flex-column">
                            <div class="div-image">
                                <?php if($video_type2 == 'Youtube'):?>
                                    <iframe width="100%" height="503px" src="<?=$video2;?>" frameborder="0" allowfullscreen></iframe>
                                <?php endif;?>
                                <?php if($video_type2 == 'Self Hosted'):?>
                                    <video width="100%" height="auto" src="<?=$video2;?>" controls="true"></video>
                                <?php endif;?>
                                <?php if($video_type2 == 'Instagram'):?>
                                    <?= $video2_instagram; ?>
                                <?php endif;?>
                            </div>
                            <div class="div-text pt-3">
                                <?= $text_video2; ?>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>