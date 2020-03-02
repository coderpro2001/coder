
        <section id="section-contact">
            <h2>formulaire de contact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias eos qui ratione dolorum ut corporis repudiandae rerum expedita harum nobis ad voluptatibus, obcaecati sequi. Dolore hic distinctio eveniet molestiae incidunt!</p>
            <!-- method GET ou POST -->
            <form action="#section-contact" method="POST">
                <!-- ETAPE1: LE CODE HTML POUR LE FORMULAIRE -->
                <input type="text" name="nom" required placeholder="entrez votre nom">
                <input type="email" name="email" required placeholder="entrez votre email">
                <textarea name="message" cols="60" rows="6" required placeholder="entrez votre message"></textarea>
                <button type="submit">envoyer votre message</button>

                <div class="confirmation">
<?php

// ETAPE 2: APACHE
// LES INFOS ENVOYEES PAR LE FORMULAIRE PASSENT D'ABORD A APACHE
// ET APACHE LES TRANSMET A PHP

// ETAPE 3: PHP
// EN PHP, ON RECUPERE LES INFOS DANS UN TABLEAU ASSOCIATIF
// $_REQUEST (PLUS SIMPLE... MAIS IL Y A DES SCENARIOS PLUS COMPLIQUES OU $_REQUEST NE CONVIENT PAS...)
// $_POST
// $_GET
// $_COOKIES

// IL FAUT DISTINGUER SI LE FORMULAIRE A ETE ENVOYE OU PAS
if (count($_REQUEST) > 0)
{
    // SI LE FORMULAIRE A ETE ENVOYE
    // echo "SCENARIO1: FORMULAIRE ENVOYE";
    // IL FAUT RECUPERER LES INFOS DU FORMULAIRE
    // <input name="nom">
    $nom        = $_REQUEST["nom"];
    $email      = $_REQUEST["email"];
    $message    = $_REQUEST["message"];

    // DEBUG
    echo "merci de votre message $nom ($email)";

    // ETAPE 4: SQL
    // ON VEUT MAINTENANT ENREGISTRER CE MESSAGE DANS UNE TABLE SQL
    // IL FAUT CONSTRUIRE LA BONNE REQUETE SQL
    $requeteSQL =
<<<CODESQL

INSERT INTO contact 
(nom, email, message) 
VALUES 
('$nom', '$email', '$message');

CODESQL;

    // DEBUG
    // CODE SQL A ENVOYER
    // echo $requeteSQL;
    // IL FAUT QUE PHP SE CONNECTE A SQL
    // ET ENSUITE ENVOIE LA REQUETE SQL
    // https://www.php.net/manual/fr/pdo.construct.php
    $pdo = new PDO("mysql:dbname=vitrine;host=localhost;charset=utf8;", "root", "" );

    // CODE FACILE MAIS PAS ASSEZ SECURISE
    // => ON VA FAIRE UN CODE PLUS COMPLIQUE ENSUITE

    // ICI ON ENREGISTRE LES INFOS DANS LA TABLE SQL contact
    // https://www.php.net/manual/fr/pdo.exec.php
    $pdo->exec($requeteSQL);

}

?>
                </div>
            </form>
            <img src="assets/img/voiture.jpg" alt="voiture">
        </section>

        