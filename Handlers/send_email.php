<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $naam = htmlspecialchars($_POST['naam']);
    $bedrijf = htmlspecialchars($_POST['bedrijf']);
    $email = htmlspecialchars($_POST['email']);
    $telefoon = htmlspecialchars($_POST['telefoon']);
    $bericht = htmlspecialchars($_POST['bericht']);

    // Email details
    $to = "deb2002311@ctrlbalkedelete.nl";
    $subject = "Nieuw contactformulier bericht van $naam";
    $message = "
        Naam: $naam\n
        Bedrijf: $bedrijf\n
        E-mailadres: $email\n
        Telefoonnummer: $telefoon\n
        Bericht:\n$bericht
    ";
    $headers = "From: deb2002311@ctrlbalkedelete.nl\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Bericht succesvol verzonden! <br>";
        echo "<button onclick=\"window.location.href='/'\">Terug naar Home</button>";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van het bericht.";
    }


    $host = 'localhost';
    $db = 'deb2002311_CtrlBalkeDelete';
    $user = 'deb2002311_root';
    $password = 'BSQ8wf4ZrXqFV6CRExJD';
    $charset = 'latin1_swedish_ci';

    $conn = new mysqli($host, $user, $password, $db);

    if ($conn->connect_error) {
        die("Connectie mislukt: " . $conn->connect_error);
    }

    $naam     = htmlspecialchars($_POST['naam'] ?? '');
    $bedrijf  = htmlspecialchars($_POST['bedrijf'] ?? '');
    $email    = htmlspecialchars($_POST['email'] ?? '');
    $telefoon = htmlspecialchars($_POST['telefoon'] ?? '');
    $date = date('Y-m-d H:i:s');


    $stmt = $conn->prepare("INSERT INTO ContactGegevens (Naam, Bedrijfsnaam, E-mailadres, Telefoonnummer, Datum) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssid", $naam, $bedrijf, $email, $telefoon, $date);


    if ($stmt->execute()) {
        echo "Contactgegevens succesvol opgeslagen!";
    } else {
        echo "Fout bij opslaan: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Ongeldige aanvraag.";
}
