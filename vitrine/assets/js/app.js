console.log("JS CHARGE");

// JE SELECTIONNE LES BALISES img QUI SONT ENFANTS DE .container
// ET JE MEMORISE LA LISTE DANS LA VARIABLE listeImg
var listeImg = document.querySelectorAll(".container img");

console.log(listeImg);

// SUR LA LISTE DES IMAGES, 
// JE VEUX AJOUTER UNE INTERACTION QUAND LE VISITEUR CLIQUE SUR UNE IMAGE
// ON FAIT UNE BOUCLE
for(var i=0; i < listeImg.length; i++)
{
    // ON UTILISE L'INDICE POUR ACCEDER A UN ELELENT DU TABLEAU
    var imageCourante = listeImg[i];
    // JE VEUX QUE QUAND LE VISITEUR CLIQUE SUR UNE IMAGE
    // JS VA ACTIVER LE CODE DANS LA FONCTION
    imageCourante.addEventListener("click", function(event){
        console.log("LE VISITEUR A CLIQUE");
        // SI JE VEUX SAVOIR SUR QUELLE IMAGE LE VISITEUR A CLIQUE
        console.log(event.target);
        // JE VEUX CHANGER L'IMAGE EN GRAND ET LA REMPLACER PAR L'IMAGE CLIQUEE
        // => INTERACTION AVEC LE VISITEUR
        // EN HTML, POUR CHANGER L'IMAGE AFFICHEE 
        // => IL FAUT CHANGER LA VALEUR DE L'ATTRIBUT src

        // AU DEBUT, J'AI BESOIN DE RECUPERER LA VALEUR DE L'ATTRIBUT src 
        // DE L'IMAGE CLIQUEE
        var baliseCliquee = event.target;
        // JE LIS LA VALEUR D'UN ATTRIBUT
        var urlImageCliquee = baliseCliquee.getAttribute("src");

        // POUR SELECTIONNER EN JS LA BALISE img QUE JE VEUX
        var balisePrincipale = document.querySelector(".imagePrincipale");
        // SI JE VEUX CHANGER L'ATTRIBUT D'UNE BALISE
        balisePrincipale.setAttribute("src", urlImageCliquee);
    });
}