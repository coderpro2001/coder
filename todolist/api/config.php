<?php

// partie DSN : driver, host, nom bdd, encodage caractères
const DSN = 'mysql:host=localhost;dbname=todolist;charset=utf8';
// nom user mysql
const USERNAME = 'letitbe133';
// mdp user mysql
const PWD = 'Tinjiful';

// options PDO
const OPTIONS = [
    // on définit l'option d'affichage des résultats PDO sous la forme de tableau associatif
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // on spécifie qu'on veut récupérer les exceptions éventuelles
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];
