<?php

require_once 'Lang/translator.php';

$translator = init_translator();

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fittingly/Contact</title>
    <link rel="icon" href="/Images/icons/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <header><?php include 'header.php'; ?></header>
    <main>
        <div class="background-container">
            <h2 id="h2-contact"> <?= $translator->get('contactpagina_h2_contact') ?> </h2>
            <p id="para-contact"> <?= $translator->get('contactpagina_p_contact') ?> </p>
            </dv>

            <div class="form-container">
                <div class="contact-info">
                    <h3 id="h3-contact"> <?= $translator->get('contactpagina_h2_contact') ?> </h3>
                    <p><img id="usp1-contact" src="./Images/backgroundImages/usp_Fittingly_dark.png" alt="usp">
                        <?= $translator->get('contactpagina_p_contactinfo_1') ?> </p>
                    <p><img id="usp2-contact" src="./Images/backgroundImages/usp_Fittingly_dark.png" alt="usp">
                        <?= $translator->get('contactpagina_p_contactinfo_2') ?> </p>
                    <p><img id="usp3-contact" src="./Images/backgroundImages/usp_Fittingly_dark.png" alt="usp">
                        <?= $translator->get('contactpagina_p_contactinfo_3') ?> </p>
                </div>
                <form id="contact-form" method="post" action="../project_root/Controllers/contact_controller.php">
                    <div class="form-content">
                        <div class="input-fields">
                            <label for="naam"> <?= $translator->get('contactpagina_formulier_naam') ?>:</label>
                            <input type="text" id="naam" name="naam"
                                placeholder="<?= $translator->get('contactpagina_formulier_naam_placeholder') ?> ">
                            <small class="error"></small>

                            <label for="bedrijf"> <?= $translator->get('contactpagina_formulier_bedrijf') ?>:</label>
                            <input type="text" id="bedrijf" name="bedrijf"
                                placeholder="<?= $translator->get('contactpagina_formulier_bedrijf_placeholder') ?> ">
                            <small class="error"></small>

                            <label for="email"> <?= $translator->get('contactpagina_formulier_email') ?>:</label>
                            <input type="email" id="email" name="email"
                                placeholder="<?= $translator->get('contactpagina_formulier_email_placeholder') ?>">
                            <small class="error"></small>

                            <label for="tel"> <?= $translator->get('contactpagina_formulier_tel') ?>:</label>
                            <input type="tel" id="tel" name="tel"
                                placeholder="<?= $translator->get('contactpagina_formulier_tel_placeholder') ?>" ">
                            <small class=" error"></small>

                            <div class="input-bericht">
                                <label for="bericht"> <?= $translator->get('contactpagina_formulier_bericht') ?></label>
                                <textarea id="bericht" name="bericht"
                                    placeholder=" <?= $translator->get('contactpagina_formulier_bericht_placeholder') ?>"
                                    rows="12"></textarea>
                                <small class="error"></small>
                            </div>
                            <div class="button-wrapper">
                                <button class="button-container" type="submit" value="Verzenden">
                                    <?= $translator->get('contactpagina_formulier_button') ?> </button>
                            </div>
                            <p id="send"></p>
                        </div>
                    </div>
                </form>
            </div>
    </main>

    <footer><?php include 'footer.php'; ?></footer>
    <script src="js/scripts.js"></script>
    <!-- <script src="js/contact.js"></script> -->
</body>

</html>

<?php
// laat het result van de submit zien
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = $_POST['naam'];
    $bedrijf = $_POST['bedrijf'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $bericht = $_POST['bericht'];


}

//Valideer de contactgegeven voordat ze de database ingaan
