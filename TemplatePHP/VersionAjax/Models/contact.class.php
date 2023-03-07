<?php

    include_once "../lib/Classes/Database.Class.php";
    include_once "../lib/Functions/FunctionVarchar.php";

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
            $sql = "SELECT * FROM contact WHERE nom =? AND prenom =? AND mail =? AND message =?";
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
            $sql = "INSERT INTO contact(nom, prenom, mail, message) VALUES (?, ?, ?, ?)";
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