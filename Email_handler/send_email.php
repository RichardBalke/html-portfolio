<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $naam = htmlspecialchars($_POST['naam']);
    $bedrijf = htmlspecialchars($_POST['bedrijf']);
    $email = htmlspecialchars($_POST['email']);
    $telefoon = htmlspecialchars($_POST['telefoon']);
    $bericht = htmlspecialchars($_POST['bericht']);

    // Email details
    $to = "richardbalke@ctrlbalkedelete.nl";
    $subject = "Nieuw contactformulier bericht van $naam";
    $message = "
        Naam: $naam\n
        Bedrijf: $bedrijf\n
        E-mailadres: $email\n
        Telefoonnummer: $telefoon\n
        Bericht:\n$bericht
    ";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Bericht succesvol verzonden! <br>";
        echo "<button onclick=\"window.location.href='/'\">Terug naar Home</button>";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van het bericht.";
    }
} else {
    echo "Ongeldige aanvraag.";
}
?>