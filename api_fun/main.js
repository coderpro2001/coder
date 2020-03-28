const baseUrl = "https://swapi.co/api/"; // ceci est une chaîne de caractères ni plus ni moins

// on stocke les références aux éléments du DOM qui nous intéressent dans des variables pour pouvoir y accéder facilement plus tard
const randBtn = document.querySelector("#randomButton");
const resultsDiv = document.querySelector("#results");

// on ajoute un écouteur pour l'événement "click" sur le bouton
randBtn.addEventListener("click", function() {
  // version JS classique avec l'opérateur + de concaténation
  //   fetch(baseUrl + "species/")

  // version ES6 avec string literals
  fetch(`${baseUrl}species/`)
    .then(function(res) {
      return res.json();
    })
    .then(function(data) {
      // les propriétés de l'objet data qui nous intéressent : name, language, classification, average_lifespan, eye_colors

      // debug
      console.log(data);
      //   format type pour accéder aux propriétés : data.results[index].property

      // étape1 on compte la longueur du tableau des résultats
      const resultsLength = data.results.length;

      // étape 2 : on génère un index aléatoire
      const randomIndex = Math.floor(Math.random() * resultsLength);

      // étape 3 : on récupère les valeurs des propriétés
      const name = data.results[randomIndex].name;
      const language = data.results[randomIndex].language;
      const classification = data.results[randomIndex].classification;
      const lifespan = data.results[randomIndex].average_lifespan;

      // debug
      console.log(`Nom de la race : ${name}`);
      console.log(`Langage de la race : ${language}`);
      console.log(`Classification de la race : ${classification}`);
      console.log(`Durée de vie moyenne de la race : ${lifespan}`);

      // étape 4 : ben c'est à vous ! affichez maintenant les infos dans le DOM avec la mise en forme que vous voulez ;)
    });
});
