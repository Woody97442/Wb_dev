<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    include_once "../lib/Classes/Database.Class.php";
    include_once "../lib/Functions/FunctionVarchar.php";
    require_once "../lib/PhpMailer/Exception.php";
    require_once "../lib/PhpMailer/PHPMailer.php";
    require_once "../lib/PhpMailer/SMTP.php";

    

    class Contact{

        /**
         * Fonction qui vérifie si les donnée exite déjas dans la BDD. 
         * Si oui retourne 1 Si non retourn 0.
         * 
         *
         * @param string $nom
         * @param string $prenom
         * @param string $mail
         * @param string $message
         * @return int
         */
        public function CheckDuplicated($nom, $prenom, $mail, $message)
        {
            $nom = CheckInput($nom);
            $prenom = CheckInput($prenom);
            $mail = CheckInput($mail);
            $message = CheckInput($message);
            
            // Connection a la base de donnée
            $bdd = Database::connect();
            // Stock la requête dans une variable
            $sql = "SELECT * FROM contact WHERE nom =? AND prenom =? AND email =? AND message =?";
            // Prépare la requête
            $requete = $bdd->prepare($sql);
            // on injecte les valeurs "bindValue"
            $requete->bindValue(1, $nom, PDO::PARAM_STR);
            $requete->bindValue(2, $prenom, PDO::PARAM_STR);
            $requete->bindValue(3, $mail, PDO::PARAM_STR);
            $requete->bindValue(4, $message, PDO::PARAM_STR);

            // On execute la requête
            $requete->execute();
            // On ce déconnect de la BDD
            Database::disconnect();

            // On retourne la valeur
            return $requete->rowCount();
        }

        /**
         * Permet l'insertion des valeur donner dans la table contact de la BDD.
         *
         * @param string $nom
         * @param string $prenom
         * @param string $mail
         * @param string $message
         * @return void
         */
        public function InsertBDD($nom, $prenom, $mail, $message)
        {
            $validNom = CheckInput($nom);
            $validPrenom = CheckInput($prenom);
            $validMail = CheckInput($mail);
            $validMessage = CheckInput($message);

            // Connection a la base de donnée
            $bdd = Database::connect();
            // Stock la requête dans une variable
            $sql = "INSERT INTO contact(nom, prenom, email, message) VALUES (?, ?, ?, ?)";
            // Prépare la requête
            $requete = $bdd->prepare($sql);
            // on injecte les valeurs "bindValue"
            $requete->bindValue(1, $validNom, PDO::PARAM_STR);
            $requete->bindValue(2, $validPrenom, PDO::PARAM_STR);
            $requete->bindValue(3, $validMail, PDO::PARAM_STR);
            $requete->bindValue(4, $validMessage, PDO::PARAM_STR);

            // On execute la requête
            $requete->execute();
            // On ce déconnect de la BDD
            Database::disconnect();

        }

        /**
         * Envoie un email avec la function intégrer a php "mail()"
         *
         * @param string $mail
         * @param string $message
         * @return void
         */
        public function SendMail($mail, $message)
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



        /**
         * Envoie un email avec PHPMailer
         *
         * @param string $fromEmail le mail de l'éxpediteur
         * @param string $message le message de de léxpediteur
         * @return void
         */
        public function SendMailPHPMailer($name, $firstName, $fromEmail, $message)
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

    }

?>