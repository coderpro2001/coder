<?php


// ICI ON VA RECEVOIR LES INFOS DU NAVIGATEUR
// ENVOYEES PAR AJAX

$tabAssoReponse = [];
// DEBUG
// ON VA RENVOYER CE QU'ON RECOIT...
$tabAssoReponse["request"] = $_REQUEST;

// ON VA FOURNIR DU JSON
echo json_encode($tabAssoReponse, JSON_PRETTY_PRINT);
