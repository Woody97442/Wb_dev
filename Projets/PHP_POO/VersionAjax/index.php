<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact - Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="d-flex vh-100 align-items-center bg-secondary">

    <div class="container bg-primary p-4 shadow">
        <div class="row ">
            <div class="col-12 d-flex flex-column justify-content-center">

                <div class="col-12 d-flex justify-content-center">
                    <h1 class=" text-center text-white">Formulaire de Contact - Ajax</h1>
                </div>

                <div class="d-flex justify-content-center">


                    <form class="col-8" id="formContact" method="POST">
                        <div class="formSend" id="sendMessage"></div>
                        <div class="form-row text-white">

                            <div class="col-md-12 mb-3">
                                <label for="nom">Nom</label>
                                <span class="error" id="errorName"></span>
                                <input type="text" class="form-control" name="name" value="">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" name="firstName" value="">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>
                                <span class="error" id="errorEmail"></span>
                                <input type="email" class="form-control" name="email" value="">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="message">Message</label>
                                <span class="error" id="errorMessage"></span>
                                <textarea class="form-control" name="message"></textarea>
                            </div>

                        </div>

                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <button class="btn btn-danger" type="reset" id="cancelForm">Annuler</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/formContact.js"></script>
</body>

</html>