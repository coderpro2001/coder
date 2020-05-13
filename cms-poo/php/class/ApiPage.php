<?php

class ApiPage
{
    static function create ()
    {
        // ON VEUT VERIFIER QUE LE VISITEUR A BIEN DE LE DROIT DE FAIRE CETTE ACTION
        $cleApi = $_REQUEST["cleApi"] ?? "";

        if ($cleApi != "TEXTE-SECRET-FOURNI-PAR-LE-LOGIN")
            return;

        // ICI, ON VA TRAITER LE FORMULAIRE DE create
        // RECUPERER LES INFOS DU FORMULAIRE
        // TODO: SECURITE ET VALIDATION...
        // ET ON VA LES INSERER DANS LA TABLE Page

        $tabAssoColonneValeur = [
            "filename"   => $_REQUEST["filename"] ?? "",
            "titre"      => $_REQUEST["titre"] ?? "",
            "contenu"    => $_REQUEST["contenu"] ?? "",
            "image"      => $_REQUEST["image"] ?? "",       // PHP EST SYMPA ON PEUT LAISSER LA VIRGULE
        ];

        // ON VA INSERER DANS LA TABLE SQL Page
        $requetePrepareeSQL = 
<<<CODESQL

INSERT INTO page
( filename, titre, contenu, image )
VALUES
( :filename, :titre, :contenu, :image )

CODESQL;

        Model::envoyerRequeteSQL($requetePrepareeSQL, $tabAssoColonneValeur);

    }

    static function read ()
    {
        
    }

    static function update ()
    {
        
    }

    static function delete ()
    {
        
    }

}