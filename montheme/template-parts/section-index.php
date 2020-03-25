
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
