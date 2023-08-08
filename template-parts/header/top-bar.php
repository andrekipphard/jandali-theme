<div class="row top-bar py-3">
    <div class="col d-flex justify-content-end flex-row">
        <?php if( have_rows('header_kontakt', 'options') ): ?>
        <ul>
            <?php while( have_rows('header_kontakt', 'options') ): the_row();
                $icon = get_sub_field('icon');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
                $neuer_tab = get_sub_field('neuer_tab');
            ?>
            <li class="no-before"><a class="text-white" href="<?= $link; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><?php if($icon):?><i class="bi bi-<?= $icon; ?> me-1"></i><?php endif;?><?= $text; ?></a></li>
            <?php endwhile;?>
        </ul>
        <?php endif;?>
    </div>
</div>