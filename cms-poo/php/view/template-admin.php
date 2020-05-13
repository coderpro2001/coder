<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- INSTRUCTION POUR QUE LES MOTEURS DE RECHERCHE NE REFERENCENT CETTE PAGE -->
    <meta name="robots" content="noindex, nofollow">

    <title>Document</title>

    <style>
html, body {
    font-size:16px;
}        
form {
    display: flex;
    flex-direction: column;
}        
form > * {
    margin:0.25rem;
    padding:0.2rem;
}
    </style>
</head>
<body>
    <div id="app">

        <header>
            <h1>TITRE1</h1>
            <nav>
                <a href="index.php">accueil</a>
                <a href="presentation.php">présentation</a>
                <a href="contact.php">contact</a>
                <a href="admin.php">admin</a>
            </nav>
        </header>
        <main>
            <h1>PAGE ADMIN...</h1>

            <section>
                <h2>FORMULAIRE DE CREATE SUR LA TABLE SQL contenu</h2>
                <form @submit.prevent="envoyerFormAjax">
                    <input type="text" name="filename" required placeholder="filename">
                    <input type="text" name="titre" required placeholder="titre">
                    <textarea name="contenu" required rows="8" cols="60"></textarea>
                    <!-- TEMPORAIRE: AU FINAL, ON METTRA UN UPLOAD D'IMAGE... -->
                    <input type="text" name="image" required placeholder="image">
                    <button type="submit">CREER UN CONTENU</button>
                    <!-- AJOUTER LES INFOS POUR L'API -->
                    <input type="hidden" name="classeApi" value="Page">
                    <input type="hidden" name="methodeApi" value="create">
                    <!-- AJOUTER UNE CLE API FOURNIE AU MOMENT DU LOGIN -->
                    <input type="text" name="cleApi" value="">
                </form>
            </section>
        </main>
        <footer>
            <p>tous droits réservés</p>
            <p>{{message}}</p>
        </footer>
        
    </div><!--/ FIN DE #app-->

    <!-- ON CHARGE LE CODE DE VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>
var app = new Vue({
  el: '#app',
  methods: {
    envoyerFormAjax: function (event)
    {
        // PAS BESOIN SI ON UTILISE VUEJS @submit.prevent
        // BLOQUER L'ENVOI CLASSIQUE
        // event.preventDefault();

        console.log(event.target);

        // ON PEUT ENVOYER LES INFOS DU FORMULAIRE EN AJAX
        var formulaire = event.target;
        var formData = new FormData(formulaire); // ASPIRE LES INFOS DU FORMULAIRE

        fetch('api.php', {
            method: 'POST',
            body: formData
        })
        .then(function(reponseServeur){
            return reponseServeur.json();
        })
        .then(function (json) {
            console.log(json);
        });

    }
  },
  data: {
    message: 'Hello Vue!'
  }
})        
    </script>
</body>
</html>