<?php

// ici on récupère les données reçues de Javascript et on fait le traitement
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if (!empty($username) && !empty($email) && !empty($password)) {
    $user = [
        'name' => $username,
        'email' => $email,
    ];

    // la méthode json_encode() permet de transformer un tableau associatif en objet JSON pour qu'il soit utilisable par Javascript
    // dans notre tableau associatif on a 3 paires clés/valeurs
    // en javascript on recevra un objet avec 3 paires propriétés/valeurs
    echo json_encode([
        'status' => 'Success',
        'message' => 'Utilisateur inscrit en BDD',
        'user' => $user,
    ]);
} else {
    echo json_encode([
        'status' => 'Fail',
        'message' => 'Erreur inscription',
    ]);
}
