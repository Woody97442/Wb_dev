<?php

/**
 * Utiliser les tableaux en PHP
 */

 // Déclarer un tableau
 $tableau = ["Bonjour", 15, true, 22.15];


 // Ajouter des valeur au tableaux
 // A la fin (push) plusieur valeur
 array_push($tableau, $val1, $val2);

 // écriture altérnative pour ajouter seulement une valeur
 $tableau[] = $val1;


 // Suprimer des valeur au tableaux
 // Au fin (pop) plusieur valeur
 array_pop($tableau);
 $valSupr = array_pop($tableau); // Recupérer la valeur de fin suprimer dans une variable


 // Au début (shift) plusieur valeur
 array_shift($tableau);
 $valSupr = array_shift($tableau); // Recupérer la valeur de début suprimer dans une variable
 

 // Diviser le tableau en plusieurs parties de exemple 2 valeurs
 $newTableau = array_chunk($tableau, 2);

 
 // Mélanger un tableau
 shuffle($tableau);


 /**
  * Tableau associatif par key => valeur
  */
 $tableuaKey = [
    "nom" => "Pierre",
    "prenom" => "Paul",
    "age" => 25
  ];

 // recupération par clée
 $tableuaKey["nom"];


 /**
 * Tableau multi dimensionelle
 */
 $tableuaMulti = [
    0 => [
        "nom" => "Pierre",
        "prenom" => "Paul",
        "age" => 25
    ],
    2 => [
        "nom" => "Jack",
        "prenom" => "Jean",
        "age" => 32
    ]
 ];

 // recupération par clée
 $tableuaMulti[1]["nom"];



?>