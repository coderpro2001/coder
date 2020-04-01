<?php

// on a besoin d'une conncetion à la bdd
require_once 'Database.php';

// on a besoin d'une classe qui va gérer les interactions avec la bdd
//CRUD

class Model
{
    public function getTodos()
    {
        $pdo = $this->getConnection();

        $query = 'SELECT * FROM todo'; // ceci est juste une chaîne de caractères

        $PdoStatement = $pdo->prepare($query);

        $PdoStatement->execute();

        // debug : affichage du résultat
        print_r($PdoStatement->fetchAll());
    }

    // on crée une méthode qui va nous permettre de créer une nouvelle instance de la classe Database et qui va retourner un objet PDO
    // cette méthode sera privée, elle ne sera accesiible que depuis cette classe
    private function getConnection()
    {
        // on va créer une nouvelle instance de Database
        $db = new Database();
        // ici je retourne un objet PDO que je pourrai utiliser pour mes requêtes
        return $db->connect();
    }
}
