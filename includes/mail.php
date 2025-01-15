<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use SendGrid\Mail\Mail;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

date_default_timezone_set('Africa/Nairobi');

function noReplyMail($recepient, $subject, $message)
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $_ENV['MAIL_HOST'];                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $_ENV['NOREPLY_USER'];                     //SMTP username
        $mail->Password   = $_ENV['EMAIL_PASS'];                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($_ENV['NOREPLY_USER'], 'InLaw noreply');
        $mail->addAddress($recepient, 'user');     //Add a recipient


        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = $message;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function contactFormMail($name, $email, $phone, $subject, $message)
{
    $message = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>InLaw Password Reset</title>
    </head>
    <body style="font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0;">
        <div style="margin: 0 auto; max-width: 580px; padding: 10px;">
            <div style="background-color: #ffffff; border: 1px solid #dee2e6; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; width: 100%; box-sizing: border-box;">
                <div style="text-align: start;">
                    <h1 style="font-size: 24px; text-align: center; margin-bottom: 10px;">Contact Form Submission</h1>
                    <p style="margin-bottom: 15px;">
                        New Contact Form Submission
                    </p>
                    <p> style="margin-bottom: 15px;">
                        <strong>Name:</strong> ' . $name . '
                    </p>
                    <p style="margin-bottom: 15px;">
                        <strong>Email:</strong> ' . $email . '
                    </p>
                    <p style="margin-bottom: 15px;">
                        <strong>Phone:</strong> ' . $phone . '
                    </p>
                     <p style="margin-bottom: 15px;">
                        <strong>Subject:</strong> ' . $subject . '
                    </p>
                    <p style="margin-bottom: 15px;">
                        <strong>Message:</strong> ' . $message . '
                    </p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <div style="margin-bottom: 5px;">
                    <p style="color: #6c757d; font-size: 12px;">Inlaw-Legal</p>
                </div>
                <div>
                    <p style="color: #6c757d; font-size: 12px;">
                        Powered by
                        <a href="https://inlaw-legal.tech" style="color: #6c757d; text-decoration: none;">InLaw</a>.
                    </p>
                </div>
            </div>
        </div>
    </body>
    </html>
    ';
    return $message;
}
