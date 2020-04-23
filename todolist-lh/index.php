<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST LH</title>
    <style>
html, body {
    width:100%;
    height:100%;
    padding:0;
    margin:0;
    font-size:16px;
}
* {
    box-sizing: border-box;
}
h1, h2, h3 {
    padding:0.5rem;
    text-align:center;
    margin:0;
}
form {
    display: flex;
    flex-direction: column;
    width:100%;
    padding:1rem;
}        
form > * {
    margin: 0.2rem;
    padding: 0.2rem;
    font-family: monospace;
    width:100%;
}

.listTodo {
    display:flex;
    flex-wrap: wrap;
    width:100%;
    justify-content: center;
}
.listTodo article {
    border:1px solid #aaaaaa;
    padding: 0.25rem;
    margin:0.25rem;
    width: calc(100% / 3 - 0.5rem); /* IL FAUT ENLEVER LE MARGIN */
    min-width:200px;
}

article img {
    width:100%;
    height:15vh;
    object-fit:cover;
}

article.todo {
    background-color: yellow;
}
article.done {
    background-color: green;
}
article.ongoing {
    background-color: orange;
}

article {
    transition: all 0.5s;
}
article:hover {
    border:1px solid #ffffff;
    box-shadow: 1px 2px 4px rgba(0,0,0,0.8);
}


body {
    display: flex;
    flex-direction: column;
    width:100%;
    align-items: center;
}

body > * {
    max-width:960px;
}

.cache {
    display: none;
}
    </style>
</head>
<body>
    <header>
        <h1>MA TODOLIST LH</h1>
    </header>
    <main>

        <section>
            <h2>FORMULAIRE DE CREATION (CREATE)</h2>
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
                <!-- ON AJOUTE UNE INFO NON VISIBLE AU VISITEUR MAIS QUI SERA ENVOYEE AU SERVEUR -->
                <input type="hidden" name="identifiantFormulaire" value="create">
            </form>
        </section>

        <section>
            <h2>FORMULAIRE DE MODIFICATION (UPDATE)</h2>
            <form class="ajax update" action="" method="POST">
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
                <input type="text" name="photo" placeholder="entrez la photo">

                <!-- IMPORTANT NE PAS OUBLIER L'ID DE LA LIGNE -->
                <input type="hidden" name="id" required placeholder="id de la ligne">

                <button type="submit">MODIFIER UNE TACHE</button>
                <!-- ON AJOUTE UNE INFO NON VISIBLE AU VISITEUR MAIS QUI SERA ENVOYEE AU SERVEUR -->
                <input type="hidden" name="identifiantFormulaire" value="update">
            </form>
        </section>

        <section class="cache">
            <h2>FORMULAIRE DE DELETE</h2>
            <form class="ajax delete" action="">
                <input type="number" name="id" required placeholder="id de la ligne">
                <button type="submit">SUPPRIMER LA LIGNE</button>
                <!-- ON AJOUTE UNE INFO NON VISIBLE AU VISITEUR MAIS QUI SERA ENVOYEE AU SERVEUR -->
                <input type="hidden" name="identifiantFormulaire" value="delete">
            </form>
        </section>

        <section>
            <h2>AFFICHAGE DES TACHES (READ)</h2>
            <!-- FORMULAIRE POUR RAFRAICHIR LA LISTE DES TACHES -->
            <form class="ajax read" action="" method="POST">
                <button type="submit">RAFRAICHIR LA LISTE DES TACHES</button>
                <!-- ON AJOUTE UNE INFO NON VISIBLE AU VISITEUR MAIS QUI SERA ENVOYEE AU SERVEUR -->
                <input type="hidden" name="identifiantFormulaire" value="read">
            </form>
            <div class="listTodo">
                <!--
                <article>
                    <h3>tache1</h3>
                    <p>description1</p>
                </article>
                <article>
                    <h3>tache2</h3>
                    <p>description2</p>
                </article>
                <article>
                    <h3>tache3</h3>
                    <p>description3</p>
                </article>
                <article>
                    <h3>tache4</h3>
                    <p>description4</p>
                </article>
                <article>
                    <h3>tache5</h3>
                    <p>description5</p>
                </article>
                <article>
                    <h3>tache6</h3>
                    <p>description6</p>
                </article>
                -->
            </div>

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

