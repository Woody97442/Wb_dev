<?php
    require_once "./lib/Functions/FunctionVarchar.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    /**
     * Envoie un email avec PHPMailer
     *
     * @param string $fromEmail le mail de l'éxpediteur
     * @param string $message le message de de léxpediteur
     * @return void
     */
    function SendMailPHPMailer($name, $firstName, $fromEmail, $message)
    {
        $mailreceiver = "woody97442@hotmail.fr"; // Le mail de contact
        $subjectMail = "Mail envoyer par une function en PHP et PHPMailer";
        $mail = new PHPMailer(true);
        try {
            // Configuration
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;  indique que l'on veux des information de debug

            // On configure le SMTP
            $mail->isSMTP();
            $mail->Host = "localhost";
            $mail->Port = 1025;

            // Charset
            $mail->CharSet = "utf-8";

            // Destinataires
            $mail->addAddress(CheckInput($mailreceiver));

            // L'expéditeur
            $mail->setFrom(CheckInput($fromEmail));

            // Le contenu
            // si ont veut ajouter du html dans le messages
            // $mail->isHTML();
            $mail->Subject = CheckInput($subjectMail);
            $mail->Body = wordwrap(CheckInput($message), 70, "\r\n")  . "\r\nEpéditeur: " . CheckInput($name) . "-" . CheckInput($firstName);

            // On envoie
            $mail->send();
        } catch (Exception) {
            echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
        }
    }

?>