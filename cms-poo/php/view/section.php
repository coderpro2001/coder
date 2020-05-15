
        <section>
            <h2>FORMULAIRE DE LOGIN</h2>
            <form class="ajax">
                <input type="email" name="email" required placeholder="VOTRE EMAIL">
                <input type="password" name="password" required placeholder="VOTRE PASSWORD">
                <button>SE CONNECTER</button>
                <div class="confirmation"></div>
                <!-- ON VA DISTINGUER LES FORMULAIRES AVEC DES INFOS TECHNIQUES -->
                <input type="hidden" name="methodeApi" value="login">
            </form>
        </section>

        <section>
            <h2>FORMULAIRE D'INSCRIPTION</h2>
            <form class="ajax">
                <input type="email" name="email" required placeholder="VOTRE EMAIL">
                <input type="text" name="login" required placeholder="VOTRE LOGIN">
                <input type="password" name="password" required placeholder="VOTRE PASSWORD">
                <button>CREER MON COMPTE</button>
                <div class="confirmation"></div>
                <!-- ON VA DISTINGUER LES FORMULAIRES AVEC DES INFOS TECHNIQUES -->
                <input type="hidden" name="methodeApi" value="create">
            </form>
        </section>

        <script>
// ON VA PASSER LE FORMULAIRE EN AJAX
// ON VA RANGER NOTRE CODE DANS UN OBJET => POO
var mc = {};    // mc => Mon Code

mc.start = function ()
{
    // CODE POUR INITIALISER JS SUR MA PAGE
    console.log("START EN COURS...");

    // ON VA PASSER LES FORMULAIRE QUI ONT LA CLASSE ajax EN MODE AJAX
    // (ON PEUT AVOIR PLUSIEURS FORMULAIRES SUR LA MEME PAGE =>querySelectorAll)
    var listeSelection = document.querySelectorAll('form.ajax');
    listeSelection.forEach(function (balise) {
        balise.addEventListener('submit', mc.cbAjax);
    });
}

mc.cbAjax = function (event)
{
    // BLOQUER LE FORMULAIRE CLASSIQUE
    event.preventDefault();
    console.log("FORMULAIRE AN AJAX...");

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

        // JE PEUX RECUPERER LA CLE API
        if ('cleApi' in json)
        {
            // ON VA LE MEMORISER DANS sessionStorage
            // POUR POUVOIR LE REUTILISER SUR LA PAGE admin
            sessionStorage.setItem('cleApi', json.cleApi);
        }

    });
}

// ET ON APPELLE LA METHODE
mc.start();

        </script>

        <section>
            <h2>DEV (ROUTEUR)</h2>
            <?php echo "LE NAVIGATEUR DEMANDE LA PAGE QUI CORRESPOND A $filename" ?>
        </section>

        <section>
            <h2><?php echo $titre ?? "" ?></h2>
            <p><?php echo $contenu ?? "" ?></p>
            <img src="<?php echo $image ?? "" ?>" alt="photo1">
        </section>
