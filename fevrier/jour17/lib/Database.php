<?php

////////////////////////////////////////////////////
// example de classe de connexion à la BDD en POO //
////////////////////////////////////////////////////

// Bonne pratique : on stocke les paramètres de connexion dans des constantes dans un fichier et on les require pour les rendre accessibles à notre classe
require_once 'config.php';

// déclaration de la classe (rappel : par convention un nom de classe commence par une majuscule)
class Database
{
    // on déclare les propriétés privées (accessibles uniquement par les méthodes à l'intérieur de la classe) dans lesquelles on va stocker les paramètres de connexion
    private $host;
    private $dbname;
    private $username;
    private $userpassword;
    // la propriété $conn contiendra l'objet connexion
    private $conn;

    // la méthode __construct() est axécutée immédiatement lors de la création d'une instance de la classe Database
    public function __construct()
    {
        // ici on affecte à nos propriétés les valeurs qu'on récupère de notre fichier de config
        // le mot clé "this" se réfère à la classe dans laquelle on se trouve (le contexte)
        $this->host = HOST;
        $this->dbname = DB_NAME;
        $this->username = DB_USER;
        $this->userpassword = DB_PASSWORD;
        $this->conn = null;
    }

    // la méthode connect() va nous permettre d'établir la connexion à la BDD et retournera l'objet connexion
    public function connect()
    {
        // on définit un tableau d'options pour la classe PDO
        $options = [
            // affichage des erreurs
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // résultat des requêtes sous la forme de tableau associatif
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        // on teste la connexion
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->username, $this->userpassword, $options); // on passe le tableau d'options en paramètre au constructeur (__construct())
        } catch (PDOException $exception) {
            // on récupère l'erreur s'il y en a une et on affiche le message d'erreur
            throw new PDOException($exception->getMessage());
        }

        // si tout s'est bien passé, on retourne l'objet connexion
        return $this->conn;
    }

    // la méthode connect() permet de fermer la connexion à la BDD après avoir effectué les requêtes
    public function close()
    {
        $this->conn = null;
    }
}
