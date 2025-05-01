<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "richardbalke@gmail.com"; // Replace with your Gmail address
    $subject = "Nieuw contactformulierbericht van je website";

    // Sanitize and collect form data
    $naam = htmlspecialchars($_POST["naam"]);
    $bedrijf = htmlspecialchars($_POST["bedrijf"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefoon = htmlspecialchars($_POST["telefoon"]);
    $bericht = htmlspecialchars($_POST["bericht"]);

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Email body
    $body = "Je hebt een nieuw bericht ontvangen via je website:\n\n";
    $body .= "Naam: $naam\n";
    $body .= "Bedrijf: $bedrijf\n";
    $body .= "E-mailadres: $email\n";
    $body .= "Telefoonnummer: $telefoon\n\n";
    $body .= "Bericht:\n$bericht\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Bericht succesvol verzonden!";
    } else {
        echo "Er is iets misgegaan. Probeer het opnieuw.";
    }
}
?>
