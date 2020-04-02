<?php

class TodoController
{
    // propriétés de classe
    private $model;

    // constructeur prend en paramètre une instance de ma classe Model
    public function __construct($model)
    {
        $this->model = $model;
    }

    // méthodes de classe
    public function getAll()
    {
        $data = $this->model->getTodos();

        // je veux vérifier s'il y a au moins 1 élément dans mon tableau
        if (count($data) > 0) {
            // code à exécuter si la condition est vraie
            // je construis ma réponse sous la forme d'un tableau associatif
            $response = [
                'status' => 'success',
                'message' => 'Les données ont bien été récupérées',
                'payload' => $data,
            ];
        } else {
            // code à excécuter si la conditionest fausse
            $response = [
                'status' => 'error',
                'message' => 'Aucune données dans la table',
            ];
        }

        // je dois transformer le tableau associatif de la réponse en JSON qui va pouvoir être compris et exploité par JS
        echo json_encode($response);
    }

    // create

    // update

    // delete
}

// debug only
require_once '../Model.php';

// on crée une nouvelle instance de la classe Model
$model = new Model();

// on crée une nouvelle instance de la classe TodoController et on lui passe l'instance de la classe Model su'on vient de créer
$controller = new TodoController($model);

// on appelle la méthode getAll de la classe TodoController
$controller->getAll();
