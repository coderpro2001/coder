<?php


// ETAPE1: DECLARATION DE LA CLASSE
class User
{
    // COLLECTIF
    // static => AU NIVEAU DE LA CLASSE
    // PROPRIETES
    // METHODES

    // INDIVIDUEL
    // => AU NIVEAU DE CHAQUE OBJET
    // PROPRIETES
    // (NOTE: LES PROPRIETES public PEUVENT ETRE UTILISEES SANS LES AVOIR DECLAREES...)
    // SI ON NE MET PAS public => Parse error: syntax error, unexpected '$login' 
    // ON POURRA CHOISIR ENTRE public/protected/private
    public $login       = "";
    public $motdepasse  = "";

    // METHODES
    // METHODE MAGIQUE => CONSTRUCTEUR __construct (OPTIONNEL)
    function __construct ($param1, $param2)
    {
        // DEBUG
        echo "<h4>__construct</h4>";
        // ON VA UTILISER LES PARAMETRES POUR DONNER LES VALEURS AUX PROPRIETES
        $this->login        = $param1;
        $this->motdepasse   = $param2;

        // PARFOIS DANS LE CONSTRUCTEUR ON A BESOIN D'OUVRIR DES CHOSES...
    }

    function __destruct()
    {
        // DEBUG
        echo "<h4>__destruct</h4>";
        // SI ON A OUVERT DES CHOSES DANS LE CONSTRUCTEUR
        // ON PEUT LES REFERMER DANS LE DESTRUCTEUR...
    }
}

// ETAPE2: ON PEUT CREER DES OBJETS A PARTIR DE LA CLASSE (INSTANCIATION)
echo "<h3>STEP1</h3>";
$user1 = new User("bernard", "1234");              // (PHP DECLENCHE APPEL A __construct 
                                                   // AVEC $this=$user1 ET $param1="bernard" ET $param2="1234")
echo "<h3>STEP2</h3>";
// $user1->login = "bernard";

echo "<h3>STEP3</h3>";
$user2 = new User("julie", "abcd");                // (PHP DECLENCHE APPEL A __construct) 
                                                   // AVEC $this=$user2 ET $param1="julie" ET $param2="abcd")
echo "<h3>STEP4</h3>";
// $user2->login = "julie";

// AFFICHAGE
echo "<h3>user1</h3>";
echo $user1->login; // bernard
echo "<hr>";
// DEBUG
var_dump($user1);
//print_r($user1);

echo "<h3>user2</h3>";
echo $user2->login; // julie
echo "<hr>";
// DEBUG
var_dump($user2);


echo "<h3>possible mas pas recommendé</h3>";
// POSSIBLE MAIS PAS RECOMMENDE...
// ON PEUT RAJOUTER DES PROPRIETES DANS UN OBJET A LA VOLEE
$user1->adresse = "1 rue paradis";
var_dump($user1);
echo "<hr>";
var_dump($user2);


echo "<h3>FIN DU PROGRAMME</h3>";
// JE N'ECRIS PAS DE CODE...