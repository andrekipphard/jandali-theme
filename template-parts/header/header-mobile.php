<div class="bg-primary">
    <div class="container header-mobile">
        <div class="row navigation-row">
            <div class="site-branding col-8 d-flex align-items-center">
                <?php
                the_custom_logo();?>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <button class="btn btn-offcanvas border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="bi bi-list text-secondary fs-1"></i>	
                </button>

                <div class="offcanvas offcanvas-start bg-primary" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <?php if ( $logo = get_field( 'footer_logo', 'options' ) ):?>
                            <?php $alt_text = get_post_meta($logo , '_wp_attachment_image_alt', true);?>
                            <img class="img-fluid offcanvas-logo" src="<?= wp_get_attachment_image_url($logo, 'img-fluid');?>" alt="<?= $alt_text;?>">
                        <?php endif;?>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav id="site-navigation" class="main-navigation">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                    )
                                );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
