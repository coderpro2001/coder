
<section>
    <h2>FORMULAIRE DE CREATION D'ARTICLE</h2>
    <form class="admin" action="" method="POST">
        <input type="text" name="titre" required placeholder="entrer le titre">
        <textarea name="contenu" cols="60" rows="8" required placeholder="entrer le contenu"></textarea>
        <!-- POUR L'IMAGE, ON DEVRAIT PROPOSER UN UPLOAD => PLUS TARD... -->
        <input type="text" name="image" required value="assets/img/photo1.jpg">
        <!-- https://www.php.net/manual/fr/function.date.php -->
        <input type="text" name="datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
        <input type="text" name="categorie" required placeholder="entrez la catégorie">
        <button type="submit">PUBLIER L'ARTICLE</button>
        <div class="confirmation">
<?php
// TRAITEMENT DU FORMULAIRE DE CREATION D'ARTICLE
if (count($_REQUEST) > 0)
{
    // DEBUG
    // echo "JE DOIS TRAITER LE FORMULAIRE";

    // $_REQUEST EST UN TABLEAU ASSOCIATIF

    // ETAPE1: RECUPERER LES INFOS DU FORMULAIRE
    $titre           = $_REQUEST["titre"];
    $contenu         = $_REQUEST["contenu"];
    $image           = $_REQUEST["image"];
    $datePublication = $_REQUEST["datePublication"];
    $categorie       = $_REQUEST["categorie"];

    // ETAPE2: ON VA CONSTRUIRE LA REQUETE SQL INSERT
    $requeteSQL   =
<<<CODESQL

INSERT INTO articles
( titre, contenu, image, datePublication, categorie)
VALUES
( '$titre', '$contenu', '$image', '$datePublication', '$categorie') 

CODESQL;

    $tabAssoColonneValeur = [];

    // ETAPE3: ON VA ENVOYER LA REQUETE SQL 
    // JE CHARGE LE CODE PHP POUR ENVOYER LA REQUETE
    require_once "php/model/envoyer-sql.php";

    // MESSAGE DE CONFRFIRMATION
    echo "VOTRE ARTICLE A ETE PUBLIE";
}

?>
        </div>
    </form>
</section>