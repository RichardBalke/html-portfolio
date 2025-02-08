<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Load PHPMailer
require '/Users/Richard/Documents/School Avans/Jaar 1/Projecten/html-portfolio/src/PHPMailer.php';
require '/Users/Richard/Documents/School Avans/Jaar 1/Projecten/html-portfolio/src/SMTP.php';
require '/Users/Richard/Documents/School Avans/Jaar 1/Projecten/html-portfolio/src/Exception.php';

$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'richardbalke@gmail.com';  // Your Gmail address
    $mail->Password   = 'lsfd kahz juho sxgk';     // Your generated App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587; 

    // Email settings
    $mail->setFrom('your_email@gmail.com', 'Your Name');
    $mail->addAddress('richardbalke@gmail.com'); // Change to the recipient's email
    $mail->addReplyTo('your_email@gmail.com', 'Your Name');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = '<h3>Hello, this is a test email sent using PHPMailer!</h3>';
    $mail->AltBody = 'Hello, this is a test email sent using PHPMailer!';

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}
?>




<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer
require '/Users/Richard/Documents/School Avans/Jaar 1/Projecten/html-portfolio/src/PHPMailer.php';
require '/Users/Richard/Documents/School Avans/Jaar 1/Projecten/html-portfolio/src/SMTP.php';
require '/Users/Richard/Documents/School Avans/Jaar 1/Projecten/html-portfolio/src/Exception.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'richardbalke@gmail.com';  // Your Gmail address
        $mail->Password   = 'lsfd kahz juho sxgk';     // Your generated App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Set up email addresses
        $mail->setFrom('richardbalke@gmail.com', 'Your Name');
        $mail->addAddress('richardbalke@gmail.com');  // Change to the recipient's email
        $mail->addReplyTo($_POST['email'], $_POST['naam']);  // Reply-to email (from form data)

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Nieuw contactformulier bericht';
        $mail->Body    = '<h3>Bericht van de website</h3>
                          <p><strong>Naam:</strong> ' . $_POST['naam'] . '</p>
                          <p><strong>Bedrijf:</strong> ' . $_POST['bedrijf'] . '</p>
                          <p><strong>E-mailadres:</strong> ' . $_POST['email'] . '</p>
                          <p><strong>Telefoonnummer:</strong> ' . $_POST['telefoon'] . '</p>
                          <p><strong>Bericht:</strong><br>' . nl2br($_POST['bericht']) . '</p>';
        $mail->AltBody = 'Bericht van de website: ' . $_POST['bericht'];  // For email clients that don't support HTML

        // Send the email
        if ($mail->send()) {
            header("Location: success_page.php"); // Redirect on success
            exit;
        } else {
            echo 'Er is een fout opgetreden bij het verzenden.';
        }
    } catch (Exception $e) {
        echo "Er is een fout opgetreden bij het verzenden: {$mail->ErrorInfo}";
    }
}
?>
