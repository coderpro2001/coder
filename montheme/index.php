<?php

// EN PHP
// SI JE VEUX RECOMPOSER MON TEMPLATE
// require_once "header.php";
// require_once "template-parts/section-index.php";
// require_once "footer.php";


// AVEC LE FRAMEWORK WORDPRESS
// ON A DES FONCTIONS POUR OBTENIR LE MEME RESULTAT
get_header();
get_template_part("template-parts/section-index"); // ATTENTION ON NE MET PAS .php
get_footer();