// PB: querySeclector NE PERMET DE SELECTIONNER QU'UNE SEULE BALISE
// MAIS MAINTENANT, ON A PLUSIEURS FORMULAIRES EN AJAX
// var formulaire = document.querySelector("form.ajax");

var listeFormulaire = document.querySelectorAll("form.ajax");
// ON FAIT UNE BOUCLE POUR AGIR SUR CHAQUE FORMULAIRE UN PAR UN
listeFormulaire.forEach(function(formulaire){
    // POUR CHAQUE FORMULAIRE
    // ON VA BLOQUER LE FONCTIONNEMENT CLASSIQUE
    // ET ON VA ENVOYER LES INFOS PAR AJAX
    formulaire.addEventListener("submit", envoyerFormulaireAjax);
});

// QUAND ON CHARGE LA PAGE
// ON VA AUTOMATIQUEMENT DECLENCHER LE CLICK SUR LE FORMULAIRE read
// => CA EVITE AU VISITEUR DE LE FAIRE
document.querySelector("form.read button[type=submit]").click();

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
    fetch("api-ajax.php", contenuForm)
    // POUR LE READ IL FAUT COMPLETER LE CODE POUR RECUPERER LES DONNEES RENVOYEES PAR LE SERVEUR
    .then(function(responseServer) {
        // DEBUG
        console.log(responseServer);

        // EXTRAIRE UN OBJET JS DEPUIS LA REPONSE DU SERVEUR
        return responseServer.json();
    })
    .then(function(objetJSON) {
        // DEBUG
        console.log(objetJSON);

        // SI LE TABLEAU DES ARTICLES EST FOURNI PAR LE SERVEUR
        // ALORS JE VAIS M'EN SERVIR POUR CONSTRUIRE LE HTML
        if ('tableauArticle' in objetJSON)
        {
            // ON COPIE LE TABLEAU DANS NOTRE VARIABLE tableauArticle
            tableauArticle = objetJSON.tableauArticle;
            // => CE TABLEAU JSON SERA EN FAIT FOURNI PAR LE SERVEUR WEB (PHP + TABLE SQL)
            // => LES PROPRIETES SERONT CONSTRUITES A PARTIR DES NOMS DES COLONNES SQL
            rafraichirListeArticle();

        }
    })
    ;

};

var tableauArticle = [];    // CE SERA LE SERVEUR QUI VA ME CONSTRUIRE CE TABLEAU

// PROGRAMMATION FONCTIONNELLE
// => JE RANGE MON CODE DANS DES FONCTIONS

function rafraichirListeArticle ()
{
    // ON REMET LA LISTE A ZERO
    var baliseListTodo = document.querySelector(".listTodo");
    baliseListTodo.innerHTML = '';

    for(var indice=0; indice < tableauArticle.length; indice++)
    {
        var article = tableauArticle[indice];
        var codeHTML = 
        `
                    <article class="${article.statut}">
                        <h3>${article.titre}</h3>
                        <p>${article.description}</p>
                        <p>${article.statut}</p>
                        <p>${article.id}</p>
                        <img src="${article.photo}">
                        <button class="update" data-indice="${indice}" data-id="${article.id}">modifier</button>
                        <button class="delete" data-id="${article.id}">supprimer</button>
                    </article>
        `;
        // AJOUTER DANS LA BALISE listTodo
        baliseListTodo.innerHTML += codeHTML;
    }

    // CHRONOLOGIE: 
    // JE DOIS ATTENDRE QUE LES BOUTONS SOIENT RAJOUTES AVEC LES ARTICLES
    // ET ENSUITE JE PEUX AJOUTER LES EVENT LISTENER DESSUS

    // UNE FOIS QU'ON A CREE LES ARTICLES AVEC LES BOUTONS SUPPRIMER
    // ON VA AJOUTER UN EVENT LISTENER SUR CHAQUE BOUTON
    var listeBoutonSupprimer = document.querySelectorAll(".listTodo button.delete");
    listeBoutonSupprimer.forEach(function(bouton) {
        bouton.addEventListener("click", supprimerLigne);
    });


    var listeBoutonModifier = document.querySelectorAll(".listTodo button.update");
    listeBoutonModifier.forEach(function(bouton) {
        bouton.addEventListener("click", modifierLigne);
    });

}


