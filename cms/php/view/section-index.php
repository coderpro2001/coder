        <section>
            <h2>TITRE SECTION</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ipsam ut aliquam facere debitis enim repellendus repellat aperiam nulla consequatur, iste voluptatibus inventore minima beatae dolores ducimus numquam error nostrum.</p>
        </section>

        <section>
            <h2>FORMULAIRE DE CONTACT</h2>
            <form class="ajax" method="POST" action="">
                <input type="text" name="nom" required placeholder="entrez votre nom">
                <input type="text" name="prenom" required placeholder="entrez votre prenom">
                <input type="text" name="email" required placeholder="entrez votre email">
                <textarea name="message" cols="60" rows="6" required placeholder="entrez votre message"></textarea>
                <button type="submit">envoyer le message</button>
            </form>
        </section>

        <script>
            // ON PEUT FAIRE DE L'AJAX
            // PERMET D'ENVOYER UNE REQUETE AU SERVEUR SANS RECHARGER LA PAGE
            // => EST-CE QUE VOUS AVEZ VU COMMENT LE FAIRE ?
            // VERS UNE PAGE api-ajax.php

            // PRENDRE LA MAIN SUR L'ENVOI DU FORMULAIRE POUR BLOQUER L'ENVOI CLASSIQUE (NON AJAX)
            // ENSUITE JE VAIS RECUPERER LES SAISIES DU VISITEUR DANS LE FORMULAIRE
            // ET ENSUITE JE VAIS ENVOYER CES INFOS SAISIES PAR AJAX (fetch...)

            var baliseAjax      = document.querySelector(".ajax");
            // var baliseNom       = document.querySelector("input[name=nom]");
            // var baliseEmail     = document.querySelector("input[name=email]");
            // var baliseTextarea  = document.querySelector("textarea[name=message]");

            baliseAjax.addEventListener('submit', function(event){
                // BLOQUE L'ENVOI DU FORMULAIRE
                event.preventDefault();
                
                // console.log('FORMULAIRE BLOQUE');
                // var saisieNom       = baliseNom.value;
                // var saisieEmail     = baliseEmail.value;
                // var saisieMessage   = baliseTextarea.value;

                // DEBUG
                // console.log(saisieNom);
                // console.log(saisieEmail);
                // console.log(saisieMessage);

                // ENVOI EN AJAX
                // formData EST UN OBJET DE LA CLASSE FormData
                // ET SERT DE CONTAINER/BOITE DANS LEQUEL JE VAIS RANGER LES INFOS DU FORMULAIRE
                // SIMPLIFICATION: ON DONNE LE FORMULAIRE A FormData 
                // ET IL VA ASPIRER TOUT SEUL TOUTES LES INFORMATIONS
                var formData = new FormData(baliseAjax);
                // append AJOUTE LES INFOS A ENVOYER AU SERVEUR
                // formData.append("nom", saisieNom);
                // formData.append("email", saisieEmail);
                // formData.append("message", saisieMessage);

                // ON PEUT ENVOYER CES INFOS PAR AJAX AVEC fetch
                fetch('api-ajax.php', {
                    method: 'POST',     // PERMET DE GERER LES UPLOADS AUSSI
                    body: formData,
                })
                .then(function(reponseServeur){
                    return reponseServeur.json();
                })
                .then(function(objetJSON) {
                    console.log(objetJSON);
                });

            });


        </script>