<?php

/**
 * En PHP, un "echo" est une instruction qui permet d'afficher du contenu à l'écran,
 * généralement du texte ou des variables. 
 */

// Exemple simple d'utilisation de l'instruction "echo"
echo "Bonjour tout le monde !";


// Exemple de l'instruction "echo" avec balise html
echo "<h1>Je suis un titre afficher avec un echo en php </h1>";


/**
 * Exemple de l'instruction "echo" avec balise html et varriable Php inbriquer.
 * L'injection de variable fonctionne UNIQUEMENT avec les "", est non avec les ''.
 */ 
$variable1 = 12;
echo "<p>Je suis un text afficher avec une varible php qui est $variable1</p>";


/**
 * Exemple de l'instruction "echo" avec balise html et varriable Php Concaténer.
 * le "." permet de concaténer le text
 */
$variable2 = 12;
echo "<p>Je suis un text afficher avec une varible php qui est " . $variable1 . "</p>";

?>