console.log("JS loaded");

// DOM elements
const searchbox = document.querySelector("#searchbox");
const resultContainer = document.querySelector(".result");

// j'ajoute un event keyup sur mon input
searchbox.addEventListener("keyup", function (e) {
  // debug only
  // console.log(e.target.value);

  // je récupère ce qui est entré dans l'input
  var searchTerm = e.target.value;

  // je crée un tableau vide qui va contenir la liste des mangas qui correspondent à la recherche effectuée
  var matches = [];

  // il faut parcourir le tableau des mangas et à chaque tour de boucle vérifier si ce qu'on a tapé correspond à un élément du tableau
  mangas.forEach(function (manga) {
    // si la recherche correspond au manga en cours, je l'ajoute au tableau
    // je vais utiliser pour ça la méthode native js includes() : https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/includes
    if (manga.includes(searchTerm)) {
      matches.push(manga);
    }
  });

  //   debug only
  // je check le résultat
  console.log(matches);
});

// TODO gérer le pb de la casse (majuscules/minuscules)
// TODO externaliser l'affichage dans le HTML dans une fonction qui sera appelée à chaque tour de boucle
