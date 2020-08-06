<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
 $mail->Host = "cristianmeza.com";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "informatica@XX.COM";
 $mail->Password = "XXX";
 $mail->SetFrom("informatica@repuestosalsacia.com");
 $mail->Subject = "Asunto del mensaje";
 $mail->Body = "Ingrese el texto del correo electrónico aquí";
 $mail->AddAddress("cmeza@alsaciarepuestos.cl");
 $mail->AddAddress("cr.mezaleopold@gmail.com");
 $mail->setLanguage('es');
 if(!$mail->Send()) {
 echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
 echo "Mensaje enviado correctamente";
 }
 
 