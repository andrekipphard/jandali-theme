<div class="bg-primary">
    <div class="container header-desktop">
        <?php get_template_part( 'template-parts/header/top-bar' );?>
        <div class="row pb-3">
            <div class="site-branding col-4">
                <?php
                the_custom_logo();?>
            </div>
            <div class="col-8 d-flex justify-content-end align-items-center">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <button type="submit" class="search-submit bg-white">
                        <i class="bi bi-search text-secondary"></i>
                    </button>
                    <label>
                        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'textdomain' ); ?></span>
                        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Ihr Suchbegriff', 'placeholder', 'textdomain' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                </form>

            </div>
        </div>
        <?php get_template_part( 'template-parts/header/menu' );?>
    </div>
</div>

<?php get_template_part( 'template-parts/header/mega-menu' );?>