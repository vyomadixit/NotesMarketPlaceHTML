<?php session_start(); ?>
<?php ob_start();

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
 
//include PHPMailer classes to your PHP file for sending email
require_once __DIR__ . '/src/Exception.php';
require_once __DIR__ . '/src/PHPMailer.php';
require_once __DIR__ . '/src/SMTP.php';

// Create an object of the PHPMailer class. Passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);
 
try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;        // You can enable this for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;  // This is fixed port for gmail SMTP
 
    $config_email = 'vyomadixit@gmail.com';
    $mail->Username = 'vyomadixit@gmail.com'; // YOUR gmail email which will be used as sender and PHPMailer configuration 
    $mail->Password = 'vixit1999*';   //  YOUR gmail password for above account
 
     // Sender and recipient settings
    $mail->setFrom($config_email, 'Vyoma Dixit');  // This email address and name will be visible as sender of email
   
    $mail->addAddress($_SESSION['email'], $_SESSION['fname']);  // This email is where you want to send the email
    $mail->addReplyTo($config_email, 'Vyoma Dixit');   // If receiver replies to the email, it will be sent to this email address
    
    // Setting the email content
    $mail->IsHTML(true);  // You can set it to false if you want to send raw text in the body
    $mail->Subject = "Note Marketplace - Email Verification";       //subject line of email
    $mail->Body = 'Hello,/n
    Thank you for signing up with us. Please click on below link to verify your email address and to do login./n
    <Link for verifying email>/n
    Regards,/n
    Notes Marketplace';   //Email body
    $mail->AltBody = '';   //Alternate body of email
    
    $mail->send();
    echo "Email message sent.";
    header("Location: ../6.email_verification.php");
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";

}

?>