<nav class="floating-socials">
    <?php if( have_rows('socials', 'options') ): ?>
        <ul>
            <?php while( have_rows('socials', 'options') ): the_row();
                $icon = get_sub_field('icon');
                $url = get_sub_field('url');
                $background_color = get_sub_field('background_color');
                $neuer_tab = get_sub_field('neuer_tab');
            ?>
                <li class="no-before"><a href="<?= $url; ?>" style="background-color:<?= $background_color; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><i class="bi bi-<?= $icon; ?>"></i></a></li>
            <?php endwhile;?>
        </ul>
    <?php endif;?>
</nav>