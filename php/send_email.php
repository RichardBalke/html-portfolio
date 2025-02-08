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