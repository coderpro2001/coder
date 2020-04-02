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
        echo '<pre>';
        print_r($data);
        echo '</pre>';
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
