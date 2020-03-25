<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon theme WordPress</title>

    <!-- ICI ON INSERE LE CODE CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">

    <!-- WORDPRESS A BESOIN DE POUVOIR AJOUTER DU CODE CSS ICI -->
    <?php wp_head() ?>

</head>
<body>
    <header>
        <h1>MON TITRE1</h1>
        <nav>
            <!-- ON UTILISE LA CLE DU TABLEAU ASSOCIATIF POUR IDENTIFIER LE MENU A AFFICHER -->
            <?php wp_nav_menu(["theme_location" => "primary"]) ?>
        </nav>
    </header>
    <main>
