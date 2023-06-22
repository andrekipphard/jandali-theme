<?php 
    $headline = get_sub_field('headline');
    $text = get_sub_field('text');
    $background_color = get_sub_field('background_color');

?>
<div style="background-color:<?= $background_color; ?>">
    <div class="container py-3 py-lg-5 px-lg-5">
        <div class="row py-3 py-lg-5 px-lg-5">
            <h2 class="text-secondary"><?= $headline; ?></h2>
            <p class="pt-4"><?= $text; ?></p>
        </div>
    </div>
</div>