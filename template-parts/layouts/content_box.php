<?php 
    $headline = get_sub_field('headline');
    $text = get_sub_field('text');
    $button_text = get_sub_field('button_text');
    $button_url = get_sub_field('button_url');
    $background_color = get_sub_field('background_color');
    $border_top = get_sub_field('border_top');
    $text_color = get_sub_field('text_color');
    $neuer_tab = get_sub_field('neuer_tab');
    if($text_color == "Light"){
        $color = "text-white";
    }
?>
<div class="container">
    <div class="row py-3 pb-lg-0 pt-lg-5">
        <div class="col content-box mb-5 mb-lg-0 <?php if($border_top == "Nein"):?>border-top-0<?php endif;?>" style="background-color: <?= $background_color; ?>;">
            <div class="border-bottom border-secondary">
                <div class="px-4 pt-3 pb-1">
                    <h3 class="text-uppercase <?=$color;?>"><?= $headline; ?></h3>
                </div>
            </div>
            <div class="px-4 pb-4">
                <div class="<?php if($text_color == "Light"):?><?= $color;?><?php else:?>text-primary<?php endif;?>"><p><?= $text; ?></p></div>
                <?php if($button_text):?><a href="<?= $button_url; ?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><button class="btn btn-outline-secondary" type="button"><?= $button_text; ?></button></a><?php endif;?>
            </div> 
        </div>
    </div>
</div>

