<?php

// je récupère mon fichier contenant les datas
require_once 'data/posts.php';

// j'établis une connection avec ma bdd
// j'uitlise un bloc try / catch
try {
    $db = new PDO('mysql:host=localhost;dbname=db_project;charset=utf8', 'letitbe133', 'Tinjiful');
    // debug only
    echo 'Connected to db dude !';
} catch (PDOException $error) {
    throw new PDOException('Failed to connect to database', $error->getMessage());
}

// let's check if db is connected folks !
// done !

// les données que je vais récupérer dans posts.php sont au format JSON
// je dois les traiter et les transformer en tableau associatif pour pouvoir les exploiter en php
// pour ça PHP propose une méthode native (l'inverse de json_encode) qui est json_decode
// ressource vers json_decode : https://www.php.net/manual/fr/function.json-decode.php
// à noter true que je passe en second paramètre, c'est lui qui permet de transformer mon json en tableau associatif
$posts = json_decode($posts, true);

// let's check what we have here !
// little bit of formatting
// debug only
// echo '<pre>';
// print_r($posts);
// echo '</pre>';

/*
* modèle de requête insert multiple
INSERT INTO client (prenom, nom, ville, age)
 VALUES
 ('Rébecca', 'Armand', 'Saint-Didier-des-Bois', 24),
 ('Aimée', 'Hebert', 'Marigny-le-Châtel', 36),
 ('Marielle', 'Ribeiro', 'Maillères', 27),
 ('Hilaire', 'Savary', 'Conie-Molitard', 58);
*/

// je vais me créer un tableau vide dans lequel je vais stocker tous mes ensembles de valeurs
$valuesArray = [];

foreach ($posts as $post) {
    // ici je vais faire le traitement sur chaque sous-tableau de mon tableau des posts
    // j'extrais dans des variables les valeurs qui m'intéressent
    $title = $post['title'];
    $body = $post['body'];

    // je crée une variable qui va me permettre de formatter mes valeurs
    $value = "('{$title}','{$body}')";

    // on check le format
    // debug only
    // var_dump($value);

    // maintenant que j'ai mes values formatées correctement, je vais les push dans mon tableau $valuesArray
    // pour ça je vais utiliser une fonction native php qui est array_push : https://www.php.net/manual/fr/function.array-push.php
    array_push($valuesArray, $value);
}

// je vais check à quoi ressemble mon tableau
// debug only
// echo '<pre>';
// print_r($valuesArray);
// echo '</pre>';

// il faut que je trouve un moyen de transformer mon tableau $valuesArray en chaîne de caractères
// pour ça je vais utiliser une fonction native php qui est implode : https://www.php.net/manual/fr/function.implode.php
$values = implode(',', $valuesArray);

// maintenant je peux construire ma requête sql
$query = "INSERT INTO posts (title, body) VALUES {$values}";

// logiquement maintenant je peux insérer mes données dans la bdd
// $pdoStatement = $db->prepare($query);
// $pdoStatement->execute();

/////////////////////////
// méthode Ismail Aydin /
// avec boucle for() ////

for ($i = 0; $i < count($posts); ++$i) {
    // Debug
    // echo $deneme[$i]['title']
    // $querySQL = $db->query('SELECT title, body FROM infos', PDO::FETCH_ASSOC);
    $querySQL = 'INSERT INTO posts SET title=:a, body=:b';

    $pdoStatement = $db->prepare($querySQL);
    $pdoStatement->execute([':a' => $posts[$i]['title'], ':b' => $posts[$i]['body']]);
}
