//console.log("JS loaded");

// constantes qui vont me permettre de construire mon url de connexion à l'API
const API_KEY = "632ce075260f4c28b13cf1a161e2c5a5";
const ENDPOINT = "https://newsapi.org/v2/top-headlines?q=";

// éléments du DOM
const searchInput = document.querySelector("#search-input");
const searchBtn = document.querySelector("#search-btn");
const articlesContainer = document.querySelector("#affichage-articles");

// ajout d'un écouteur sur le bouton du formulaire
searchBtn.addEventListener("click", function (event) {
  event.preventDefault();

  //   récupérer la valeur de l'input
  const searchValue = searchInput.value;

  //   je dois passer le contenu de l'input en paramètre à ma fonction fetchData
  // ici on invoque la fonction
  fetchData(searchValue);
});

// fonction pour récupérer les data au niveau de l'API
// ici on est dans la définition de la fonction
function fetchData(inputValue) {
  // requête AJAX
  fetch(`${ENDPOINT}${inputValue}&apikey=${API_KEY}`)
    .then(function (response) {
      // ici je retourne un objet JS
      return response.json();
    })
    .then(function (results) {
      console.log(results);
      // je récupère la valeur de la propriété articles
      const articles = results.articles;

      // rien à voir
      // génération d'un index aléatoire pour aller récupérer un article au hasard dans le tableau
      //const index = Math.floor(Math.random() * articles.length);

      //console.log(articles[index]);

      // articles contient un tableau d'objets
      // il va donc falloir que je boucle sur ce tableau

      // méthode for()
      for (let i = 0; i < articles.length; i++) {
        console.log(articles[i]);

        // afficher les articles dans le HMTL
      }
    });
}
