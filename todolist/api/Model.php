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

        // on pourrait très bien passer la requête directement en paramètre à prepare()
        // $PdoStatement = $pdo->prepare('SELECT * FROM todo');

        $PdoStatement = $pdo->prepare($query);
        $PdoStatement->execute();

        // debug : affichage du résultat
        // print_r($PdoStatement->fetchAll());

        // je return le résultat de ma requête

        return $PdoStatement->fetchAll();
    }

    // ici $todo sera un tableau associatif avec comme clés title, description
    /* $todo = [
        "title" => "titre de la tâche",
        "description" => "description"
    ];
    */
    public function createTodo($todo)
    {
        // TODO établir une connexion à la db
        $pdo = $this->getConnection();

        // TODO écrire la requête en insertion
        $query = 'INSERT INTO todo (title, description) VALUES (:title, :description)';

        // TODO préparer la requête
        $PdoStatement = $pdo->prepare($query);

        // TODO exécuter le requête en passant les bonnes valeurs
        // TODO retourner le résultat de la requête (dans notre cas true ou false)
        return $PdoStatement->execute($todo);
    }

    public function deleteTodo($todo)
    {
        // TODO établir une connexion à la db
        $pdo = $this->getConnection();

        // TODO écrire la requête en delete
        $query = 'DELETE FROM todo WHERE id = :id';

        // TODO préparer la requête
        $PdoStatement = $pdo->prepare($query);

        // TODO exécuter la requête en passant la bonne valeur
        // TODO retourner le résultat de la requête (dans notre cas true ou false)
        $values = [
            'id' => $todo['id'],
        ];

        return $PdoStatement->execute($values);
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

// $model = new Model();

// $response = $model->deleteTodo([
//     'id' => '91',
// ]);

// var_dump($response);

//$model->getTodos();
