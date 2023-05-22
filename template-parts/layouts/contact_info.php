<?php $background_color = get_sub_field('background_color');
?>
<div style="background-color:<?= $background_color;?>">
    <div class="container pb-3 pb-lg-5">
        <div class="row pb-4 pt-5 p-lg-3 contact-info">
            <?php while( have_rows('contact') ): the_row();
                $icon = get_sub_field('icon');
                $titel = get_sub_field('titel');
                $text = get_sub_field('text');
            ?>
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="row">
                        <div class="col-2">
                            <i class="text-white bi bi-<?= $icon; ?> fs-2"></i>
                        </div>
                        <div class="col-10 d-flex justify-content-center flex-column">
                            <h6 class="text-uppercase mb-0 text-white"><?= $titel; ?></h6>
                            <p class="mb-0 text-white"><?= $text; ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>