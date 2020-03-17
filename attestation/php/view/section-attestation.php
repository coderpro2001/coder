
        <section>
            <h2>FORMULAIRE DE DECLARATION POUR ATTESTATION</h2>
            <form action="" method="POST">
                <input type="text" name="nom" required placeholder="votre nom">
                <input type="text" name="prenom" required placeholder="votre prenom">
                <textarea name="adresse" cols="60" rows="6" required placeholder="votre adresse"></textarea>
                <h3>cocher la raison de votre déplacement</h3>

                <label>
                    <input type="radio" name="raison" required value="courses alimentaires">
                    <span>courses alimentaires</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="travail">
                    <span>travail</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="aide aux proches">
                    <span>aide aux proches</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="necessité médicale">
                    <span>nécessité médicale</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="necessité familiale">
                    <span>necessité familiale</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="sortie sport individuel">
                    <span>sortie sport individuel</span>
                </label>

                <button type="submit">enregistrer ma déclaration</button>

                <!-- IDENTIFIANT POUR QUE PHP PUISSE DISTINGUER LES FORMULAIRES -->
                <!-- invisible donc on peut rajouter cette balise en balise enfant de form mais dans l'ordre qu'on veut -->
                <input type="hidden" name="identifiantFormulaire" value="declaration">
                <!-- ce sera utile avec JS et ajax pour sélectionner la balise... -->
                <div class="confirmation">
<?php
// CODE POUR TRAITER LE FORMULAIRE

// ON PEUT CREER DES FONCTIONS POUR NOUS FACILITER LE CODE
// AVANTAGE1: NE PAS DUPLIQUER DES BLOCS DE CODE IDENTIQUES
// AVANTAGE2: AJOUTER DU CODE DE SECURITE POUR FILTRER CHAQUE INFO EXTERIEURE
function filtrer ($name)
{
    // SECURITE: ?? "" => SI LE NAVIGATEUR N'ENVOIE PAS L'INFO, ON PREND COMME VALEUR PAR DEFAUT ""
    $info = $_REQUEST[$name] ?? "";
    // ON POURRA RAJOUTER PLUS DE SECURITE
    // ...

    return $info;
}

// ATTENTION: LE CODE PHP EST ASSOCIE AU CODE HTML
// <input type="hidden" name="identifiantFormulaire" value="declaration">

// VERIFIER SI LE FORMULAIRE A ETE ENVOYE
// $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
$identifiantFormulaire = filtrer("identifiantFormulaire");

if ($identifiantFormulaire == "declaration")
{

    // ALORS JE VAIS RECUPERER LES INFOS
    $tabAssoColonneValeur = [
//        "nom"     => $_REQUEST["nom"] ?? "",
        "nom"       => filtrer("nom"),
        "prenom"    => filtrer("prenom"),
        "adresse"   => filtrer("adresse"),
        "raison"    => filtrer("raison"),
    ];
    // VERIFIER ET VALIDER LES INFOS
    // ASTUCE DU extract POUR CREER DES VARIABLES A PARTIR DES CLES
    extract($tabAssoColonneValeur);
    if ( $nom != ""
         && $prenom != ""
         && $adresse != ""
         && $raison != "")
         {
            // ENREGISTRER LES INFOS DANS LA TABLE SQL
            // IL MANQUE DES INFOS POUR LA TABLE SQL
            // IL MANQUE numero et dateDeclaration
            // => IL FAUT COMPLETER LES INFOS MANQUANTES
            // https://www.php.net/manual/fr/function.uniqid.php
            // => PHP VA CREER UNE COMBINAISON ALEATOIRE DE CHIFFRES ET DE LETTRES
            $tabAssoColonneValeur["numero"] = uniqid();
            // https://www.php.net/manual/fr/function.date.php
            $tabAssoColonneValeur["dateDeclaration"] = date("Y-m-d H:i:s");

            // MAINTENANT JE PEUX CONSTRUIRE LA REQUETE SQL PREPAREE
            $requeteSQL =
<<<CODESQL

INSERT INTO declaration
(nom, prenom, adresse, raison, numero, dateDeclaration) 
VALUES 
(:nom, :prenom, :adresse, :raison, :numero, :dateDeclaration) 

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
            $pdoStatement->execute($tabAssoColonneValeur);

            // POUR DEBUG SQL SI BESOIN
            // https://www.php.net/manual/fr/pdostatement.debugdumpparams.php
            $pdoStatement->debugDumpParams();

            // DEBUG
            echo "votre déclaration est bien enregistrée. NOTEZ BIEN VOTRE NUMERO D'ATTESTATION {$tabAssoColonneValeur["numero"]}";
    }
    else
    {
        echo "VEUILLEZ FOURNIR TOUTES LES INFORMATIONS SVP...";
    }

}

?>
                </div>
            </form>
        </section>


