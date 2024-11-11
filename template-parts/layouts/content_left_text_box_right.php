<?php 
    $image = get_sub_field('image');
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $background_color = get_sub_field('background_color');
    $left_column = get_sub_field('left_column');
    $video = get_sub_field('video');
    $video_format = get_sub_field('video_format');
    $video_type = get_sub_field('video_type');
    $button_text = get_sub_field('button_text');
    $button_url = get_sub_field('button_url');
    $anker = get_sub_field('anker');
    $neuer_tab = get_sub_field('neuer_tab');
    $layout = get_sub_field('layout');
    if( have_rows('textbox')):
?>
    <div style="background-color:<?= $background_color; ?>">
        <div class="container py-4 py-lg-5" id="<?= $anker;?>">
            <div class="row py-4 py-lg-5">
                <div class="col">
                    <?php if($subline):?><h2 class="subline text-uppercase text-secondary pb-1"><?= $subline; ?></h2><?php endif;?>
                        <?php if($headline):?><h3 class="headline pb-3 mb-4 mb-lg-0"><?= $headline; ?></h2><?php endif;?>
                    <div class="row py-5 py-lg-5 <?php if($layout == 'Content Rechts'):?> overlap-left mt-3<?php endif;?><?php if($layout == 'Content Links'):?> overlap<?php endif;?>">
                        <?php if($left_column == 'Parallax'):?>
                            <div class="col-12 col-lg-7" style="background-image:url('<?= wp_get_attachment_image_url($image, 'full');?>'); background-size:auto 100%; background-position:left; background-repeat:no-repeat; background-attachment: fixed;">
                            </div>
                        <?php endif;?>
                        <?php if($left_column == 'Image'):?>
                            <div class="col-7"<?php if($layout == 'Content Rechts'):?> style="order:2;"<?php endif;?>>
                                <?php $alt_text = get_post_meta($image , '_wp_attachment_image_alt', true);?>
                                <img src="<?= wp_get_attachment_image_url($image, 'full');?>" class="img-fluid desktop-image" alt="<?= $alt_text;?>">
                            </div>
                        <?php endif;?>
                        <?php if($left_column == 'Video'):?>
                            <div class="col-12 col-lg-7"<?php if($layout == 'Content Rechts'):?> style="order:2;"<?php endif;?>>
                                <?php if($video_format =='Quer'):?>
                                    <?php if($video_type == 'Youtube'):?>
                                        <iframe class="desktop-iframe" width="100%" height="400px" src="<?=$video;?>" frameborder="0" allowfullscreen></iframe>
                                    <?php endif;?>
                                    <?php if($video_type == 'Self Hosted'):?>
                                        <video class="desktop-video" width="100%" height="auto" src="<?=$video;?>" controls="true"></video>
                                    <?php endif;?>
                                <?php endif;?>
                                <?php if($video_format =='Hoch'):?>
                                    <?php if($video_type == 'Youtube'):?>
                                        <iframe class="desktop-iframe" width="auto" height="400px" src="<?=$video;?>" frameborder="0" allowfullscreen></iframe>
                                    <?php endif;?>
                                    <?php if($video_type == 'Self Hosted'):?>
                                        <video class="desktop-video" width="auto" height="100%" src="<?=$video;?>" controls="true"></video>
                                    <?php endif;?>
                                <?php endif;?>  
                                 
                            </div>
                        <?php endif;?>
                        
                        <div class="col-12 col-lg-5"<?php if($layout == 'Content Rechts'):?> style="order:1;"<?php endif;?>>
                            <div class="ps-0 ps-lg-5 d-flex justify-content-center d-lg-block">
                                <hr class="text-secondary opacity-100 w-50 align-self-center tagline">
                            </div>
                            <?php if($left_column == 'Parallax' || $left_column == 'Image'):?><?php $alt_text = get_post_meta($image , '_wp_attachment_image_alt', true);?><img src="<?= wp_get_attachment_image_url($image, 'full');?>" class="img-fluid parallax-mobile mb-5" alt="<?= $alt_text;?>"><?php endif;?>
                            <?php if($left_column == 'Video'):?>
                                <?php if($video_format =='Quer'):?>
                                    <?php if($video_type == 'Youtube'):?>
                                        <iframe class="mobile-iframe" width="100%" height="200px" src="<?=$video;?>" frameborder="0" allowfullscreen></iframe>
                                    <?php endif;?>
                                    <?php if($video_type == 'Self Hosted'):?>
                                        <video class="mobile-video" width="100%" height="auto" src="<?=$video;?>" controls="true"></video>
                                    <?php endif;?>
                                <?php endif;?>
                                <?php if($video_format =='Hoch'):?>
                                    <?php if($video_type == 'Youtube'):?>
                                        <iframe class="mobile-iframe" width="auto" height="200px" src="<?=$video;?>" frameborder="0" allowfullscreen></iframe> 
                                    <?php endif;?>
                                    <?php if($video_type == 'Self Hosted'):?>
                                        <video class="mobile-video" width="auto" height="100%" src="<?=$video;?>" controls="true"></video>
                                    <?php endif;?>
                                <?php endif;?>  
                            <?php endif;?>
                            <?php while( have_rows('textbox') ): the_row();
                                $headline = get_sub_field('headline');
                                $text = get_sub_field('text');
                            ?>
                                <div class="ps-0 ps-lg-5 mt-3 mt-lg-0">
                                    <h4 class="text-uppercase"><?= $headline; ?></h3>
                                    <p><?= $text; ?></p>
                                </div>
                            <?php endwhile; ?>
                            <?php if($button_text):?>
                                <div class="ps-0 ps-lg-5 mt-3 mt-lg-0">
                                    <hr class="text-secondary opacity-100">
                                    <a href="<?= $button_url; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><button class="btn btn-link ps-0" type="button"><i class="bi bi-chevron-right text-secondary"></i><?= $button_text; ?></button></a>
                                </div>
                            <?php endif;?>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<?php endif; ?>
