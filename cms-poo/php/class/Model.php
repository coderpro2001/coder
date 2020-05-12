<?php

class Model
{

    // CREATE
    // READ
    // UPDATE
    // DELETE

    static function read ($nomTable, $nomColonne, $valeurColonne)
    {
        // ON A JUSTE A FAIRE UNE REQUETE SQL POUR RECUPERER LE CONTENU ASSOCIE A $filename
        $requeteSQL =
<<<CODESQL

SELECT * FROM $nomTable
WHERE $nomColonne = :$nomColonne;

CODESQL;

        $pdo = new PDO("mysql:host=localhost;dbname=cms-poo;charset=utf8", "root", "");
        $pdoStatement = $pdo->prepare($requeteSQL);
        $pdoStatement->execute([ "$nomColonne" => $valeurColonne ]);

        $tabResult = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

        // LA METHODE VA RENVOYER UN TABLEAU DES LIGNES TROUVEES 
        return $tabResult;
    }

}