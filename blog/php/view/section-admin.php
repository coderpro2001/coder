
<section>
    <h2>FORMULAIRE DE CREATION D'ARTICLE</h2>
    <form id="create" class="admin" action="" method="POST">
        <input type="text" name="titre" required placeholder="entrer le titre">
        <textarea name="contenu" cols="60" rows="8" required placeholder="entrer le contenu"></textarea>
        <!-- POUR L'IMAGE, ON DEVRAIT PROPOSER UN UPLOAD => PLUS TARD... -->
        <input type="text" name="image" required value="assets/img/photo1.jpg">
        <!-- https://www.php.net/manual/fr/function.date.php -->
        <input type="text" name="datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
        <input type="text" name="categorie" required placeholder="entrez la catégorie">
        <!--
        <input type="text" style="display:none;" name="identifiantFormulaire" value="create" readonly>
        -->
        <input type="hidden" name="identifiantFormulaire" value="create">

        <button type="submit">PUBLIER L'ARTICLE</button>
        <div class="confirmation">
            <?php 
$identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
if ($identifiantFormulaire == "create")
{
    require "php/controller/form-articles.php"; 
}        
            ?>
        </div>
    </form>
</section>


<section class="cache">
    <h2>FORMULAIRE DE DELETE</h2>
    <form id="delete" action="" method="POST">
        <input type="text" name="id" required placeholder="entrez id">
        <!-- CODE BARRE TECHNIQUE POUR DISTINGUER LES FORMULAIRES -->
        <input type="hidden" name="identifiantFormulaire" value="delete">
        <button>SUPPRIMER LA LIGNE</button>
        <div class="confirmation">
        <?php 
$identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
if ($identifiantFormulaire == "delete")
{
    require "php/controller/form-articles.php"; 
}        
            ?>
        </div>
    </form>    
</section>


<section>
    <h2>LISTE DES ARTICLES</h2>

    <table cellspacing="0">
        <thead>
            <!-- TITRE DES COLONNES -->
            <!-- LIGNE => TABLE ROW => tr -->
            <tr>
                <td>id</td>
                <td>titre</td>
                <td>contenu</td>
                <td>image</td>
                <td>categorie</td>
                <td>modifier</td>
                <td>supprimer</td>
            </tr>
        </thead>
        <tbody>
            <!-- LIGNES -->
            <?php

$requeteSQL =
<<<CODESQL

SELECT * FROM `articles`
ORDER BY datePublication DESC

CODESQL;


$tabAssoColonneValeur = [];

// JE CHARGE LE CODE PHP POUR ENVOYER LA REQUETE
require "php/model/envoyer-sql.php";

// ETAPE3: JE RECUPERE MON TABLEAU DE RESULTATS
// https://www.php.net/manual/fr/pdostatement.fetchall.php
$tabLigne = $pdoStatement->fetchAll();

// ON FAIT UNE BOUCLE POUR AFFICHER CHAQUE ARTICLE
foreach($tabLigne as $tabAsso)
{
    /*
    $id         = $tabAsso["id"];
    $titre      = $tabAsso["titre"];
    $contenu    = $tabAsso["contenu"];
    $image      = $tabAsso["image"];
    $categorie  = $tabAsso["categorie"];
    */
    // SIMPLIFICATION
    // https://www.php.net/manual/fr/function.extract.php
    // extract CREE DES VARIABLES A PARTIR DES CLES DU TABLEAU ASSOCIATIF
    extract($tabAsso); 

    echo
<<<CODEHTML

<tr>
    <td>$id</td>
    <td>$titre</td>
    <td>$contenu</td>
    <td>$image</td>
    <td>$categorie</td>
    <td><button data-id="$id" class="update">modifier</button></td>  
    <td><button data-id="$id" class="delete">supprimer</button></td>  
</tr>

CODEHTML;
}


?>
        </tbody>
    </table>
</section>


<script>
// JE VAIS RAJOUTER DU CODE 
// QUAND LE CLIENT VA CLIQUER SUR LE BOUTON supprimer    
var listeBoutonDelete = document.querySelectorAll("button.delete");
// SUR CHAQUE BOUTON, JE VAIS AJOUTER UN EVENT LISTENER SUR LE CLICK
// => BOUCLE (forEach EN JS EST DIFFERENT DU foreach PHP...)
listeBoutonDelete.forEach(function(bouton){
    // DEBUG
    // console.log(bouton);
    // SUR CHAQUE BOUTON, ON AJOUTE UN EVENT LISTENER SUR LE CLICK
    bouton.addEventListener("click", function(){
        console.log("TU AS CLIQUE");
        // JE VOUDRAIS RECOPIER L'id DE LA LIGNE DANS LE FORMULAIRE DE DELETE
        // JA VAIS RECUPERER L'ATTRIBUT data-id SUR LE BOUTON
        var idBouton = event.target.getAttribute("data-id");
        console.log(idBouton);
        // MAINTENANT, JE VAIS COPIER LA VALEUR DANS LE CHAMP DU FORMULAIRE
        var champId = document.querySelector("form#delete input[name=id]");
        //console.log(champId);
        // JE DOIS CHANGER LA VALEUR DU CHAMP DU FORMULAIRE
        champId.value = idBouton;

        // ON PEUT FAIRE PLUS COMPLIQUE QUE LA POPUP...
        var confirmation = window.confirm("ES TU SUR DE CE QUE TU FAIS");
        if (confirmation)
        {
            // ON VA DECLENCHER LE FORMULAIRE DE DELETE DIRECTEMENT
            var formDelete = document.querySelector("form#delete");
            // JE DECLENCHE L'ENVOI DU FORMULAIRE SANS QUE LE CLIENT AIT CLIQUE
            formDelete.submit();
        }
        else
        {
            // ON NE FAIT RIEN
        }
    });

});



</script>