function modifierLigne (event)
{
    // DEBUG
    console.log(event.target);
    var bouton = event.target;
    // JE RECUPERE indice CORRESPONDANT DANS tableauArticle
    var indice = bouton.getAttribute("data-indice");
    var article = tableauArticle[indice];
    // DEBUG
    console.log(article);

    // MAINTENANT IL FAUT COPIER LES INFOS DANS LE FORMULAIRE
    // id, titre, description, statut, photo
    document.querySelector("form.update input[name=id]").value = article.id;
    document.querySelector("form.update input[name=titre]").value = article.titre;
    document.querySelector("form.update textarea[name=description]").value = article.description;
    document.querySelector("form.update input[name=photo]").value = article.photo;

    // PB: COMME ON UTILISE 3 BALISES radio POUR LE STATUT... CA NE MARCHE PAS COMME POUR LES text...
    // document.querySelector("form.update input[name=statut]").value = article.statut;
    // => IL FAUT CHOISIR LA BONNE BALISE ET LUI RAJOUTER L'ATTRIBUT checked
    // ASTUCE: JE VAIS ME SERVIR DE article.statut POUR CONSTRUIRE LE SELECTEUR DE LA BONNE BALISE radio
    // "form.update input[value=todo]"
    // "form.update input[value=ongoing]"
    // "form.update input[value=done]"
    var selecteurRadio = "form.update input[value=" + article.statut + "]";
    // JE SELECTIONNE EN CSS LA BONNE BALISE radio ET JE LA CHECK EN HTML
    document.querySelector(selecteurRadio).checked = true;
}

// FONCTION DE CALLBACK SUR LE CLICK DU BOUTON SUPPRIMER
function supprimerLigne (event)
{
    // DEBUG
    console.log(event.target);
    var bouton = event.target;
    // JE RECUPERE id DE LA LIGNE A SUPPRIMER
    var id = bouton.getAttribute("data-id");
    // ET JE COPIE id DANS LE FORMULAIRE
    var inputId = document.querySelector("form.delete input[name=id]");
    inputId.value = id;

    // MAINTENANT ON VA DECLENCHER L'ENVOI DU FORMULAIRE DE DELETE
    // document.querySelector("form.delete").submit(); // ENVOI SANS AJAX
    document.querySelector("form.delete button[type=submit]").click();
}

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


// ON VEUT LE CODE JS 
// QUI PRODUISE LE HTML POUR LA LISTE DES TACHES
// REPETITION => TECHNIQUE:             BOUCLE
//                  AVEC COMME COMBO :  UN TABLEAU
/*
                <article>
                    <h3>tache1</h3>
                    <p>description1</p>
                </article>
                <article>
                    <h3>tache2</h3>
                    <p>description2</p>
                </article>

var tableauArticle = [
    { titre: 'tache1', description: 'description1' },
    { titre: 'tache2', description: 'description2' },
    { titre: 'tache3', description: 'description3' },
    { titre: 'tache4', description: 'description4' },
    { titre: 'tache5', description: 'description5' }    // NE PAS OUBLIER D'ENLEVER LA VIRGULE SUR LE DERNIER ELEMENT
];

*/




    </script>
</body>
</html>