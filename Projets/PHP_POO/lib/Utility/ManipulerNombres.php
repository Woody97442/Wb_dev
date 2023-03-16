<?php

/**
 * Regroupement des function de manipulation de nombres en Php
 */
 
 $nombre1 = 10;
 $nombre2 = 20;

 // Gestion de la priorité avec les ()

 // Addition "+"
 $resultat = $nombre1 + $nombre2;

 // Soustraction "-"
 $resultat = $nombre1 - $nombre2;

 // Multiplication "*"
 $resultat = $nombre1 * $nombre2;

 // Division "/"
 $resultat = $nombre1 / $nombre2;

 // Modulo renvoie le rest aprés la division entiére
 $resultat = $nombre2 % $nombre1;

 // Le modulo permet de connêtre si un nombre est le multiple d'un autre
 // Exemple: 9 est-il multiple de 3
 $isMultiple = 9 % 3; // si 0 9 est un multiple sinon il est pas multiple

 // Incrémenter (ajouter 1 ou autre) remplacer par - pour Décrémenter
 $nombre1 = $nombre1 + 1;
 $nombre1 += 1; // version simplifier
 $nombre1++; // version minifier incrément de 1 par 1 non modifiable executer a la fin
 ++$nombre1; // version minifier incrément de 1 par 1 non modifiable executer en premier


?>