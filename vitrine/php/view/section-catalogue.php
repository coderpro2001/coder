
        <section>
            <h2>catalogue</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias eos qui ratione dolorum ut corporis repudiandae rerum expedita harum nobis ad voluptatibus, obcaecati sequi. Dolore hic distinctio eveniet molestiae incidunt!</p>
            <!-- JE RAJOUTE UNE CLASSE POUR POUVOIR FACILEMENT SELECTIONNER LA BALISE EN JS -->
            <img class="imagePrincipale" src="assets/img/galerie1.jpg" alt="voiture">
            <div class="container">
<?php

// JE DEMANDE A PHP DE RECUPERER LA LISTE DES FICHIERS QUI COMMENCE PAR galerie

// $listeGalerie = glob("assets/img/galerie*.jpg");
$listeGalerie = glob("assets/img/galerie*.{jpg,jpeg,gif,png}", GLOB_BRACE);

foreach($listeGalerie as $image)
{
    echo 
<<<CODEHTML

    <img src="$image" alt="$image">

CODEHTML;
}

?>
<!--                
                <img src="assets/img/voiture1.jpg" alt="voiture1">
                <img src="assets/img/voiture2.jpg" alt="voiture2">
                <img src="assets/img/voiture3.jpg" alt="voiture3">
-->                
            </div>
        </section>

        