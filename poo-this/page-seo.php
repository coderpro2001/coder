<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ETAPE 2: ON DEFINIT LA ZONE D'ACTION -->
    <div id="app">

        <header>
            <h1>TITRE DE MA PAGE</h1>
        </header>
        <main>
            <section class="contenuAjax">
                <h2>TITRE DE MA SECTION AVEC LE CONTENU A REFERENCER</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi veniam, consequuntur quae quas quam voluptatibus molestias aut corrupti excepturi aspernatur totam nemo impedit culpa ipsam, eligendi cumque dolorum alias voluptatum.</p>
            </section>
        </main>
        <footer>
            <p>tous droits réservés</p>
        </footer>

    </div><!-- FIN DE #app -->

    <!-- ETAPE 1: JE RAJOUTE LE SCRIPT DE VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>

// ETAPE3: 
// ON RAJOUTE UN CHARGEMENT DU CODE VUEJS PAR AJAX
// ET ENSUITE ON PEUT ACTIVER LE CODE JS DE VUEJS
// CONSEQUENCE => IL Y A UN TEMPS DE CHARGEMENT PLUS LONG AVANT D'AVOIR LA PARTIE VUEJS...
// (PB GENERAL A SURVEILLER AVEC AJAX...)
// (TECHNIQUE ALTERNATIVE: ON PEUT PLANQUER LE CODE VUEJS DANS UNE BALISE script... POUR EVITER DE CHARGER AVEC AJAX...)

// ETAPE4: CREER UNE METHODE POUR FAIRE L'APPEL EN AJAX
// ON VA INSTALLER LE CODE VUEJS DANS UN 2E TEMPS AVEC AJAX
var moncode = {};

// DECLARATION
moncode.installerVue = function ()
{
    // AVEC AJAX, ON VA REMPLACER LE CONTENU A REFERENCER PAR LE CONTENU AVEC LE CODE POUR VUEJS
    fetch('api-server.php')
    .then(function (responseServer) 
    {
        // ON EXTRAIT LE CONTENU JSON DE LA REPONSE
        return responseServer.json();
    })
    .then(function(objetJSON) 
    {
        // ETAPE 5: 
        // QUAND JE RECOIS LE CODE POUR VUEJS
        // JE LE COPIE A LA PLACE DU CODE A REFERENCER
        if ('codeVue' in objetJSON)
        {
            // ON VA COPIER LE CODE FOURNI PAR LE SERVEUR
            // DANS LA BALISE HTML 
            var baliseContenuAjax = document.querySelector('section.contenuAjax');
            baliseContenuAjax.innerHTML = objetJSON.codeVue;

            // ETAPE 6: ENFIN, JE PEUX ACTIVER LE CODE JS QUI PERMET A VUEJS DE PRENDRE LA MAIN SUR LE HTML

            // MAINTENANT QUE J'AI LE CODE HTML AVEC LE CODE POUR VUEJS
            // JE PEUX ACTIVER VUEJS POUR QU'IL PRENNE LA MAIN...
            var app = new Vue({
                el: '#app',
                data: {
                    message: 'Hello Vue!'
                }
            })

        }
    });

}

// APPEL A LA METHODE
moncode.installerVue();


    </script>
</body>
</html>