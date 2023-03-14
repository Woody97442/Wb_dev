<?php

    include_once "Database.Class.php";

    class Contact{

        public function CheckInput($value)
        {
            $value = trim($value);
            $value = stripslashes($value);
            return $value;
        }

        public function CheckDuplicated($nom, $prenom, $mail, $message)
        {
            $Validnom = CheckInput($nom);
            $Validprenom = CheckInput($prenom);
            $Validmail = CheckInput($mail);
            $Validmessage = CheckInput($message);
            
            // Connection a la base de donnée
            $bdd = Database::connect();
            // Stock la requête dans une variable
            $sql = "SELECT * FROM contact WHERE nom =? AND prenom =? AND email =? AND message =?";
            // Prépare la requête
            $requete = $bdd->prepare($sql);
            // on injecte les valeurs "bindValue"
            $requete->bindValue(1, $Validnom, PDO::PARAM_STR);
            $requete->bindValue(2, $Validprenom, PDO::PARAM_STR);
            $requete->bindValue(3, $Validmail, PDO::PARAM_STR);
            $requete->bindValue(4, $Validmessage, PDO::PARAM_STR);

            // On execute la requête
            $requete->execute();

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

    }

?>