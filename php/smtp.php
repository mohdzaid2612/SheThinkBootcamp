<?php
  
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if (isset($_POST['submit'])) {
      if (isset($_POST['email'])) {
          $mail = new PHPMailer(true);
          
          $sender = $_POST['email'];
          $senderName = $_POST['name'];
          $senderPhone = $_POST['phone_number'];

          $recipient = 'connect@shethink.in';
          $recipientName = 'Shethink';

          $usernameSmtp = 'AKIAUZ7RWAUPNGOQNG7T';
          $passwordSmtp = 'BL3JqXykgeThd0snVRHCnGIvbwMuvxXrXNtjVgiH7IlP';

          $host = 'email-smtp.ap-south-1.amazonaws.com';
          $port = 587;

          $subject = 'Course Enrollment Mail From ShethinkSchool';

          $bodyHtml = "<h1>Course Enrollment Mail</h1><p>$senderName is interested in ShethinkSchool Bootcamp Course.</p><p>Please contact to $senderName soon on either $sender or $senderPhone.</p><p>Thank you.</p>";

          $mail = new PHPMailer(true);

          try {
              $mail->SMTPDebug = SMTP::DEBUG_SERVER;
              $mail->isSMTP();
              $mail->setFrom($recipient, $recipientName);
              $mail->Username   = $usernameSmtp;
              $mail->Password   = $passwordSmtp;
              $mail->Host       = $host;
              $mail->Port       = $port;
              $mail->SMTPAuth   = true;
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

              $mail->addAddress($recipient);

              $mail->isHTML(true);
              $mail->Subject   = $subject;
              $mail->Body      = $bodyHtml;
              $mail->Send();

              $_SESSION['success'] = true;
              header("Location: ../index.php");
              exit();
          } catch (Exception $e) {
              echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL;
              exit();
          }
      }
    }