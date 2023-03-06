<?php
    require_once "./lib/Classes/Database.Class.php";

    $success = 0;
    $msg = "Une erreur est survenue (script.php)";


    if(!empty($_POST["name"]) AND !empty($_POST["firstName"]) AND !empty($_POST["email"]) AND !empty($_POST["message"])){

        $name = htmlspecialchars(strip_tags($_POST["name"]));
        $firstName = htmlspecialchars(strip_tags($_POST["firstName"]));
        $email = htmlspecialchars(strip_tags($_POST["email"]));
        $message = htmlspecialchars(strip_tags($_POST["message"]));


        if(filter_var($email, FILTER_VALIDATE_EMAIL)){


        }


    }

    $res = ["success" => $success, "msg" => $msg];
?>