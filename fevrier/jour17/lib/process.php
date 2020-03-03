<?php

///////////////////////////////////////////////////////
// exemple de connexion en programmation procédurale //
///////////////////////////////////////////////////////

// pour se connecter à la BDD on utilise la classe PDO fournie par php
// https://www.php.net/manual/fr/book.pdo.php

// RAPPEL : une classe est un constructeur d'objets qui a des propriétés et des méthodes (fonctions)
// parmi ces méthodes on a une méthode particulière,  __construct() qui est exécutée immédiatement lors de la création d'une instance de la classe (lorsqu'on crée un nouvel objet)
// la méthode __construct() de la classe PDO prend plusieurs paramètres obligatoires :
// le DSN (Data Source Name) c'est à dire la source des données (string)
// le nom d'utilisateur de la BDD (string)
// le mot de passe de connexion à la BDD (string)

// pour se connecter à la BDD on utilise un bloc try ... catch qui va nous permettre de récupérer des infos en cas d'erreur de connexion
// les instructions du bloc try sont exécutées, et en cas d'erreur l'exécution du script s'arrête et on passe dans le bloc catch dans lequel on récupère un objet erreur
try {
    // on crée une nouvelle instance de la classe PDO et on passe les paramètres de connexion au constructeur (méthode __construct())
    // le DSN est composé de :
    // type de BDD : dans notre cas mysql
    // host (adresse du serveur de BDD) : dans notre cas localhost ou 127.0.0.1
    // dbname (nom de la base de données à laquelle on veut se connecter) : dans notre cas le nom de votre BDD
    // charset (encodage de caratères à utiliser) : dans notre cas utf8
    // à noter qu'on peut aussi passer un paramètre "port" si le serveur de BDD tourne sur un port spécifique
    $pdo = new PDO('mysql:host=localhost;dbname=NOM_BDD;charset=utf8', 'NOM_UTILISATEUR', 'MDP_UTILISATEUR');

    // DEBUG
    // on fait un echo d'un message pour vérifier que la connexion est ok
    echo 'Succesfully connected to database';

    // en cas de problème, on utilise la classe PDOException qu'on injecte dans le bloc catch
    // on stocke la nouvelle instance de PDOException dans une variable qui nous donne accès aux méthodes (fonctions) de cette classe
} catch (PDOException $error) {
    // on utilise la méthode getMessage() de la classe PDOException pour afficher le message d'erreur
    echo 'Failed connecting to database : '.$error->getMessage();
}

// si tout s'est bien passé, on est maintenant connecté à la BDD et on peut commencer à faire nos requêtes

////////////////////////////////////////////////////////////////
// exemple de connexion en Programmation Orientée Objet (POO) //
////////////////////////////////////////////////////////////////

// importation de la classe Database qui va permettre la connexion à la BDD

require_once 'lib/Database.php';

// on crée une nouvelle instance de la classe Database qu'on stocke dans une variable
$pdo = new Database();

// on utilise la méthode connect() de la classe Database pour établir la connexion
// cette méthode renvoie un objet connexion qu'on stocke dans une variable qui nous permettra de créer des requêtes
$dbh = $pdo->connect();

// si tout s'est bien passé, on est connecté à la BDD
