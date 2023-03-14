<?php

/**
 * La classe Database est utilisée pour établir une connexion à une base de données MySQL.
 */
 class Database {

    // Définition des propriétés statiques de la classe
    private static $dbName = 'form_contact';        // Nom de la base de données
    private static $dbHost = 'localhost:3306';      // Adresse du serveur MySQL
    private static $dbUsername = 'root';            // Nom d'utilisateur MySQL
    private static $dbUserPassword = '';            // Mot de passe MySQL
    private static $bdSQL = null;                   // Variable pour stocker la connexion à la base de données

    // Le constructeur est défini avec un appel à la fonction die() pour empêcher l'instanciation de la classe.
    public function __construct()
    {
        die();
    }

    // La méthode connect() est statique et est utilisée pour établir une connexion à la base de données.
    public static function connect()
    {
        // Si la connexion n'a pas encore été établie, on crée une instance de PDO pour se connecter à la base de données.
        if (Database::$bdSQL == null) {
            try {
                Database::$bdSQL = new PDO(
                    "mysql:host=" .
                        Database::$dbHost .
                        ";" .
                        "dbname=" .
                        Database::$dbName,
                    Database::$dbUsername,
                    Database::$dbUserPassword
                );
            }
            // Si la connexion échoue, on renvoie une erreur PDOException.
            catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        // On retourne la connexion PDO à la base de données.
        return Database::$bdSQL;
    }

    // La méthode disconnect() est statique et est utilisée pour fermer la connexion à la base de données.
    public static function disconnect()
    {
        // On met la variable de connexion à null pour fermer la connexion à la base de données.
        Database::$bdSQL = null;
    }
 }

?>