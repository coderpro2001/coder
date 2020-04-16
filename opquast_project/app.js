console.log("JS loaded");

// Je sélectionne les éléments du DOM
const glossaryBtn = document.querySelector("#glossary");
const practicesBtn = document.querySelector("#practices");

// je crée mes eventlistener
// TODO optimiser le clic sur les boutons

// pour le glossaire
glossaryBtn.addEventListener("click", function () {
  // ici je fais quoi ?
  fetch("process.php?query=glossary")
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      console.log(data);
      // ici je vais traiter mon objet javascript et mettre à jour mon html
    });
});

// pour les bonnes pratiques
practicesBtn.addEventListener("click", function () {
  fetch("process.php?query=practice")
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      console.log(data);
    });
});
