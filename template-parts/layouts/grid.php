
<div class="container">
    <div class="row <?php echo get_flexible_grid_class('grid_content'); ?> d-flex justify-content-between">
        <?php while (have_rows('grid_content')) : the_row(); ?>
            <?php $col = get_layout_col();
            $position = get_sub_field('position');?>
            <div class="col-12 col-lg-<?= $col; if($position == "Center"):?> d-flex align-items-center<?php endif;?>">
                <?php if (get_row_layout() == 'spalte'): ?>
                    <?php if(has_flexible('spalteninhalt')): ?>
                        <?php the_flexible('spalteninhalt'); ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
</div>