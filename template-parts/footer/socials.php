<?php if(have_rows('socials', 'options')):?>
    <div class="col-12 col-lg-3 socials mb-3 mb-lg-0">
        <div class="h6 text-uppercase text-secondary">
            Folgen Sie uns
        </div>
        <ul>
            <?php while(have_rows('socials', 'options')): the_row();
                $icon = get_sub_field('icon');
                $url = get_sub_field('url');?>
                <li class="no-before"><a href="<?= $url; ?>" class="text-white"><i class="bi bi-<?= $icon; ?> fs-2"></i></a></li>
            <?php endwhile;?>
        </ul>
    </div>
<?php endif;?>