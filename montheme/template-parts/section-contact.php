

    <section>
        <?php

if (have_posts()) :         // FAIT LA REQUETE SELECT SUR LA BASE DE DONNEES SQL
   while (have_posts()) :
      the_post();           // FAIT LE CODE PHP fetchAll

      //     https://developer.wordpress.org/reference/functions/the_post_thumbnail/
      the_post_thumbnail();

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
