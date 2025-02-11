<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require '/Users/Richard/Documents/School Avans/Jaar 1/Projecten/html-portfolio/src/PHPMailer.php';
require '/Users/Richard/Documents/School Avans/Jaar 1/Projecten/html-portfolio/src/SMTP.php';
require '/Users/Richard/Documents/School Avans/Jaar 1/Projecten/html-portfolio/src/Exception.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $bedrijf = $_POST['bedrijf'];
    $email = $_POST['email'];
    $telefoon = $_POST['telefoon'];
    $bericht = $_POST['bericht'];

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'richardbalke@gmail.com';  // Your Gmail address
        $mail->Password   = '';     // Your generated App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 587; 

        // Email settings
        $mail->setFrom($email, $naam);  // Use the user's email and name as the sender
        $mail->addAddress('richardbalke@gmail.com'); // Change to the recipient's email
        $mail->addReplyTo($email, $naam);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission';
        $mail->Body    = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> $naam</p>
            <p><strong>Company:</strong> $bedrijf</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $telefoon</p>
            <p><strong>Message:</strong></p>
            <p>$bericht</p>
        ";
        $mail->AltBody = "New Contact Form Submission\n\nName: $naam\nCompany: $bedrijf\nEmail: $email\nPhone: $telefoon\nMessage: $bericht";

        $mail->send();
        echo 'Email sent successfully!';
    } catch (Exception $e) {
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>
