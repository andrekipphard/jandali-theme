<?php 
    $headline = get_sub_field('headline');
    $text = get_sub_field('text');
?>
<div class="container pb-5 pt-0 py-lg-5 banner">
    <div class="row">
        <div class="col py-3 py-lg-5">
            <div class="row bg-primary p-4">
                <h2 class="text-secondary text-uppercase"><?= $headline; ?></h2>
                <p class="text-white mb-0"><?= $text; ?></p>
            </div>
        </div>
    </div>
</div>