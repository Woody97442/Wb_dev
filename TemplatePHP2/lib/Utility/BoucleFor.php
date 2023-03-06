<?php

/**
 * Boucle For est Foreach execute un nombre définit
 * de fois le code interne a la boucle
 */

 // t'en que la comparéson n'est pas atteint boucle (for)
 for ($i=0; $i < 10; $i++) { 
    # code...
 }

 // Parcourire un tableau
 $monTableau = [
    "ref1" => [
        "val1" => 10,
        "val2" => 12.5,
        "val3" => "Math",
        "val4" => true
    ],
    "ref2" => [
        "val1" => 20,
        "val2" => 31.5,
        "val3" => "Duck",
        "val4" => false
    ]
];

 // Connêtre la taille de mon tableau
 sizeof($monTableau);

 // Pour chaque key de mon tableau boucle (foreach)
 foreach ($monTableau as $key => $tableau) {
    # code...
 }

?>