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
            <!-- ON UTILISE LA CLE DU TABLEAU ASSOCIATIF POUR IDENTIFIER LE FORMULAIRE A AFFICHER -->
            <?php wp_nav_menu(["theme_location" => "primary"]) ?>
        </nav>
    </header>
    <main>
        <section>
        <?php

if (have_posts()) :         // FAIT LA REQUETE SELECT SUR LA BASE DE DONNEES SQL
   while (have_posts()) :
      the_post();           // FAIT LE CODE PHP fetchAll

      echo "<h2>";
      the_title();
      echo "</h2>";

      echo "<p>";
      the_content();
      echo "</p>";

   endwhile;
endif;

        ?>
        </section>

        <section>
            <h2>EXEMPLE AVEC IMAGE</h2>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/photo1.jpg" alt="MON IMAGE">
        </section>
    </main>
    <footer>
        <p>tous droits réservés - 2020</p>
        <nav>            
            <?php wp_nav_menu(["theme_location" => "secondary"]) ?>
        </nav>
    </footer>

    <!-- ICI ON INSERE LE CODE JS -->
    <script src="<?php echo get_template_directory_uri() ?>/app.js"></script>
    <!-- WORDPRESS A BESOIN DE POUVOIR AJOUTER DU CODE JS ICI -->
    <?php wp_footer() ?>


</body>
</html>