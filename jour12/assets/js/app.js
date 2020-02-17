let name;

name = "Brian";

console.log(name);

const DOMAIN = "example.com";

console.log(DOMAIN);

// on ne peut pas ré affecter une valeur à une constante une fois définie
// DOMAIN = "google.com";

// les boucles
// boucle for
// for (let index = 0; index < 20; index++) {
//   console.log("Itération n° ", index);
// }

// boucle forEach
// let tableau = ["lionel", "brian", "John", "Mary", "Lila"];
let tableau2 = [
  ["lionel", 25],
  ["brian", 52],
  ["john", 35],
  ["mary", 30],
  ["lila", 42]
];

// for (let i = 0; i < tableau2.length; i++) {
//   //   console.log(tableau2[index]);

//   for (let j = 0; j < tableau2[i].length; j++) {
//     console.log(tableau2[i][j]);
//   }
// }
tableau2.forEach(function(element) {
  //   console.log("Hello", element);
  element.forEach(function(item) {
    console.log(item);
  });
});

// utilisation boucle for pour boucler sur un tableau
// for (let index = 0; index < tableau.length; index++) {
//   console.log("Hello ", tableau[index]);
// }

// boucle while
// let index = 0;
// while (index < 20) {
//   document.write("Iteration n° ", index);
//   index++;
// }

// Les conditions
let age = 60;
if (age >= 50) {
  console.log("C'est l'heure d'aller au lit");
} else if (age > 18) {
  console.log("Vas-y tu peux entrer");
} else {
  console.log("Va jouer");
}

// switch (age) {
//   case age > 50:
//     console.log("C'est l'heure d'aller au lit");
//     break;
//   case age > 18:
//     console.log("Vas-y tu peux entrer");
//     break;
//   default:
//     console.log("Va jouer");
//     break;
// }

// les fonctions
prenom = "Lionel";

// function sayHello(name = "Brian") {
//   console.log("Hello ", name);
// }

// sayHello(prenom);

// écouter un événement
function display() {
  console.log("Document cliqué");
}

window.addEventListener("click", display);
