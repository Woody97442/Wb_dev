<?php

/**
 * Les inclusion de function ou fichier PHP dans un autre est l'utilisation de function d'autre fichier Php
 */

/**
 * La fonction include permet d'inclure un fichier dans un autre fichier PHP.
 * Si le fichier n'est pas trouver affiche un warning sauf si il y a @include.
 * Peut étre inclu plusieur fois
 */
 include 'nom-du-fichier.php';

/**
 * La fonction include_once permet d'inclure une seul fois un fichier dans un autre fichier PHP.
 * Si le fichier n'est pas trouver affiche un warning.
 */
 include 'nom-du-fichier.php';


 /**
  * La function require_once inclu une fois est si il n'est pas trouver stop le code
  */
 require 'nom-du-fichier.php';
 require_once 'nom-du-fichier.php';


?>