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
   
    $mail->addAddress( $_SESSION['EmailID'], $_SESSION['FirstName']);  // This email is where you want to send the email
    $mail->addReplyTo($config_email, 'Vyoma Dixit');   // If receiver replies to the email, it will be sent to this email address
    
    // Setting the email content
    $mail->IsHTML(true);  // You can set it to false if you want to send raw text in the body
    $mail->Subject = "New Temporary Password has been created for you";       //subject line of email
    $mail->Body = 'Hello,/n
    We have generated a new password for you/n
    Password: abc123';   //Email body
    $mail->AltBody = '';   //Alternate body of email
    
    $mail->send();
    echo "Email message sent.";
    header("Location: ../2.forget-password.php");
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";

}

?>