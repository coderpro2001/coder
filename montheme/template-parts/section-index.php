
    <section>

        <div class="listeArticle">
        <?php

if (have_posts()) :         // FAIT LA REQUETE SELECT SUR LA BASE DE DONNEES SQL
   while (have_posts()) :
      the_post();           // FAIT LE CODE PHP fetchAll

      
      echo "<article>";
      echo "<h2>";
      the_title();
      echo "</h2>";

      echo "<strong>";
      the_category();
      echo "</srong>";

    //     https://developer.wordpress.org/reference/functions/the_post_thumbnail/
    the_post_thumbnail();

      echo "<p>";
      the_content();
      echo "</p>";
      echo "</article>";

   endwhile;
endif;

        ?>
        </div>
        </section>

        <section>
            <h2>EXEMPLE AVEC IMAGE</h2>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/photo1.jpg" alt="MON IMAGE">
        </section>
