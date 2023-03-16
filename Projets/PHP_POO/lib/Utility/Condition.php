<?php

/**
 * Les condition en PHP "if" permet de comparer des valeur et executer du code
 * en fonction du resultat de la condition si c'est vraix ou faux
 */

 // structure d'une condition simple
 $reponse = true;
 if($reponse == true){
    //... code si vraix
 }else{
    //... code si faux
 }
 //varient avec condition true false
 if ($reponse) {  // "!" devent unvers la condition revient a fair $reponse == false
    # code... si vraix
 } else {
    # code... si faux
 }
 // Opérateur de comparéson
 
 // Egaliter "=="
 // Strictement plus petit "<"
 // Plus petit ou egal "<="
 // Strictement plus grand ">"
 // Plus grand ou egal ">="
 // Diférent de "!="
 // Strictement diférent de "!=="

 // Opérateur combiner
 $a = 10;
 $b = 15;
 $a <=> $b;
 // < si a < b renvoie -1
 // = si a = b renvoie 0
 // > si a > b renvoie 1


 // Le switch
 $animal = "chat";
 switch ($animal) { // condition de validation
    case 'chat':
        # code...
        break;
    case 'chient':
        # code...
        break;
    case 'poisson':
        # code...
        break;
    default:
        # code...
        break;
 }

 // Opérateur de condition Null "??"
?>