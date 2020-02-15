<?php
// TODO : récupérer le paramètre page dans l'url en GET
// vérifier si la clé "page" existe dans l'url et si elle a une valeur
if (!empty($_REQUEST['page'])) {
    // passer la chaîne de caractères en minuscules et construire le nom du template
    // Doc méthode strtolower() : https://www.php.net/manual/fr/function.strtolower.php
    $page = strtolower($_REQUEST['page']).'.php';

    // TODO : récupérer la liste des fichiers templates dans le dossier templates
    // Doc méthode scandir() : https://www.php.net/manual/fr/function.scandir.php
    $templates = scandir('templates', 1);

    // Autre méthode pour récupérer la liste des templates

    // on peut utiliser la méthode glob() de php au lieu de scandir()
    // Doc méthode glob() : https://www.php.net/manual/fr/function.glob.php

    // récuperer dans le dossier templates le chemin de tous les fichiers qui on l'extension .php
    //$templates = glob('templates/*.php');
    // DEBUG
    //print_r($templatesArray);

    //foreach ($templates as $key => $path) {

        // pour chaque chemin trouvé :
        // on crée un tableau qui va contenir chaque élément du chemin trouvé
        // Doc méthode explode() : https://www.php.net/manual/fr/function.explode
        //$pathArray = explode('/', $path);

        // on récupère uniquement le 2ème élément qui est le nom du fichier
        // on met à jour le tableau d'origin avec cette nouvelle valeur pour l'élément courant de la boucle
        // Doc méthode array_splice() : https://www.php.net/manual/fr/function.array-splice
        //$templates[$key] = array_splice($pathArray, 1, 1);
    //}
    // DEBUG
    // print_r($templates);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Router PHP</title>
    <!-- TODO: inclure lien vers CDN Bootstrap [optionnel] -->
</head>
<body>
<!-- TODO: contruire le menu qui va permettre de naviguer vers les autres pages
    les liens du menu devront pointer vers index.php et passer en paramètre GET le nom de la pages
    ex ?page=contact
    <a href="index.php?page=contact">Contact</a> -->
    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=about">About</a></li>
        </ul>
    </nav>

    <!-- TODO: inclure code de la navbar (bootswatch.com) -->
    <?php
        // TODO: vérifier si la variable $page existe
        if (isset($page)) {
            // TODO: vérifier si le fichier correspondant existe dans le dossier templates
            // Doc méthode in_array() : https://www.php.net/manual/fr/function.in-array.php
            if (in_array($page, $templates)) {
                // afficher le template correspondant
                require_once "templates/{$page}";
            } else {
                // afficher le template 404.php
                require_once 'templates/404.php';
            }
        } else {
            // sinon afficher le template home.php
            require_once 'templates/home.php';
        }
     ?>
</body>
</html>