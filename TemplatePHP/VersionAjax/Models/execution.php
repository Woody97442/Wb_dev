<?php

require('contact.class.php');


// Récupère les données soumises par le formulaire
$name = $_POST["name"];
$firstName = $_POST["prenom"];
$email = $_POST["email"];
$message = $_POST["message"];

// Vérifie si toutes les données ont été fournies et si l'e-mail est valide
if (empty($name) || empty($firstName) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
    $checked = false;
} else {
    $checked = true;
}

// Si une ou plusieurs données sont manquantes, définit la variable $error* correspondante pour afficher un message d'erreur
if (empty($name)) {
    $errorName = "Indiquez votre nom";
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorEmail = "Indiquez une adresse e-mail valide";
}
if (empty($message)) {
    $errorMessage = "Indiquez votre message";
}

if($checked)
{
    // On peut créer l'objet Contact
    $contact = new Contact();

    if($contact->CheckDuplicated($name,$firstName,$email,$message) == 1){
        
        $reponse = "Ce message est déjà transmis";
        echo json_encode(['reponse' => $reponse]);

    }else{
        
        // Insère les données dans la base de données
        $contact->InsertBDD($name, $firstName, $email, $message);

        $reponse = "Good";

        // Supprime les données des variables
        $name = null;
        $firstName = null;
        $email = null;
        $message = null;

        // Convertit le tableau associatif en JSON
        echo json_encode(['reponse' => $reponse]);
    }

}

?>