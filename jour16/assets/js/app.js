// soumission d'un formulaire en AJAX
// méthode fetch()

// on récupère la référence du formulaire dans le DOM
const form = document.getElementById("search-form");

// on crée un listener pour le formulaire sur l'événement submit
// la fonction qui sera exécutée lors de la soumission prend en paramètre un objet qui représente l'événement généré
form.addEventListener("submit", function(event) {
  // on veut récupérer les données du formulaire avant qu'elles soient transmises puisqu'on va faire un appel AJAX vers le fichier PHP qui fera le traitement des données
  // on empêche la soumission du formulaire lors de l'event submit grâce à la méthode preventDefault() de l'objet événement
  event.preventDefault();

  //   on utilise le constructeur d'objet FormData() pour créer un nouvel objet qui contiendra les données et on lui passe en paramètre la référence du formulaire
  const data = new FormData(form);

  //   DEBUG
  // la méthode entries() de l'objet FormData permet d'avoir accès aux paires clés/valeurs des inputs :
  // clé :  l'attribut name du formulaire
  // valeur : contenu de l'input saisi par l'utilisateur
  //   const entries = data.entries();

  //   // Affichage des paires clefs/valeurs
  //   for (var entry of entries) {
  //     console.log(entry);
  //   }

  //   on utilise fetch pour envoyer la requête et on passe 2 paramètres
  // l'URI (le chemin) vers le fichier
  //  un objet de configuration qui contient la méthode utilisée (GET, POST) et le contenu de la requête (les données sous la forme de clés/valeurs)
  fetch("lib/process.php", {
    method: "POST",
    body: data
  })
    //   on lit je JSON qui a été renvoyé
    .then(function(response) {
      return response.json();
    })
    // on a désormais accès à la réponse sous la forme d'un objet
    .then(function(payload) {
      console.log(payload);
    })
    // si une erreur se produit lors de la requête, on stoppe le script et on récupère l'erreur pour la traiter
    .catch(function(error) {
      console.log(error);
    });
});

// appel AJAX à un fichier PHP qui va contacter l'API Github et renvoyer une réponse contenant la liste des repos de l'utilisateur
fetch("lib/api.php")
  .then(res => res.json())
  .then(data => console.log(data));

// exemple de requête AJAX vers une API et affichage des données dans le code HTML
// const countries = document.getElementById("countries");

// fetch("https://restcountries.eu/rest/v2/all")
//   .then(res => res.json())
//   .then(data => {
//     console.log(data);
//     //   data contient un tableau de tous les pays retournés par l'API
//     for (let i = 0; i < data.length; i++) {
//       const div = document.createElement("div");
//       div.innerHTML = `
//             <h1>${data[i].name}</h1>
//             <img src=${data[i].flag} alt = ${data[i].name}/>
//         `;
//       countries.append(div);
//     }

//     console.log(data);
//   });
