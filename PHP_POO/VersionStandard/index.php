<?php

require('./Model/contact.class.php');


// Vérifie si le formulaire a été soumis
if (!empty($_POST)) {

    // Récupère les données soumises par le formulaire
    $name = $_POST["name"];
    $firstName = $_POST["firstName"];
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

    // Si toutes les données sont présentes et valides, enregistre les données dans la base de données et envoie un e-mail à l'utilisateur
    if ($checked) {
        // Crée une instance de la classe Contact
        $contact = new Contact();

        // Vérifie si le message est déjà enregistré dans la base de données
        if ($contact->CheckDuplicated($name, $firstName, $email, $message) == 1) {
            $formSend = "Ce message est déjà transmis";
        } else {
            // Insère les données dans la base de données
            $contact->InsertBDD($name, $firstName, $email, $message);

            // Envoie un e-mail à l'utilisateur
            $contact->SendMailPHPMailer($name, $firstName, $email, $message);

            // Supprime les données des variables
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
                                <a class="btn btn-success mx-2" href="http://localhost/PHP_POO">Retour</a>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- <?php echo "<pre>", print_r($GLOBALS), "</pre>"; ?> -->

</body>

</html>