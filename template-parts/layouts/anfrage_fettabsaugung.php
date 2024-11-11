<?php if(is_admin()){
    return;
}
?>
<?php 
    $required = (is_admin()) ? "" : "required";
    $subline = get_sub_field('subline');
    $headline = get_sub_field('headline');
    $text = get_sub_field('text');
    $button_url = get_sub_field('button_url');
    $background_color = get_sub_field('background_color');
    $neuer_tab = get_sub_field('neuer_tab');
?>
<div style="background-color:<?= $background_color;?>" id="kontakt">
    <div class="container pt-5 pb-3 py-lg-5">
        <div class="row py-3 py-lg-5">
            <div class="col">
                <h2 class="subline text-uppercase text-secondary"><?= $subline; ?></h2>
                <h3 class="headline"><?= $headline; ?></h2>
                <p class="pt-3"><?= $text; ?></p>
                <?php if(have_rows('contact_info')):?><div class="row py-4">
                    <?php while( have_rows('contact_info') ): the_row();
                        $icon = get_sub_field('icon');
                        $titel = get_sub_field('titel');
                        $text = get_sub_field('text');
                        $url = get_sub_field('url');
                        $neuer_tab = get_sub_field('neuer_tab');
                    ?>
                        <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                            <div class="row">
                                <div class="col-2">
                                    <a href="<?=$url;?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><i class="bi bi-<?= $icon; ?> fs-2 text-primary"></i></a>
                                </div>
                                <div class="col-10">
                                    <h6 class="text-uppercase text-primary"><?= $titel; ?></h6>
                                    <a href="<?=$url;?>"<?php if($neuer_tab == 'Ja'):?> target="_blank"<?php endif;?>><p class="mb-0 text-primary"><?= $text; ?></p></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div><?php endif;?>
                <?php if ( filter_input( INPUT_GET, 'kontaktformular' ) === 'gesendet' ) : ?>
                    <div class="alert alert-secondary" role="alert">
                    Das Formular wurde erfolgreich gesendet.
                    </div>
                <?php endif ?>
				<?php if ( filter_input( INPUT_GET, 'kontaktformular' ) === 'hcaptcha-fehler' ) : ?>
                    <div class="alert alert-danger" role="alert">
                    	Das hCaptcha war fehlerhaft.
                    </div>
                <?php endif ?>
                <form class="bg-white px-4 pb-4 pt-4 border-top border-bottom border-secondary multi-step-form" id="form-id" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" enctype="multipart/form-data">
                    <!-- Fortschrittsleiste -->
                    <div class="progress mb-4">
                        <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                    <!-- Schritt 1: Individuelle Anfragen -->
                    <div class="form-step active">
                        <h3>Individuelle Anfrage</h3>
                        <div class="mb-3">
                            <p class="mb-0">Ich wünsche mir Informationen bzw. einen Beratungstermin zu einer Fettabsaugung an folgender Region:</p>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="fettabsaugung_beine" name="fettabsaugung[]" value="Beine">
                                <label for="fettabsaugung_beine" class="form-check-label">Beine</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="fettabsaugung_arme" name="fettabsaugung[]" value="Arme">
                                <label for="fettabsaugung_arme" class="form-check-label">Arme</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="fettabsaugung_rumpf" name="fettabsaugung[]" value="Rumpf">
                                <label for="fettabsaugung_rumpf" class="form-check-label">Rumpf</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="fettabsaugung_gesicht" name="fettabsaugung[]" value="Gesicht">
                                <label for="fettabsaugung_gesicht" class="form-check-label">Gesicht</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="eigenfetttransplantation" name="eigenfetttransplantation" value="Ich interessiere mich für eine Eigenfetttransplantation">
                                <label for="eigenfetttransplantation" class="form-check-label">Ich interessiere mich für eine Eigenfetttransplantation</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="eigenfetttransplantation_gesicht" name="eigenfetttransplantation[]" value="Zum Gesicht (Faltenbehandlung)">
                                    <label for="eigenfetttransplantation_gesicht" class="form-check-label">Zum Gesicht (Faltenbehandlung)</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="eigenfetttransplantation_brust" name="eigenfetttransplantation[]" value="Zur Brustvergrößerung">
                                    <label for="eigenfetttransplantation_brust" class="form-check-label">Zur Brustvergrößerung</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="eigenfetttransplantation_bbl" name="eigenfetttransplantation[]" value="BBL (Gesäßformung)">
                                    <label for="eigenfetttransplantation_bbl" class="form-check-label">BBL (Gesäßformung)</label>
                                </div>
                            </div>
                        </div>
                       
                        <div class="mb-3">
                            <p class="mb-0">Ich leide an einem Lipödem</p>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="lipoedem_yes" name="lipoedem" value="Ja">
                                <label for="lipoedem_yes" class="form-check-label">Ja</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="lipoedem_no" name="lipoedem" value="Nein">
                                <label for="lipoedem_no" class="form-check-label">Nein</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <p class="mb-0">Ich wünsche mir einen Termin:</p>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="termin_selfpay" name="termin[]" value="In der Selbstzahlersprechstunde bei Dr. Jandali (59,50€ inkl. MwSt.)">
                                <label for="termin_selfpay" class="form-check-label">In der Selbstzahlersprechstunde bei Dr. Jandali (59,50€ inkl. MwSt.)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="termin_insurance" name="termin[]" value="In der Kassensprechstunde der Augusta Praxis (Lipödem Stadium III)">
                                <label for="termin_insurance" class="form-check-label">In der Kassensprechstunde der Augusta Praxis (Lipödem Stadium III)</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="termin_beratung" name="termin_typ" value="Als reinen Beratungstermin, ohne Antragserstellung zur Behandlung des Lipödems">
                                    <label for="termin_beratung" class="form-check-label">Als reinen Beratungstermin, ohne Antragserstellung zur Behandlung des Lipödems</label>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="termin_antrag" name="termin[]" value="Zusätzlich wünsch ich eine Erstellung eines Antrags zur Kostenübernahme bei Krankenkasse (60€)">
                                <label for="termin_antrag" class="form-check-label">Zusätzlich wünsch ich eine Erstellung eines Antrags zur Kostenübernahme bei Krankenkasse (60€)</label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-secondary next-step">Weiter</button>
                    </div>

                    <!-- Schritt 2: Allgemeine Informationen -->
                    <div class="form-step">
                        <h3>Allgemeine Informationen</h3>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="nebenerkrankung" name="nebenerkrankung" placeholder="Relevante Nebenerkrankungen">
                            <label for="nebenerkrankung">Haben Sie relevante Nebenerkrankungen?</label>
                        </div>
                        <div class="mb-3">
                            <label for="photo-upload mb-3">Laden Sie ein aktuelles Foto hoch, um uns eine erste Einschätzung zu ermöglichen</label>
                            <input type="file" class="form-control" id="photo-upload" name="photo-upload" accept="image/jpeg, image/png" />
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="weiteres" name="weiteres" placeholder="Weitere Fragen oder Anmerkungen">
                            <label for="weiteres">Weitere Fragen oder Anmerkungen</label>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="kontaktierung" name="kontaktierung" value="Ich wünsche mir eine Kontaktierung bei Fragen zu dem Thema">
                                <label for="kontaktierung" class="form-check-label">Ich wünsche mir eine Kontaktierung bei Fragen zu dem Thema</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="beratung" name="beratung" value="Ich wünsche mir eine Kontaktierung mit Terminvorschlag zur Beratung vor Ort">
                                <label for="beratung" class="form-check-label">Ich wünsche mir eine Kontaktierung mit Terminvorschlag zur Beratung vor Ort</label>
                            </div>
                        </div>

                        <button type="button" class="btn btn-outline-secondary prev-step">Zurück</button>
                        <button type="button" class="btn btn-outline-secondary next-step">Weiter</button>
                    </div>

                    <!-- Schritt 3: Persönliche Daten -->
                    <div class="form-step">
                        <h3>Persönliche Daten</h3>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Vorname" <?=$required;?>>
                            <label for="first_name">Vorname *</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nachname" <?=$required;?>>
                            <label for="last_name">Nachname *</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" id="emailwsx" name="email" placeholder="E-Mail Adresse *" <?=$required;?>> 
                            <label for="email" class="form-label text-primary">E-Mail Adresse *</label>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefonnummer *" <?=$required;?>>
                            <label for="phone" class="form-label text-primary">Telefonnummer *</label>
                        </div>

                        <div class="mb-3">
                            <p class="mb-0">Ich wünsche eine Kontaktierung per</p>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="kontakt_telefon" name="kontakt_telefon" value="Telefon">
                                <label for="kontakt_telefon" class="form-check-label">Telefon</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="kontakt_email" name="kontakt_email" value="E-Mail">
                                <label for="kontakt_email" class="form-check-label">E-Mail</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="verteiler" name="verteiler" value="Ich wünsche mir regelmäßige Informationen zu Themen rund um Beauty und Plastische Chirurgie">
                                <label class="form-check-label" for="verteiler">Ich wünsche mir regelmäßige Informationen zu Themen rund um Beauty und Plastische Chirurgie</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" <?=$required;?>>
                                <label class="form-check-label" for="privacy_policy">Ich habe die Datenschutzrichtlinien gelesen und akzeptiere diese. *</label>
                            </div>
                        </div>

                        <button type="button" class="btn btn-outline-secondary prev-step">Zurück</button>
                        <input type="submit" name="cf-submitted" value="Absenden" class="btn btn-outline-secondary"></button>
                    </div>

                </form>

                <?php
                    // Überprüfen, ob das Formular gesendet wurde
                    if (isset($_POST['cf-submitted'])) {
                        // Eingabefelder bereinigen
                        $first_name = sanitize_text_field($_POST['first_name']);
                        $last_name = sanitize_text_field($_POST['last_name']);
                        $email = sanitize_email($_POST['email']);
                        $phone = sanitize_text_field($_POST['phone']);

                        // Anfrageinformationen sammeln
                        $fettabsaugung = isset($_POST['fettabsaugung']) ? implode(', ', $_POST['fettabsaugung']) : 'Keine Auswahl';
                        $eigenfetttransplantation = isset($_POST['eigenfetttransplantation']) ? implode(', ', $_POST['eigenfetttransplantation']) : 'Keine Auswahl';
                        $lipoedem = isset($_POST['lipoedem']) ? sanitize_text_field($_POST['lipoedem']) : 'Keine Auswahl';
                        $nebenerkrankung = isset($_POST['nebenerkrankung']) ? sanitize_text_field($_POST['nebenerkrankung']) : 'Keine Auswahl';
                        $weiteres = isset($_POST['weiteres']) ? sanitize_text_field($_POST['weiteres']) : 'Keine Auswahl';
                        $kontaktierung = isset($_POST['kontaktierung']) ? sanitize_text_field($_POST['kontaktierung']) : 'Keine Auswahl';
                        $beratung = isset($_POST['beratung']) ? sanitize_text_field($_POST['beratung']) : 'Keine Auswahl';
                        $verteiler = isset($_POST['verteiler']) ? sanitize_text_field($_POST['verteiler']) : 'Keine Auswahl';
                        $kontakt_email = isset($_POST['kontakt_email']) ? sanitize_text_field($_POST['kontakt_email']) : '';
                        $kontakt_telefon = isset($_POST['kontakt_telefon']) ? sanitize_text_field($_POST['kontakt_telefon']) : '';

                        // Kombinierte Ausgabe für Kontakt
                        if ($kontakt_email && $kontakt_telefon) {
                            $kontakt = $kontakt_email . ', ' . $kontakt_telefon;
                        } elseif ($kontakt_email) {
                            $kontakt = 'E-Mail: ' . $kontakt_email;
                        } elseif ($kontakt_telefon) {
                            $kontakt = 'Telefon: ' . $kontakt_telefon;
                        } else {
                            $kontakt = 'Keine Auswahl';
                        }

                        // Foto-Upload verarbeiten
                        $photo_upload = '';
                        if (isset($_FILES['photo-upload']) && $_FILES['photo-upload']['error'] == 0) {
                            $upload_dir = wp_upload_dir(); // WordPress Upload-Verzeichnis
                            $target_dir = $upload_dir['path'] . '/'; // Zielordner

                            // Den Dateinamen bereinigen
                            $file_name = sanitize_file_name($_FILES['photo-upload']['name']);
                            $target_file = $target_dir . $file_name;

                            // Nur Bilddateien akzeptieren (JPEG, PNG)
                            $allowed_types = ['image/jpeg', 'image/png'];
                            if (in_array($_FILES['photo-upload']['type'], $allowed_types)) {
                                if (move_uploaded_file($_FILES['photo-upload']['tmp_name'], $target_file)) {
                                    $photo_upload = $upload_dir['url'] . '/' . $file_name; // URL der hochgeladenen Datei
                                } else {
                                    $photo_upload = 'Fehler beim Hochladen des Fotos.';
                                }
                            } else {
                                $photo_upload = 'Ungültiger Dateityp. Nur JPG und PNG sind erlaubt.';
                            }
                        } else {
                            $photo_upload = 'Kein Foto hochgeladen.';
                        }

                        // Verarbeitung der Termin-Wünsche
                        $termin = isset($_POST['termin']) ? $_POST['termin'] : [];
                        $termin_typ = isset($_POST['termin_typ']) ? sanitize_text_field($_POST['termin_typ']) : '';

                        // Variablen für die Termindaten vorbereiten
                        $termin_text = '';
                        $termin_with_typ = '';

                        // Alle anderen Terminauswahlen verarbeiten
                        foreach ($termin as $selected_termin) {
                            if ($selected_termin == 'In der Kassensprechstunde der Augusta Praxis (Lipödem Stadium III)' && $termin_typ) {
                                $termin_text .= ($termin_text ? ', ' : '') . $selected_termin . ' - ' . $termin_typ;
                            }
                            else {
                                $termin_text .= ($termin_text ? ', ' : '') . $selected_termin;
                            }
                        }

                        // Kombiniere Termintext und zusätzlichen Typ, falls vorhanden
                        $termin_text .= $termin_with_typ;

                        // Nachricht für den Admin
                        $admin_email = 'akipphard@yahoo.de'; // Ersetze durch die E-Mail-Adresse des Admins
                        $admin_subject = 'Neue Anfrage von ' . $first_name . ' ' . $last_name;
                        $admin_body = "Es ist eine neue Anfrage eingegangen:\n\n";
                        $admin_body .= "Name: $first_name $last_name\n";
                        $admin_body .= "E-Mail: $email\n";
                        $admin_body .= "Telefon: $phone\n\n";
                        $admin_body .= "Ich wünsche mir Informationen bzw. einen Beratungstermin zu einer Fettabsaugung an folgender Region: $fettabsaugung\n";
                        $admin_body .= "Ich interessiere mich für eine Eigenfetttransplantation: $eigenfetttransplantation\n";
                        $admin_body .= "Ich leide an einem Lipödem: $lipoedem\n";
                        $admin_body .= "Ich wünsche mir einen Termin: $termin_text\n";
                        $admin_body .= "Haben Sie relevante Nebenerkrankungen?: $nebenerkrankung\n";
                        $admin_body .= "Foto hochgeladen: $photo_upload\n";
                        $admin_body .= "Weitere Fragen oder Anmerkungen?: $weiteres\n";
                        $admin_body .= "Ich wünsche mir eine Kontaktierung bei Fragen zu dem Thema: " . ($kontaktierung ? 'Ja' : 'Keine Auswahl') . "\n";
                        $admin_body .= "Ich wünsche mir eine Kontaktierung mit Terminvorschlag zur Beratung vor Ort: " . ($beratung ? 'Ja' : 'Keine Auswahl') . "\n";
                        $admin_body .= "Ich wünsche eine Kontaktierung per: $kontakt\n";
                        $admin_body .= "Ich wünsche mir regelmäßige Informationen zu Themen rund um Beauty und Plastische Chirurgie: " . ($verteiler ? 'Ja' : 'Keine Auswahl') . "\n";
                        $admin_body .= "\n\nMit freundlichen Grüßen,\nAugusta Beauty";

                        // Admin-E-Mail senden
                        $headers = array('Content-Type: text/plain; charset=UTF-8');
                        wp_mail($admin_email, $admin_subject, $admin_body, $headers);

                        // Nachricht für den Kunden
                        $customer_subject = 'Vielen Dank für Ihre Anfrage';
                        $customer_body = "Hallo $first_name,\n\n";
                        $customer_body .= "Vielen Dank für Ihre Anfrage! Wir haben folgende Informationen von Ihnen erhalten:\n\n";
                        $customer_body .= "Ich wünsche mir Informationen bzw. einen Beratungstermin zu einer Fettabsaugung an folgender Region: $fettabsaugung\n";
                        $customer_body .= "Ich interessiere mich für eine Eigenfetttransplantation: $eigenfetttransplantation\n";
                        $customer_body .= "Ich leide an einem Lipödem: $lipoedem\n";
                        $customer_body .= "Ich wünsche mir einen Termin: $termin_text\n";
                        $customer_body .= "Haben Sie relevante Nebenerkrankungen?: $nebenerkrankung\n";
                        $customer_body .= "Foto hochgeladen: $photo_upload\n";
                        $customer_body .= "Weitere Fragen oder Anmerkungen?: $weiteres\n";
                        $customer_body .= "Ich wünsche mir eine Kontaktierung bei Fragen zu dem Thema: " . ($kontaktierung ? 'Ja' : 'Keine Auswahl') . "\n";
                        $customer_body .= "Ich wünsche mir eine Kontaktierung mit Terminvorschlag zur Beratung vor Ort: " . ($beratung ? 'Ja' : 'Keine Auswahl') . "\n";
                        $customer_body .= "Ich wünsche eine Kontaktierung per: $kontakt\n";
                        $customer_body .= "Ich wünsche mir regelmäßige Informationen zu Themen rund um Beauty und Plastische Chirurgie: " . ($verteiler ? 'Ja' : 'Keine Auswahl') . "\n\n";
                        $customer_body .= "Wir werden uns zeitnah bei Ihnen melden.\n\n";
                        $customer_body .= "Mit freundlichen Grüßen,\nAugusta Beauty";

                        // E-Mail an den Kunden senden
                        wp_mail($email, $customer_subject, $customer_body, $headers);

                        // Bestätigungsnachricht anzeigen
                        echo '<div class="alert alert-success mt-3"><div class="thank-you-message">
                        <h3>Vielen Dank für Ihre Anfrage!</h3>
                        <p>Wir werden uns zeitnah bei Ihnen melden. Sollten Sie in der Zwischenzeit Fragen haben, kontaktieren Sie uns gerne unter unserer WhatsApp-Nummer 0171 9992280.</p>
                        </div></div>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<script>
function handleCaptcha(response) {
    if (response) {
        // hCaptcha-Überprüfung erfolgreich
        // Hier kannst du den Rest deiner Formularverarbeitung fortsetzen
        document.getElementById("form-id").submit(); // Beispiel: Formular automatisch absenden
    } else {
        // hCaptcha-Überprüfung fehlgeschlagen
        // Gib eine Fehlermeldung im gewünschten Element aus
        var errorElement = document.getElementById("captcha-error-message");
        errorElement.innerHTML = "hCaptcha-Überprüfung fehlgeschlagen. Bitte beweisen Sie, dass Sie kein Bot sind.";
    }
}
// Multi-Step Form JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const formSteps = document.querySelectorAll('.form-step');
    const nextSteps = document.querySelectorAll('.next-step');
    const prevSteps = document.querySelectorAll('.prev-step');
    const progressBar = document.getElementById('progress-bar');
    const form = document.getElementById('form-id');
    let currentStep = 0;

    // Zeigt nur den ersten Schritt beim Laden der Seite an
    formSteps[currentStep].classList.add('active');
    updateProgressBar();

    nextSteps.forEach(button => button.addEventListener('click', () => {
        formSteps[currentStep].classList.remove('active');
        currentStep++;
        formSteps[currentStep].classList.add('active');
        updateProgressBar();
    }));

    prevSteps.forEach(button => button.addEventListener('click', () => {
        formSteps[currentStep].classList.remove('active');
        currentStep--;
        formSteps[currentStep].classList.add('active');
        updateProgressBar();
    }));

    function updateProgressBar() {
        const progressPercentage = ((currentStep + 1) / formSteps.length) * 100;
        progressBar.style.width = progressPercentage + '%';
        progressBar.setAttribute('aria-valuenow', progressPercentage);
        progressBar.innerText = Math.round(progressPercentage) + '%';
    }
    
});
</script>

<style>
/* Versteckt alle Schritte standardmäßig */
.form-step {
    display: none;
}

/* Zeigt nur den aktiven Schritt an */
.form-step.active {
    display: block;
}

.progress-bar {
    background-color: #AE8A51
}
.alert {
    background-color: #AE8A51;
    border: 0;
}
.alert h3, .alert p {
    color: #FFFFFF;
}
</style>

