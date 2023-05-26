<?php 
    $subline = get_sub_field('subline');
    $headline = get_sub_field('headline');
    $text = get_sub_field('text');
    $button_url = get_sub_field('button_url');
    $background_color = get_sub_field('background_color');
?>
<div style="background-color:<?= $background_color;?>" id="kontakt">
    <div class="container pt-5 pb-3 py-lg-5">
        <div class="row py-3 py-lg-5 w-lg-75">
            <div class="col">
                <h2 class="subline text-uppercase text-secondary"><?= $subline; ?></h2>
                <h3 class="headline"><?= $headline; ?></h2>
                <p class="pt-3"><?= $text; ?></p>
                <div class="row py-4">
                    <?php while( have_rows('contact_info') ): the_row();
                        $icon = get_sub_field('icon');
                        $titel = get_sub_field('titel');
                        $text = get_sub_field('text');
                    ?>
                        <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                            <div class="row">
                                <div class="col-2">
                                    <i class="bi bi-<?= $icon; ?> fs-2 text-primary"></i>
                                </div>
                                <div class="col-10">
                                    <h6 class="text-uppercase text-primary"><?= $titel; ?></h6>
                                    <p class="mb-0 text-primary"><?= $text; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php if ( filter_input( INPUT_GET, 'kontaktformular' ) === 'gesendet' ) : ?>
                    <div class="alert alert-secondary" role="alert">
                    Das Formular wurde erfolgreich gesendet.
                    </div>
                <?php endif ?>
                <form class="bg-white px-4 pb-4 pt-4 border-top border-bottom border-secondary" id="form-id" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                    <div class="mb-0">
                        <input type="text" class="ohnohoney" id="nameInput">
                    </div>
                    <div class="mb-0">
                        <input type="text" class="ohnohoney" id="phoneInput">
                    </div>
                    <div class="mb-0">
                        <input type="email" class="ohnohoney" id="emailInput">
                    </div>
                    <div class="mb-0">
                        <textarea class="ohnohoney" id="messageInput" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="row px-0">
                            <div class="col-12 col-lg-6 form-floating">
                                <input type="text" class="form-control" id="nameqay" name="nameqay" placeholder="Vollständiger Name *" required>
                                <label for="nameqay" class="form-label form-label-margin-left text-primary">Vollständiger Name *</label>
                            </div>
                            <div class="col-12 col-lg-6 form-floating">
                                <input type="text" class="form-control" id="phoneedc" name="phoneedc" placeholder="Telefonnummer">
                                <label for="phoneedc" class="form-label form-label-margin-left text-primary">Telefonnummer</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="email" class="form-control" id="emailwsx" name="emailwsx" placeholder="E-Mail Adresse *" required> 
                        <label for="emailwsx" class="form-label text-primary">E-Mail Adresse *</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <textarea class="form-control" id="messagerfv" name="messagerfv" rows="5" placeholder="Ihre Nachricht an uns" style="height:100%"></textarea>
                        <label for="messagerfv" class="form-label text-primary">Ihre Nachricht an uns</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="datenschutztgb" name="datenschutztgb">
                        <label class="form-check-label text-primary" for="datenschutztgb">Ich habe die Datenschutzrichtlinien gelesen und akzeptiere diese.</label>
                    </div>
                    <div class="mb-3 text-primary">
                        <p>Die mit * gekennzeichneten Felder sind Pflichtfelder.</p>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="action" value="form_submit_action">
                        <button type="submit" class="btn btn-outline-secondary">Absenden</button>
                    </div>
                </form>
                <div class="row py-4 mt-3 mt-lg-0">
                    <div class="col-12 col-lg-5 d-flex align-items-center mb-3 mb-lg-0">
                        <p class="mb-0">Oder wollen Sie einen Termin vereinbaren?</p>
                    </div>
                    <div class="col-12 col-lg-7">
                        <a href="<?= $button_url; ?>"><button class="btn btn-outline-secondary" type="button">Termin vereinbaren</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
