<?php if ( $menu_border_color = get_field( 'menu_border_color', 'options' ) ) : ?>
	<?php endif; ?>
<?php if ( get_field( 'mega_menu_option', 'options' ) == "Nein" ) : ?>
    <div class="row pt-3 navigation-row" style="border-top:5px solid <?= $menu_border_color?>;">
        <div class="col">
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
<?php endif; ?>