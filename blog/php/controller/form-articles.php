<?php

// DANS QUEL CAS, ON PEUT CREER DES FONCTIONS POUR SE SIMPLIFIER LE CODE ?
// SI ON DETECTE DES BLOCS DE CODE QUI SE REPETENT A PLUSIEURS ENDROITS DIFFERENTS
// => PENSER A CREER UNE FONCTION
// TYPIQUEMENT, UNE FONCTION PEUT SERVIR DE FILTRE
function filtrer($name="id")
{
    $resultat = $_REQUEST[$name] ?? "";
    return $resultat;
}


// JE VAIS RECUPERER L'INFO DE L'IDENTIFIANT DU FORMULAIRE
//         <input type="hidden" name="identifiantFormulaire" value="delete">
// ?? "" => SI LE FORMULAIRE N'A RIEN ENVOYE ALORS ON PREND "" COMME VALEUR PAR DEFAUT
// $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
$identifiantFormulaire = filtrer("identifiantFormulaire");

if ($identifiantFormulaire == "update")
{
    // ON RECUPERE LES INFOS ENVOYEES PAR LE NAVIGATEUR
    // ET ON VA MODIFIER LA LIGNE CORRESPONDANTE DANS LA TABLE articles

    $tabAssoColonneValeur = [
        "id"               => filtrer("id"),
        "titre"            => filtrer("titre"),
        "contenu"          => filtrer("contenu"),
        "image"            => filtrer("image"),
        "datePublication"  => filtrer("datePublication"),
        "categorie"        => filtrer("categorie"),
    ];
    // ON UTILISE CE RACCOURCI POUR CREER DES VARIABLES A PARTIR DES CLES DU TABLEAU ASSOCIATIF
    extract($tabAssoColonneValeur);

    // PHP DOIT VERIFIER ET VALIDER LES INFOS RECUES
    // => SECURITE EST BASIQUE => A AMELIORER... PLUS TARD
    if ($id != ""                   // ATTENTION: IMPORTANT POUR LE UPDATE
        && $titre != "" 
        && $contenu != ""
        && $image != ""
        && $datePublication != ""
        && $categorie != "")
    {
        // https://sql.sh/cours/update
        $requeteSQL   =
<<<CODESQL

UPDATE articles 
SET 
    titre           = :titre,
    contenu         = :contenu,
    image           = :image,
    datePublication = :datePublication,
    categorie       = :categorie
WHERE 
    id = :id;


CODESQL;


        // ETAPE3: ON VA ENVOYER LA REQUETE SQL 
        // JE CHARGE LE CODE PHP POUR ENVOYER LA REQUETE
        require_once "php/model/envoyer-sql.php";

        // MESSAGE DE CONFIRMATION
        echo "VOTRE ARTICLE A ETE MODIFIE ($requeteSQL)";

    }

}

if ($identifiantFormulaire == "delete")
{
    // CODE DE TRAITEMENT DU FORMULAIRE DE DELETE
    // IL FAIT RECUPERER L'INFO DE L'id DE LA LIGNE A SUPPRIMER

    // ET ENSUITE IL FAUT CONSTRUIRE LA REQUETE SQL 
    // POUR SUPPRIMER LA LIGNE DANS LA TABLE articles
    // ET ENFIN, ON VA ENVOYER LA REQUETE SQL
    $tabAssoColonneValeur = [
        "id"            => filtrer("id"),
    ];
    extract($tabAssoColonneValeur);
    // ON PEUT SE PROTEGER EN PHP
    // EN CONVERTISSANT EN NOMBRE
    // https://www.php.net/manual/fr/function.intval.php
    $id = intval($id);

    if ($id > 0)
    {
        // ON NE PREND PAS LES INFOS DU FORMULAIRE POUR CONCATENER ET CREER LA REQUETE SQL
        // (ATTAQUE PAR INJECTION SQL...)
        $requeteSQL   =
<<<CODESQL

DELETE FROM articles
WHERE id = :id

CODESQL;

        require_once "php/model/envoyer-sql.php";

        // MESSAGE DE CONFIRMATION
        echo "VOTRE ARTICLE A ETE SUPPRIME ($requeteSQL)";

    }
    else
    {
        // MESSAGE DE CONFIRMATION
        echo "MERCI DE NE PAS HAKCER MON SITE...";
    }

}

if ($identifiantFormulaire == "create")
{
    // CODE DE TRAITEMENT DU FORMULAIRE DE CREATE

    // DEBUG
    // echo "JE DOIS TRAITER LE FORMULAIRE";

    // $_REQUEST EST UN TABLEAU ASSOCIATIF

    /*
    // ETAPE1: RECUPERER LES INFOS DU FORMULAIRE
    $titre           = $_REQUEST["titre"];
    $contenu         = $_REQUEST["contenu"];
    $image           = $_REQUEST["image"];
    $datePublication = $_REQUEST["datePublication"];
    $categorie       = $_REQUEST["categorie"];


        // ON PASSE PAR UN TABLEAU SUPPLEMENTAIRE
    // OU ON VA DONNER LES VALEURS EXTERIEURES A MEMORISER
    // SIMPLIFICATION: JE PEUX ENLEVER LES :
    $tabAssoColonneValeur = [
        "titre"            => $titre,
        "contenu"          => $contenu,
        "image"            => $image,
        "datePublication"  => $datePublication,
        "categorie"        => $categorie,
    ];
    */

    // CONSEIL: UTILISER LES MEMES NOMS PARTOUT
    // "nom de la colonne SQL" => $_REQUEST["attribut name HTML"]
    
    $tabAssoColonneValeur = [
        "titre"            => filtrer("titre"),
        "contenu"          => filtrer("contenu"),
        "image"            => filtrer("image"),
        "datePublication"  => filtrer("datePublication"),
        "categorie"        => filtrer("categorie"),
    ];
    // RACCOURCI POUR CREER LES VARIABLES A PARTIR DU TABLEAU ASSOCIATIF
    extract($tabAssoColonneValeur);

    // IL FAUT RAJOUTER DE LA SECURITE
    // POUR VALIDER QUE TOUTES LES INFOS NECESSAIRES SONT PRESENTES
    if ($titre != "" 
            && $contenu != ""
            && $image != ""
            && $datePublication != ""
            && $categorie != "")
    {
        // SCENARIO OK
        // ETAPE2: ON VA CONSTRUIRE LA REQUETE SQL INSERT
        // POUR SE PROTEGER, ON NE VA PAS CONCATENER AVEC DES ELEMENTS EXTERIEURS
        // ON PREPARE LE CODE SQL ET PLUS TARD ON VA L'EXECUTER
        $requeteSQL   =
<<<CODESQL

INSERT INTO articles
( titre, contenu, image, datePublication, categorie)
VALUES
( :titre, :contenu, :image, :datePublication, :categorie) 

CODESQL;


        // ETAPE3: ON VA ENVOYER LA REQUETE SQL 
        // JE CHARGE LE CODE PHP POUR ENVOYER LA REQUETE
        require_once "php/model/envoyer-sql.php";

        // MESSAGE DE CONFIRMATION
        echo "VOTRE ARTICLE A ETE PUBLIE ($requeteSQL)";
    }
    else
    {
        // SCENARIO KO
        // MESSAGE DE CONFIRMATION
        echo "VEUILLEZ REMPLIR TOUS LES CHAMPS OBLIGATOIRES";
    }

}


