<!-- 
-- Formulaire en méthode Get en PHP permet de trensmettre 
-- les information du formulaire directement par l'url
-- ne pas utiliser avec des information senssible
-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormulaireGet</title>
</head>

<body>
    <?php

    /**
     * 
     * Recupére les valeur envoyer par le methode="get" du formulaire ou il est passer en action="".
     * Execute le traitement de ce fichier Php Attention les valeur sont trensformer en string
     * quand il sont passe dans l'url.
     * 
     */

    // Exemple avec FormulaireGet.php
    $nb1 = $_GET["nb1"];
    $nb2 = $_GET["nb2"];
    $somme = 0;

    // Fait la somme des deux nombres et renvoie la somme
    if (isset($nb1) || isset($nb2)) {
        $somme = $nb1 + $nb2;
    }

    ?>

    <!-- Template de formulaire en méthode GET -->
    <form method="get">
        <div>
            <label for="nombre1">Nombre 1 :</label>
            <input type="number" name="nb1" id="nombre1">
        </div>
        <div>
            <label for="nombre2">Nombre 2 :</label>
            <input type="number" name="nb2" id="nombre2">
        </div>
        <button type="submit">Calculer</button>
    </form>
    <span>Le total est de: <?=$somme?></span>

</body>

</html>