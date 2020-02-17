// on déclare une variable en utilisant le mot clé var ou let suivi du nom de la variable
// on peut lui affecter une valeur immédiatement ou plus tard
let name;

// affectation de valeur
name = "Brian";

// affichage de la valeur de la variable dans la console (DEBUG)
console.log(name);

// on déclare une variable en utilisant le mot clé const suivi du nom de la variable
const DOMAIN = "example.com";

console.log(DOMAIN);

// on ne peut pas ré affecter une valeur à une constante une fois définie
// DOMAIN = "google.com"; provoquera une erreur

// les boucles
// boucle for
for (let i = 0; i < 20; i++) {
  console.log("Itération n° ", i);
}

// boucle forEach pour boucler sur les tableaux
// tableau simple
let tableau = ["lionel", "brian", "John", "Mary", "Lila"];

tableau.forEach(function(elem) {
  console.log(elem);
});

// tableau à 2 dimensions
let tableau2 = [
  ["lionel", 25],
  ["brian", 52],
  ["john", 35],
  ["mary", 30],
  ["lila", 42]
];

tableau2.forEach(function(elem) {
  console.log("Hello", elem);
  elem.forEach(function(item) {
    console.log(item);
  });
});

// même boucle en utilisant une boucle for()
// for (let i = 0; i < tableau2.length; i++) {
//   //   console.log(tableau2[index]);

//   for (let j = 0; j < tableau2[i].length; j++) {
//     console.log(tableau2[i][j]);
//   }
// }

// boucle while
// la boucle sera exécutée tant que la condition est vraie (true)
// ne pas oublier d'incrémenter le compteur à chaque itération, sinon boucle infinie
let counter = 0;
while (counter < 20) {
  console.log("Iteration n° ", counter);
  counter++;
}

// Les conditions
// if() / if() ... else / if() ... else if () ... else
let age = 60;
if (age >= 50) {
  console.log("C'est l'heure d'aller au lit");
} else if (age > 18) {
  console.log("Vas-y tu peux entrer");
} else {
  console.log("Va jouer");
}

// switch()
switch (true) {
  case age > 50:
    console.log("C'est l'heure d'aller au lit");
    break;
  case age > 18:
    console.log("Vas-y tu peux entrer");
    break;
  default:
    console.log("Va jouer");
    break;
}

// les fonctions
prenom = "Lionel";

// on peut donner au paramètre d'une fonction une valeur par défaut
// si aucune valeur n'est fournie lors de l'invocation de la fonction, c'est la valeur par défaut qui sera utilisée
function sayHello(name = "Brian") {
  console.log("Hello ", name);
}

sayHello(prenom);

// écouter un événement
function display() {
  console.log("Document cliqué");
}

// on attache un écouteur sur le click à l'objet window
// si l'événement a lieu, la fonction display() sera exécutée (fonction callback)
window.addEventListener("click", display);
