<?php 
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $tab = get_sub_field('tabe');?>
<div style="background-color:<?= $background_color; ?>">
    <div class="container py-4 py-lg-5" id="<?= $anker;?>">
        <div class="row py-4 py-lg-5">
            <div class="col">
                <?php if($subline):?><h2 class="subline text-uppercase text-secondary pb-1"><?= $subline; ?></h2><?php endif;?>
                <?php if($headline):?><h3 class="headline pb-3 mb-4 mb-lg-0"><?= $headline; ?></h2><?php endif;?>
                <?php if( have_rows('tab')):?>
                    <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
                    <?php while( have_rows('tab') ): the_row();
                        $titel = get_sub_field('titel');
                        $text = get_sub_field('text');?>
                        <div class="accordion-item mb-1">
                            <h2 class="accordion-header">
                                <button style="background-color:#e0dbd5; font-weight:500;" class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= get_row_index();?>" aria-expanded="false" aria-controls="flush-collapse<?= get_row_index();?>">
                                    <?= $titel;?>
                                </button>
                            </h2>
                            <div style="background-color:#f1ede9;" id="flush-collapse<?= get_row_index();?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"><?= $text;?></div>
                            </div>
                        </div>
                    <?php endwhile;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>