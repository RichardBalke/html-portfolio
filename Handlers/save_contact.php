<?php

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
