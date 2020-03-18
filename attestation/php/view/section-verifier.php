
<section>
    <h2>OUTIL POUR VERIFIER LE NUMERO D'ATTESTATION</h2>
    <p>pour que un policier/gendarme puisse vérifier le numéro fourni par une personne dans la rue</p>
    <p>le citoyen doit fournir son numero d'attestation</p>
    <p>et on va verifier si le numero existe et quelles sont les infos associées à ce numéro...</p>
    <!-- SELON LE STANDARD, SI ON FAIT UNE LECTURE ALORS ON UTILISE UNE method="GET" -->
    <form action="" method="GET">
        <!-- PARTIE VISIBLE -->
        <input type="text" required name="numero" placeholder="entre le numéro d'attestation">
        <button type="submit">recherche</button>
        <!-- INFOS TECHNIQUES POUR TRAITER LE FORMULAIRE -->
        <input type="hidden" name="identifiantFormulaire" value="verifier">
        <div class="confirmation">
<?php
// ICI ON VA AJOUTER LE CODE PHP POUR TRAITER LE FORMULAIRE
// ON SEPARE LE CODE DE NOS FONCTIONS DANS UN FICHIER COMMUN
require_once "php/mes-fonctions.php";

$identifiantFormulaire = filtrer("identifiantFormulaire");
if ($identifiantFormulaire == "verifier")
{
    // DEBUG
    echo "traitement du formulaire ($identifiantFormulaire)";
}

?>
        </div>

    </form>
</section>