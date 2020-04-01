# Projet Todolist Ajax/PHP

## Ze Pitch

Créer une application Todolist qui permet :

- d'afficher les tâches créées
- créer une tâche
- modifier une tâche
- supprimer une tâche

Les opérations sur les tâches se feront en utilisant la technologie AJAX, sans rechargement de la page

La partie PHP sera codée en POO (Programmation Orientée Objet)

On s'approchera de la structure MVC (Model View Controller)

## Structure du projet

```
project_folder
│   index.php
│
└───api
│   │   config.php
│   │   Database.php
│   │   Model.php
│   │
│   └───Controller
│       │   MainController.php
│       │   TodoController.php
│
└───assets
    |
    └───css
    │       style.css
    └───js
            main.js
```

## Le principe de fonctionnement

Les requêtes `GET` ou `POST` envoyées en AJAX seront traitées par le fichier `MainController` qui agira comme un aiguillage ou un routeur et appellera la méthode correspondante de la classe `TodoController`.

La tâche du `TodoController` sera d'interroger la classe `Model` et de renvoyer la réponse au format JSON au script JS.

Le rôle de la classe `Database` est d'établir une connexion à la BDD et de retourner un objet PDO

## Les étapes

1.  création de la bdd et de la table des tâches

    1.  BDD : `todolist`
    2.  Table : `todos`

2.  index.php

    1.  form (POST)
        1. input:text `title`
        2. input:text `description`
        3. button
    2.  div (affichage dela liste des tâches)

3.  config.php

    1.  définition des constantes de connexion

4.  Database.php

    1.  propriétés

        1.  `public $conn`
        2.  `private $dsn`
        3.  `private $username`
        4.  `private $pwd`
        5.  `private $options`

    2.  méthodes
        1.  `__construct`
        2.  `connect`

5.  Model.php

    1.  méthodes
        1.  `getConnection`
        2.  `getTodos`
        3.  `createTodo`
        4.  `updateTodo`
        5.  `deleteTodo`

6.  TodoController.php
    1.  méthodes
        1.  `__construct`
        2.  `getAll`
        3.  `create`
        4.  `update`
        5.  `delete`
7.  MainController.php
    1.  intercepter les requêtes et appeler les méthodes correspondantes du `TodoController`
