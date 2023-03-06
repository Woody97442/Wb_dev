<?php

    /**
     *  Regroupe les function utile pour la validation des valeur dans un formulaire 
     */

    /**
     * Efectue des test sur la chaîne de charactére donner et retourne le resultat modifier.
     * Supprime les espaces, les entislash et Converti les caractères spéciaux en entités HTML
     *
     * @param string $value Valeur a tester
     * @return string
     */
    function CheckInput ($value){

        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }




?>