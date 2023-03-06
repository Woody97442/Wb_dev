<?php

    include_once "./lib/Functions/FunctionVarchar.php";
    
    /**
     * Envoie un email avec la function intégrer a php "mail()"
     *
     * @param string $mail
     * @param string $message
     * @return void
     */
    function SendMail($mail, $message)
    {
        $to = "woody97442@hotmail.fr";
        $subject = "Email envoyer avec une function mail en PHP";
        $fromMail = CheckInput($mail);
        $msg = CheckInput($message);
        $msg = wordwrap($msg, 70, "\r\n");
        $headers = [
            "From" => $fromMail,
            "Content-Type" => "text/html; charset=utf-8"
        ];
        mail($to, $subject, $msg, $headers);
    }
?>