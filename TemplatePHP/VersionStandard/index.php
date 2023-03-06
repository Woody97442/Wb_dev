<?php

require('./Model/contact.class.php');


// Si le Formulaire a été soumis
if (!empty($_POST)) {

    // Variable du formulaire envoyer
    $name = $_POST["name"];
    $firstName = $_POST["firstName"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // 
    if (empty($name) || empty($firstName) || empty($email) || empty($message)) {
        $checked = false;
    } else {
        $checked = true;
    }
    // Message erreur a afficher dans le cas échéant suivant
    if (empty($name)) {
        $errorName = " Indiquez votre Nom";
    }
    if (empty($email)) {
        $errorEmail = " Indiquez une adresse Email valide";
    }
    if (empty($message)) {
        $errorMessage = " Indiquez votre Messages";
    }

    if ($checked) {
        // Créer le contact
        $contact = new Contact();
        // vérifie si le contact exite dans la BDD si ou affiche un message sinon envoie les donnée
        if ($contact->CheckDuplicated($name, $firstName, $email, $message) == 1) {

            $formSend = "Ce message est déjà transmis";
        } else {
            //insert les donnée en BDD
            $contact->InsertBDD($name, $firstName, $email, $message);

            // envoie de l'email
            $contact->SendMailPHPMailer($name, $firstName, $email, $message);

            // Suprime les donnée des variable
            $name = null;
            $firstName = null;
            $email = null;
            $message = null;

            $formSend = "Message envoyé";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact - PHP-POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="d-flex vh-100 align-items-center bg-secondary">

    <div class="container bg-primary p-4 shadow">
        <div class="row ">
            <div class="col-12 d-flex flex-column justify-content-center">

                <div class="col-12 d-flex justify-content-center">
                    <h1 class=" text-center text-white">Formulaire de Contact - PHP-POO</h1>
                </div>

                <div class="d-flex justify-content-center">

                    <form class="col-8" method="POST" action="<?php echo $_SERVER["SCRIPT_NAME"] ?>">

                        <?php if (isset($formSend)) : ?>
                            <div class="formSend"><?php echo $formSend; ?></div>
                        <?php endif; ?>

                        <div class="form-row text-white">

                            <div class="col-md-12 mb-3">
                                <label for="nom">Nom</label>
                                <span class="error"><?php if (isset($errorName)) echo $errorName; ?></span>
                                <input type="text" class="form-control" id="name" name="name" value="<?php if (isset($name)) echo $name; ?>">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" value="<?php if (isset($firstName)) echo $firstName; ?>">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>
                                <span class="error"><?php if (isset($errorEmail)) echo $errorEmail; ?></span>
                                <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($email)) echo $email; ?>">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="message">Message</label>
                                <span class="error"><?php if (isset($errorMessage)) echo $errorMessage; ?></span>
                                <textarea class="form-control" id="message" name="message"><?php if (isset($message)) echo $message; ?></textarea>
                            </div>

                        </div>

                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <button class="btn btn-danger" type="reset" id="annuler">Annuler</button>
                                <button class="btn btn-success" type="submit" id="submit">Envoyer</button>
                            </div>
                            <div>
                                <a class="btn btn-success mx-2" href="http://localhost/TemplatePHP">Retour</a>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- <?php
            echo "<pre>", print_r($GLOBALS), "</pre>";
            ?> -->

</body>

</html>