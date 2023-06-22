<?php 
    $subline = get_sub_field('subline');
    $headline = get_sub_field('headline');
    $background_color = get_sub_field('background_color');
    if( have_rows('service')):
?>
<div style="background-color:<?= $background_color; ?>">
    <div class="container py-4 py-lg-5">
        <div class="row py-4 py-lg-5">
            <div class="col services-col px-lg-5">
                <h2 class="subline text-uppercase text-secondary pb-1"><?= $subline; ?></h2>
                <h3 class="headline pb-3"><?= $headline; ?></h2>
                <div class="row d-flex flex-row pt-3 px-3">
                    <?php while( have_rows('service') ): the_row();
                        $titel = get_sub_field('titel');
                        $text = get_sub_field('text');
                        $image = get_sub_field('image');
                    ?>
                        <div class="col-12 col-lg-3 p-0 mb-3 mb-lg-0">
                            <div class="card border-0 rounded-0">
                                <div class="img-zoom">
                                    
                                    <img src="<?= wp_get_attachment_image_url($image, 'img-fluid');?>" class="card-img-top rounded-0">
                                    <div class="img-zoom-overlay">
                                    </div>
                                </div>
                                <div class="card-body py-4 px-lg-4">
                                    <h4 class="text-uppercase"><?= $titel; ?></h4>
                                    <p><?= $text; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>