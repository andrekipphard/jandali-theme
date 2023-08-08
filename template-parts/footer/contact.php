<div class="row">
    <div class="col-12 col-lg-3">
        <?php if ( $logo = get_field( 'footer_logo', 'options' ) ):?>
            <?php $alt_text = get_post_meta($logo , '_wp_attachment_image_alt', true);?>
            <img class="img-fluid footer-logo" src="<?= wp_get_attachment_image_url($logo, 'img-fluid');?>" alt="<?= $alt_text;?>">
        <?php endif;?>
    </div>
    <div class="col-12 col-lg-3">
        <?php if( have_rows('footer_kontakt', 'options') ): ?>
            <div class="h6 text-uppercase text-secondary">
                Kontakt
            </div>
            <ul>
                <?php while( have_rows('footer_kontakt', 'options') ): the_row();
                    $titel = get_sub_field('titel');
                    $text = get_sub_field('text');
                    $link = get_sub_field('link');
                    $neuer_tab = get_sub_field('neuer_tab');
                ?>
                    <li class="no-before"><b class="text-uppercase"><?= $titel; ?></b><a class="text-white" href="<?= $link; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>> <?= $text; ?></a></li>
                <?php endwhile;?>
            </ul>
        <?php endif; ?>
        <?php if(have_rows('footer_websites', 'options')): ?>
            <ul>
                <?php while(have_rows('footer_websites', 'options')): the_row();
                    $website_text = get_sub_field('website_text');
                    $website_url = get_sub_field('website_url');
                    $neuer_tab = get_sub_field('neuer_tab');
                ?>
                    <li class="no-before"><a class="text-white" href="<?= $website_url; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><b><?= $website_text; ?></b></a></li>
                <?php endwhile;?>
            </ul>
        <?php endif;?>
    </div>
    <div class="col-12 col-lg-2">
        <?php if ( $unternehmensname = get_field( 'unternehmensname', 'options' ) ):?>
            <div class="h6 text-uppercase text-secondary">
                <?= $unternehmensname; ?>
            </div>
        <?php endif;?>
        <?php if( $adresse = get_field('adresse', 'options')):?>
            <p class="pb-3">
                <?= $adresse; ?>
            </p>
        <?php endif;?>
        <?php if(have_rows('call_to_action', 'options')):
            while(have_rows('call_to_action', 'options')): the_row();
                $text = get_sub_field('text');
                $url = get_sub_field('url');
                $neuer_tab = get_sub_field('neuer_tab');
        ?>
                <p class="mb-5 mb-lg-0">
                    <a href="<?= $url; ?>" class="text-white"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><?= $text; ?></a>
                </p>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


