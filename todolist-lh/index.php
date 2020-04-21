<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST LH</title>
    <style>
html, body {
    font-size:16px;
}

form {
    display: flex;
    flex-direction: column;
}        
form > * {
    margin: 0.2rem;
    padding: 0.2rem;
}
    </style>
</head>
<body>
    <header>
        <h1>MA TODOLIST LH</h1>
    </header>
    <main>
        <section>
            <h2>FORMULAIRE DE CREATION</h2>
            <form class="ajax" action="" method="POST">
                <input type="text" name="titre" required placeholder="entrez le titre">
                <textarea name="description" cols="60" rows="5" required placeholder="entrez la description"></textarea>
                
                <label>
                    <input type="radio" name="statut" value="todo" required placeholder="entrez le statut">
                    <span>todo</span>
                </label>
                <label>
                    <input type="radio" name="statut" value="ongoing" required placeholder="entrez le statut">
                    <span>ongoing</span>
                </label>
                <label>
                    <input type="radio" name="statut" value="done" required placeholder="entrez le statut">
                    <span>done</span>
                </label>

                <!-- temporaire en attendant upload... -->
                <input type="text" name="photo" required placeholder="entrez la photo">
                <button type="submit">CREER UNE TACHE</button>
            </form>
        </section>
    </main>
    <footer>
        <p>tous droits réservés - 2020</p>
    </footer>

    <script>
// ON VA PRENDRE LA MAIN SUR LE FORMULAIRE
// ON VA BLOQUER L'ENVOI CLASSIQUE DU FORMULAIRE    => EVENEMENT submit SUR LE FORMULAIRE
// ET ON VA ENVOYER LES INFOS DU FORMULAIRE PAR AJAX
// AVANTAGE: ON NE RECHARGE PAS LA PAGE... 
//          (PLUS FLUIDE POUR LE VISITEUR, PLUS PERFORMANT...)

// ETAPE1: DECLARATION DE LA FONCTION
// => CODE EN ATTENTE
// POUR SAVOIR QUE CETTE FONCTION CALLBACK A UN PARAMETRE => DOC DE JS...

var formulaire = document.querySelector("form.ajax");
// LA FONCTION envoyerFormulaireAjax SERA APPELEE PAR JS (PAS PAR MOI)
//      (ET JS FOURNIRA LE PARAMETRE event...)
// QUAND IL SE PRODUIRA L'EVENEMENT submit SUR LE FORMULAIRE
// (QUAND LE VISITEUR VA APPUYER SUR LE BOUTON "CREER UNE TACHE")
// => FONCTION "CALLBACK"
// VERSION1: CLASSIQUE
function envoyerFormulaireAjax (event) 
{
    // LE PARAMETRE event NOUS SERT A BLOQUER LE FORMULAIRE CLASSIQUE...
    event.preventDefault();
    console.log("FORMULAIRE AJAX EN COURS...");

    // https://developer.mozilla.org/fr/docs/Web/Guide/Using_FormData_Objects
    // ON VA RECUPERER LES INFOS DU FORMULAIRE
    // ET ENSUITE ON VA ENVOYER LE REQUETE AJAX AVEC fetch

    var formulaire = event.target;
    // ON VA UTILISER UN OBJET DE LA CLASSE FormData
    // => CET OBJET SERVIRA DE CONTAINER AUX INFOS DU FORMULAIRE
    var formData = new FormData(formulaire);    
                                    // => AUTOMATIQUEMENT, 
                                    // formData VA ASPIRER TOUTES LES INFOS DU formulaire
                                    // COOL POUR NOUS ;-p

    // MAINTENANT ON PEUT ENVOYER LA REQUETE AJAX AVEC fetch
    var contenuForm = 
    {
        method: 'POST',     // NECESSAIRE POUR UPLOAD DE FICHIER
        body:   formData
    };
    // LA FONCTION fetch DE JS ENVOIE UNE REQUETE AJAX VERS api-ajax.php (le premier paramètre)
    fetch("api-ajax.php", contenuForm);

};
formulaire.addEventListener("submit", envoyerFormulaireAjax);

/*
// VERSION 2: FONCTION ANONYME
var envoyerFormulaireAjax = function (event) 
{
    // LE PARAMETRE SERT A BLOQUER LE FORMULAIRE CLASSIQUE...
    event.preventDefault();
    console.log("FORMULAIRE AJAX EN COURS...");
};

formulaire.addEventListener("submit", envoyerFormulaireAjax);

// VERSION 3: COMPACTE
formulaire.addEventListener("submit", function (event) {
    // LE PARAMETRE SERT A BLOQUER LE FORMULAIRE CLASSIQUE...
    event.preventDefault();
    console.log("FORMULAIRE AJAX EN COURS...");
});

*/



    </script>
</body>
</html>