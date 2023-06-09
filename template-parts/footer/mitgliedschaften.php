<?php if(have_rows('mitgliedschaften', 'options')):?>
    <div class="col-12 col-lg-9 mitgliedschaften">
        <div class="h6 text-uppercase text-secondary">
            Mitgliedschaften
        </div>
        <ul class="mb-0">
            <?php while(have_rows('mitgliedschaften', 'options')): the_row();
                $image = get_sub_field('image');
                $url = get_sub_field('url');?>
                <li class="no-before"><a href="<?= $url; ?>"><img class="img-fluid" src="<?= wp_get_attachment_image_url($image, 'img-fluid');?>"></a></li>
            <?php endwhile;?>
        </ul>
    </div>
<?php endif;?>