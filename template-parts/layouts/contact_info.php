<?php $background_color = get_sub_field('background_color');
?>

<div class="contact-info-bg" style="background-color:<?= $background_color;?>">
    <div class="container pb-3 pb-lg-5">
        <div class="pb-4 pt-5 p-lg-3 contact-info d-flex flex-lg-row flex-column justify-content-evenly contact-infos-row">
            <?php while( have_rows('contact') ): the_row();
                $icon = get_sub_field('icon');
                $titel = get_sub_field('titel');
                $text = get_sub_field('text');
            ?>
                <div class="d-flex flex-row contact-info-row">
                    <i class="text-white bi bi-<?= $icon; ?> fs-2"></i>
                    <div class="d-flex flex-column justify-content-center ms-4 ms-lg-3">
                        <h6 class="text-uppercase mb-0 text-white"><?= $titel; ?></h6>
                        <p class="mb-0 text-white"><?= $text; ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>