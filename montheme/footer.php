
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
