<?php

// ON A 2 SCENARIOS
// SCENARIO1: J'ARRIVE SUR LA PAGE => PAS D'INFOS DE FORMULAIRE
// SCENARIO2: LE VISITEUR A CLIQUE SUR LE BOUTON ET A ENVOYE LES INFOS DU FORMULAIRE

// LES FORMULAIRES C'EST L'ENFER...
// COMMENT ON COMPTE LE NOMBRE D'ELEMENTS DANS UN TABLEAU
$nbInfo = count($_REQUEST);
if ($nbInfo > 0)
{
    // DEBUG
    // echo "SCENARIO 2";
    // SCENARIO2
    // ICI JE DOIS RAJOUTER LE CODE PHP POUR TRAITER LES INFORMATIONS DU FORMULAIRE
    // ET AFFICHER LE MESSAGE DE CONFIRMATION
    // SI JE VEUX RECUPERER LES INFOS DANS $_REQUEST QUI EST UNE VARIABLE CREEE PAR PHP
    $nom        = $_REQUEST["nom"];
    $email      = $_REQUEST["email"];
    $message    = $_REQUEST["message"];

    // mail("client@sonmail.fr", "vous avez un message de $nom", $message);

    $messageStocke =
<<<texte

    nom: $nom
    email: $email
    message:
    $message


texte;

    // FILE_APPEND PERMET DE NE PAS ECRASER LES MESSAGES PRECEDENTS
    file_put_contents("php/model/contact.txt", $messageStocke, FILE_APPEND);
    // SUR WINDOWS:
    // PHP VA CREER LE FICHIER contact.txt
    // MAIS IL FAUT CREER LE DOSSIER php/model/ AVANT
    // SUR LINUX:
    // IL FAUT CREER LE FICHIER AVANT ET DONNER LES DROITS EN ECRITURE
    // chmod 0666 contact.txt

    
    // AFFICHER LE MESSAGE DE CONFIRMATION
    echo "merci pour votre message $nom ($email). Nous vous recontacterons.";
}

?>
