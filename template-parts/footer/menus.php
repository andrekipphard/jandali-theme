<?php $show_menus_on_mobile = get_field( 'show_menus_on_mobile', 'options' );?>
<?php if(have_rows('menus', 'options')):
    while(have_rows('menus', 'options')): the_row();?>
        <div class="col-6 col-lg-3 <?php if($show_menus_on_mobile == "Nein"):?>mobile-hide<?php endif;?>">
            <?php while(have_rows('spalte', 'options')): the_row(); ?>
                <?php $menu = get_sub_field('menu'); ?>
                <div class="h6 text-uppercase text-secondary">
                    <?= $menu; ?>
                </div>
                <ul>
                    <?php while(have_rows('menupunkte', 'options')): the_row();
                        $menupunkt = get_sub_field('menupunkt');
                        $url = get_sub_field('url'); ?>
                        
                            <li class="no-before mb-1"><a href="<?= $url; ?>" class="text-white"><?= $menupunkt; ?></a></li>
                        
                    <?php endwhile; ?>
                </ul>
            <?php endwhile; ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>