<?php

    require_once 'php/model/glossaire.php';

    // DEBUG
    // print_r($glossaire);

    // on crée une fonction qui prend en paramètre un tableau
    function displayRandomTerm($array)
    {
        // on stocke la longueur du tableau dans une variable
        $length = count($array);

        // Utilisation de la fonction PHP mt_rand() pour générer un nombre aléatoire
        // https://www.php.net/manual/fr/function.mt-rand.php
        $index = mt_rand(0, $length - 1);

        // DEBUG
        // echo '<pre>';
        // print_r($array[$index]['title']);
        // echo '<br>';
        // print_r($array[$index]['description']);
        // echo '</pre>';

        // on sélection dans le tableau l'élément (un tableau associatif) qui a l'index qu'on vient de générer et on stocke la valeur de chaque clé dans une variable pour plus de facilité
        $title = $array[$index]['title'];
        $description = $array[$index]['description'];

        // on prépare le code HTML à afficher
        $html =
<<<OUTPUT
        <div class="container">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">{$title}</div>
                <div class="card-body">
                    <p class="card-text">{$description}</p>
                </div>
            </div>
        </div>
OUTPUT;

        echo $html;
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glossaire des termes OPQUAST</title>
    <!-- intégration du CDN de la librairie CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- code de la navbar récuréré sur bootswtach.com : https://bootswatch.com/ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">RANDOMIZE ME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Afficher un terme aléatoire</button>
        </form>
    </div>
    </nav>

    <?php
        // on invoque la fonction où on en a besoin
        displayRandomTerm($glossaire);
    ?>
</body>
</html>