<?php if ( $menu_border_color = get_field( 'menu_border_color', 'options' ) ) : ?>
	<?php endif; ?>
<?php if ( get_field( 'mega_menu_option', 'options' ) == "Ja" ) : ?>
    <div class="mega-menu-bar <?php if(is_front_page()):?>mega-menu-bar-startseite<?php endif;?>" style="border-top:5px solid <?= $menu_border_color?>;">
        <div class="container">
            <div class="row main-navigation mega-menu <?php if(is_front_page()):?>opacity-bg-25<?php endif;?>">
                <div class="col ps-0 pe-0">
                <?php if ( have_rows( 'menu', 'options' ) ) : ?>
                    <ul class="d-flex justify-content-between mb-0">
                        <?php while ( have_rows( 'menu', 'options' ) ) : the_row(); 
                            $menupunkt = get_sub_field( 'menupunkt', 'options' );
                            $menupunt_url = get_sub_field('menupunkt_url', 'options');
                            $dropdown = get_sub_field('dropdown', 'options');?>
                            <li <?php if($dropdown == "Ja"):?>class="dropdown dropdown-hover position-static"<?php endif;?>><a href="<?= $menupunt_url; ?>" class="d-block <?php if(is_front_page()):?>text-white mega-menu-startseite-a<?php else:?>mega-menu-nicht-startseite-a<?php endif;?> text-center p-3" <?php if($dropdown == "Ja"):?> href="#" id="navbarDropdown" role="button"
    data-mdb-toggle="dropdown" aria-expanded="false"<?php endif;?>><?= $menupunkt;?><?php if($dropdown == "Ja"):?><i class="bi bi-chevron-down ms-3"></i><?php endif; ?></a>
                            <?php if( $dropdown == "Ja"):?>
                                <?php if ( have_rows( 'mega_menu')):?>
                                    <div class="dropdown-menu bg-primary border-0 rounded-0" aria-labelledby="navbarDropdown">
                                        <div class="container">
                                            <div class="row mega-menu-dropdown p-3">
                                                <?php while (have_rows('mega_menu', 'options')) : the_row();
                                                    $image = get_sub_field('image', 'options');
                                                    $menuname = get_sub_field('menuname', 'options');
                                                    $url = get_sub_field('url', 'options');?>
                                                    <div class="col-3">
                                                        <a href="<?= $url; ?>"><?php $alt_text = get_post_meta($image , '_wp_attachment_image_alt', true);?><img class="img-fluid mb-3" src="<?= wp_get_attachment_image_url($image, 'img-fluid');?>" alt="<?= $alt_text;?>"></a>
                                                        <a href="<?= $url; ?>" class="h6 text-secondary px-3"><?= $menuname; ?></a>
                                                        <?php if(have_rows ('menupunkte', 'options')):?>
                                                            <ul class="mt-3 px-3">
                                                                <?php while(have_rows ('menupunkte', 'options')): the_row();
                                                                    $menupunkt = get_sub_field('menupunkt', 'options');
                                                                    $url = get_sub_field('url', 'options');?>
                                                                    <li class="li-before-element"><a href="<?= $url; ?>" class="text-white"><?= $menupunkt;?></a></li>
                                                                <?php endwhile;?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endwhile;?>
                                            </div>	
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                </div>
                
            </div>
        </div>
    </div>
<?php endif; ?>