<?php


// ICI EN PHP, JE VAIS POUVOIR RECEVOIR LES INFORMATIONS ENVOYEES PAR LE NAVIGATEUR
// COMME LE NAVIGATEUR ENVOIE DES INFORMATIONS PAR PAIRES 
// nom=zakaria
// email=za@yahoo.fr
// ... 
// EN PHP, ON VA RETROUVER CES INFORMATIONS DANS UN TABLEAU ASSOCIATIF

// PHP CREE ET REMPLIT UN TABLEAU ASSOCIATIF POUR NOUS
// ET ON A JUSTE A ALLER CHERCHER LES BONNES INFORMATIONS

// ON AFFICHE LE CONTENU DU TABLEAU ASSOCIATIF $_REQUEST
// print_r($_REQUEST);

// SI JE VEUX ACCEDER AU NOM DANS LE TABLEAU ASSOCIATIF
$nom        = $_REQUEST["nom"];
$email      = $_REQUEST["email"];
$message    = $_REQUEST["message"];

//echo "<h3>$nom VIENT DE LAISSER UN MESSAGE AVEC $email ET IL A ECRIT $message</h3>";

// MESSAGE DE CONFIRMATION POUR LE VISITEUR
echo "merci pour votre message $nom ($email). Nous vous recontacterons dans les meilleurs délais.";

// ENVOYER UN MAIL AU WEBMASTER POUR LE PREVENIR D'UN NOUVEAU MESSAGE
// https://www.php.net/manual/fr/function.mail.php
// mail("client@sonmail.fr", "vous avez un message de $nom", $message);
// SUR MON ORDINATEUR, CA NE MARCHE PAS
// IL FAUT AVOIR UN SERVEUR DE MAIL...
// mail(): Failed to connect to mailserver at "localhost" port 25

// A EVITER: ON PEUT SERVIR DE PLATEFORME DE SPAM...
// SI ON VEUT ENVOYER UN MAIL AU VISITEUR
// mail($email, "vous avez laissé un message sur mon site", $message);


// SI LE SERVEUR DE MAIL NE MARCHE PAS
// ON PEUT STOCKER LE MESSAGE POUR GARDER UNE SAUVEGARDE
// ON VA UTILISER LE DOSSIER php/model/
// ET ON VA CREER UN FICHIER php/model/contact.txt
// https://www.php.net/manual/fr/function.file-put-contents.php

$messageStocke =
<<<texte

nom: $nom
email: $email
message:
$message


texte;


// FILE_APPEND PERMET DE NE PAS ECRASER LES MESSAGES PRECEDENTS
file_put_contents("php/model/contact.txt", $messageStocke, FILE_APPEND);

