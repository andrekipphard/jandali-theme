<?php if ( $logo = get_field( 'footer_logo', 'options' ) ):?>
    <img class="img-fluid footer-logo" src="<?= wp_get_attachment_image_url($logo, 'img-fluid');?>">
<?php endif;?>
<?php if( have_rows('footer_kontakt', 'options') ): ?>
    <div class="h6 text-uppercase text-secondary">
        Kontakt
    </div>
    <ul>
        <?php while( have_rows('footer_kontakt', 'options') ): the_row();
            $titel = get_sub_field('titel');
            $text = get_sub_field('text');
            $link = get_sub_field('link');
        ?>
            <li class="no-before"><b class="text-uppercase"><?= $titel; ?></b><a class="text-white" href="<?= $link; ?>"> <?= $text; ?></a></li>
        <?php endwhile;?>
    </ul>
<?php endif; ?>
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
?>
        <p class="mb-5 mb-lg-0">
            <a href="<?= $url; ?>" class="text-white"><?= $text; ?></a>
        </p>
    <?php endwhile; ?>
<?php endif; ?>