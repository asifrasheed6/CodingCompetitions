<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $web_name = "CrashCode"; // Change this at Mail Config seperately
    $timeout = 10; // Maximum inactive time in minutes
    
    /*
            Please make sure to change the settings for PHP mailer
            Please note that if you are using gmail, make sure to turn on access to less secure apps which can be done here: https://www.google.com/settings/u/0/security/lesssecureapps
     */

    // MySQL Set Up:
    $username="asif";
    $password="password";
    $host="localhost";
    $database="Competition";
    
    $database = mysqli_connect($host, $username, $password, $database);
    
    if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
	}
    
    // PHP Mailer Set Up:
    function sentConfirmMail($to, $verify, $name){
        
        $web_url = "http://localhost/competition/"; // YOUR WEBSITE URL (MAKE SURE IT ENDS WITH /)
        $web_email = "email goes here";
        $email_secret = "password goes here";
        $web_name = "CrashCode"; // YOUR COMPETITION NAME GOES HERE
        
        // Load Composer's autoloader
        require 'vendor/autoload.php';

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $web_email;                     // SMTP username
            $mail->Password   = $email_secret;                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($web_email, $web_name);
            $mail->addAddress($to, $name);     // Add a recipient
            $mail->addReplyTo($web_email, $web_name);

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $web_name.' Registration';
            $mail->Body    = 'Dear '.$name.',</br>Thank you for registering to '.$web_name.'.</br>Please confirm you email at '.$web_url.'verify.php?ac='.$verify.' to activate your account.</br>Thank You,</br>'.$web_name.' Team!';
            $mail->AltBody = 'Dear '.$name.',</br>Thank you for registering to '.$web_name.'.</br>Please confirm you email at '.$web_url.'verify.php?ac='.$verify.'/ to activate your account.</br>Thank You,</br>'.$web_name.' Team!';

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            exit;
        }
    }
?>

