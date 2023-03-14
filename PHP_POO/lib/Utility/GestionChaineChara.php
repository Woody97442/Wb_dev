<?php

/**
 * Regroupement des function de gestion de chaine de charactére en Php
 */

 $chaine = "Une chaîne de caractères";

 // Afficher ou renvoie un caractère de la chaîne en partent de l'index 0
 echo $chaine[3];

 // Modifie un caractère de la chaîne en partent de l'index 0 en lui atribuent le nouveau
 $chaine[0] = "F";

 // Extraire une partie de la chaîne 0 départ du début -1 départ de la fin
 echo substr($chaine, 0, 4);

/**
 * str_replace senssible a la casse
 * str_ireplace non senssible a la case
 * Remplacer une partie de la chaîne par une autre
 */ 
 $chaine = str_replace('Une', 'Un', $chaine);
 $chaine = str_ireplace('une', 'Un', $chaine);

 // Verifie si la chaîne contien la chaîne demmander et renvoie true ou false
 str_contains($chaine, 'Une'); // true
 str_contains($chaine, 'bob'); // false

 // Verifie si la chaîne commence ou fini par la chaîne demmander et renvoie true ou false
 str_starts_with($chaine, 'Une'); // true
 str_ends_with($chaine, 'res'); // true

 // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
 trim($chaine);

 // Convertir des caractères spéciaux en entités HTML
 htmlspecialchars($chaine);

 // Supprimer les antislashs () d'une chaîne de caractères.
 stripslashes($chaine);

/**
 * Permet de vérifier si une variable est vide ou non. 
 * Elle retourne true si la variable est vide et false si elle contient une valeur.
 */
empty($chaine);


?>