console.log("JS loaded");

// Je sélectionne les éléments du DOM
const glossaryBtn = document.querySelector("#glossary");
const practicesBtn = document.querySelector("#practice");

const buttons = document.querySelectorAll("button");

console.log(buttons);

buttons.forEach(function (button) {
  button.addEventListener("click", function (event) {
    // console.log(event.target);
    const id = event.target.id;
    const dataId = event.target.dataset.id;
    console.log(dataId);
    // console.log(id);
    fetch(`process.php?query=${id}`)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        console.log(data);
        // ici je vais traiter mon objet javascript et mettre à jour mon html
      });
  });
});

// je crée mes eventlistener
// TODO optimiser le clic sur les boutons

// // pour le glossaire
// glossaryBtn.addEventListener("click", function () {
//   // ici je fais quoi ?
//   fetch("process.php?query=glossary")
//     .then(function (response) {
//       return response.json();
//     })
//     .then(function (data) {
//       console.log(data);
//       // ici je vais traiter mon objet javascript et mettre à jour mon html
//     });
// });

// // pour les bonnes pratiques
// practicesBtn.addEventListener("click", function () {
//   fetch("process.php?query=practice")
//     .then(function (response) {
//       return response.json();
//     })
//     .then(function (data) {
//       console.log(data);
//     });
// });
