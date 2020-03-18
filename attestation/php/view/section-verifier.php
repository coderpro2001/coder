
<section>
    <h2>OUTIL POUR VERIFIER LE NUMERO D'ATTESTATION</h2>
    <p>pour que un policier/gendarme puisse vérifier le numéro fourni par une personne dans la rue</p>
    <p>le citoyen doit fournir son numero d'attestation</p>
    <p>et on va verifier si le numero existe et quelles sont les infos associées à ce numéro...</p>
    <!-- SELON LE STANDARD, SI ON FAIT UNE LECTURE ALORS ON UTILISE UNE method="GET" -->
    <form action="" method="GET">
        <!-- PARTIE VISIBLE -->
        <input type="text" required name="numero" placeholder="entre le numéro d'attestation">
        <button type="submit">recherche</button>
        <!-- INFOS TECHNIQUES POUR TRAITER LE FORMULAIRE -->
        <input type="hidden" name="identifiantFormulaire" value="verifier">
        <div class="confirmation">
<?php
// ICI ON VA AJOUTER LE CODE PHP POUR TRAITER LE FORMULAIRE
// ON SEPARE LE CODE DE NOS FONCTIONS DANS UN FICHIER COMMUN
require_once "php/mes-fonctions.php";

$identifiantFormulaire = filtrer("identifiantFormulaire");
if ($identifiantFormulaire == "verifier")
{

    // ETAPES POUR TRAITER UN FORMULAIRE
    // RECUPERER LES INFOS ENVOYEES PAR LE NAVIGATEUR
    $tabAssoColonneValeur = [
        "numero"       => filtrer("numero"),
    ];
        
    // VERIFIER ET VALIDER LES INFOS RECUS
    // ASTUCE DU extract POUR CREER DES VARIABLES A PARTIR DES CLES
    extract($tabAssoColonneValeur);
    if ($numero != "")
    {
        // RECHERCHE
        // ON VEUT UNE REQUETE SQL QUI SELECTIONNE 
        // UNE LIGNE DE LA TABLE declaration
        // EN FILTRANT SUR LA COLONNE numero
        // (MAIS ON VEUT TOUTES LES COLONNES DE LA LIGNE...)
        $requeteSQL =
<<<CODESQL

SELECT * 
FROM declaration
WHERE 
numero = :numero

CODESQL;

        // ENSUITE, ON VA ENVOYER LA REQUETE SQL PREPAREE
        // CONNECTER A SQL
        
        // ETAPE1: CONNECTER PHP A SQL
        // ATTENTION: NE PAS OUBLIER DE CHANGER LA DATABASE...
        $pdo = new PDO("mysql:host=localhost;dbname=attestation;charset=utf8;", "root", "");

        // ETAPE2a: ON ENVOIE LA REQUETE PREPAREE
        // PDOStatement EST UN CONTAINER QUI ENGLOBE LES RESULTATS DE LA REQUETE SQL
        $pdoStatement = $pdo->prepare($requeteSQL);

        // ETAPE2b: ON FOURNIT LES DONNEES EXTERIEURES A PART
        // ET SQL VA REPRENDRE LA REQUETE PREPAREE $requeteSQL 
        // ET UTILISER LE TABLEAU ASSOCIATIF POUR CONSTRUIRE UNE REQUETE SQL COMPLETE 
        // ET SECURISEE CONTRE LES INJECTIONS SQL
        $pdoStatement->execute($tabAssoColonneValeur);

        // DEBUG
        $pdoStatement->debugDumpParams();

        // PERMET DE RECUPERER LES LIGNES TROUVEES
        // https://www.php.net/manual/fr/pdostatement.fetchall.php
        $tabLigneTrouvees = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

        // ON PEUT AFFICHER LE NOMBRE DE LIGNES TROUVEES
        $nbLigneTrouvees = count($tabLigneTrouvees);
        echo "<h2>IL Y A $nbLigneTrouvees RESULTAT SUR LE NUMERO $numero</h2>";

        // ON FAIT UNE BOUCLE POUR PARCOURIR LE TABLEAU DES LIGNES
        foreach($tabLigneTrouvees as $tabLigne)
        {
            // CHAQUE LIGNE EST UN TABLEAU ASSOCIATIF
            extract($tabLigne);

            echo 
<<<CODEHTML
            <article>
                <h3>$nom</h3>
                <h4>$prenom</h4>
                <p>$adresse</p>
                <p>$raison</p>
                <h5>$dateDeclaration</h5>
                <h5>$numero</h5>
            </article>
CODEHTML;
        }
        // DEBUG
        //echo "traitement du formulaire ($identifiantFormulaire)";
        //print_r($tabLigneTrouvees);
    }
    else
    {
        // INFO MANQUANTE
        echo "IL FAUT FOURNIR UN NUMERO";
    }
    // FAIRE LA REQUETE SQL POUR INTERAGIR AVEC LA BASE DE DONNEES SQL
    //      CRUD => LECTURE POUR VERIFIER DES INFOS => READ
}

?>
        </div>

    </form>
</section>