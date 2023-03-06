<?php

    require_once "./lib/Classes/Database.Class.php";
    require_once "./lib/Functions/FunctionVarchar.php";
    
    // Template d'exemple d'insertion en BDD
    function InsertBDD($nom, $prenom, $mail, $message) // Mofifier les valeur en paramétre
    {
        // Check les donnée ressue est le converti pour l'envoie
        $validNom = CheckInput($nom);
        $validPrenom = CheckInput($prenom);
        $validMail = CheckInput($mail);
        $validMessage = CheckInput($message);

        // Connection a la base de donnée
        $bdd = Database::connect();
        // Stock la requête dans une variable
        $sql = "INSERT INTO contact(nom, prenom, mail, message) VALUES (?, ?, ?, ?)"; // Mofifier la table est colone
        // Prépare la requête
        $requete = $bdd->prepare($sql);
        // on injecte les valeurs "bindValue"
        $requete->bindValue(1, $validNom, PDO::PARAM_STR);
        $requete->bindValue(2, $validPrenom, PDO::PARAM_STR);       // Mofifier les Bind des paramétre
        $requete->bindValue(3, $validMail, PDO::PARAM_STR);
        $requete->bindValue(4, $validMessage, PDO::PARAM_STR);

        // On execute la requête
        $requete->execute();
        // On ce déconnect de la BDD
        Database::disconnect();

    }
?>