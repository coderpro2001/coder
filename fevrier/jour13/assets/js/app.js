// console.log("Better be sleeping !");

///////////////
// variables //
///////////////

// declaration de variable et affectation de valeur
// on déclare une variable en utilisant les mots clé var ou let suivi du nom qu'on veut donner à la variable
// on n'est pas obligé de lui affecter une valeur au moment de sa déclaration
let day;

// pour affecter une valeur à la variable qu'on vient de créer, on utilise l'opérateur =
day = "jour 13";

// DEBUG de la valeur de la variable dans la console du navigateur
console.log(day);

// on peut réaffecter une valeur à une variable et donc modifier sa valeur initiale
day = "jour 14";

// DEBUG en console
console.log(day);

// déclaration de constante
// une constante est une variable spéciale dont la valeur une fois définie ne peut pas être modifiée
const organisme = "Simplon";

console.log(organisme);

// la ligne suivante va provoquer une erreur car on ne peut pas réaffecter une valeur à une constante
// organisme = "Afpa";

////////////////
// conditions //
////////////////

let taille = 200;

// if(), if() ... else, if() ... else if() ... else

// if() : si la condition est vraie, j'exécute le code entre les {}

// if() ... else : si la condition est vraie, j'exécute le code entre les {}, sinon j'exécute le code qui est dans else

// if() ... else if() ... else : si la condition est vraie, j'exécute le code entre les {}, sinon si la condition suivante est vraie j'exécute le code qui est dans le else if() sinon si aucune condition n'est vraie j'exécute le code dans le else

// if (taille >= 190) {
//   console.log("Trop grand !");
// } else if (taille >= 120) {
//   console.log("Amuse toi !");
// } else {
//   console.log("Trop petit !");
// }

// switch()

// Je vérifie la valeur de ma variable de référence et j'exécute le code qui correspond aux différents cas que j'ai prévu
// si aucun cas ne correspond j'exécute le code par défaut
switch (true) {
  case taille >= 190:
    console.log("Trop grand !");
    break;
  case taille >= 120:
    console.log("Amuse toi !");
    break;
  default:
    console.log("Trop petit !");
    break;
}

// WARNING : attention à l'ordre des conditions dans le cas de conditions multiples

/////////////////
// les boucles //
/////////////////

// for()

// on part de la valeur de départ d'une variable compteur et on exécute le code tant que la valeur max du compteur n'est pas atteinte
// a chaque itération le compteur augmente d'1
// on peut très bien augmenter la valeur de l'incrémentation si nécessaire :
// si je veux augmenter 1 de 5 à chaque itération : i = i+5
for (let i = 0; i < 10; i++) {
  console.log("On est à l'itération", i);
}

// foreach(function(element_du_tableau) { // code à exécuter pour chaque élément})

// foreach() est utilisé pour parcourir des tableaux à une ou plusieurs dimensions
let tableau = [1, 2, 3, 4, 5];

// équivalent php
// $tableau = [1, 2, 3];

// foreach($tableau as $elem) {
//     echo $elem
// }

// on part du tableau sur lequel on veut boucler et on utilise la méthode foreach() sur de cet objet grâce à l'opérateur "."
// à chaque itération on va faire quelque chose sur l'élément en cours, on a donc besoin d'une fonction (callback) qui va prendre en paramètre une variable qui représente l'élément sur lequel on se trouve.
// On peut donner le nom qu'on veut à cette variable, mais une bonne pratique est de lui donner un nom qui représente l'élément
tableau.forEach(function(element) {
  console.log(element);
});

// while()

// comme pour la boucle for() on a une variable compteur à laquelle on affecte une valeur de départ
let i = 0;

// tant que la valeur max n'est pas atteinte on exécute le code
while (i < 10) {
  console.log("On est à l'itération de la boucle while ", i);
  // après chaque itération on augmente le compteur
  i++;
}

// WARNING : si vous oubliez d'incrémenter le compteur dans la boucle, vous générez une boucle infinie et votre navigateur crashe

////////////
// le DOM //
////////////

// le DOM (Document Object Model) en JS est une sorte de table des matières ou une représentation virtuelle de votre structure HTML qui permet à JS d'y accéder et de la modifier
// le DOM est généré par le navigateur quand il lit (ou parse) votre code

// différentes méthodes (ou fonctions) JS pour accéder à des éléments du DOM et récupérer leur référence
// on utilise ces méthodes sur un élément du DOM qui peut être document (la totatité de votre document HTML) ou un autre élément, par exemple une div

// getElementsByTagName() : retourne une liste (tableau) correspondant aux balises HTML trouvées
// prend en paramètre une balise HTML valide (div, p, span, h1, ...)

const p = document.getElementsByTagName("p");
console.log(p);

// getElementsByClassName() : retourne une liste (tableau) correspondant aux trouvés qui ont la classe passée en paramètre
// prend en paramètre un nom de classe

const boxes = document.getElementsByClassName("box");
console.log(boxes);

// getElementById() : retourne la référence de l'élément HTML correspondant à l'ID passée en paramètre
// prend en paramètre un nom d'id'

const div = document.getElementById("div");
console.log(div.innerHTML);

// querySelector() : retourne la référence du premier élément HTML correspondant au sélecteur CSS passé en paramètre
// prend en paramètre un sélecteur CSS

const wrapper = document.querySelector("#div");
console.log(wrapper);

// querySelectorAll() : retourne la référence de tous les éléments HTML correspondants au sélecteur CSS passé en paramètre
// prend en paramètre un sélecteur CSS

const wrapperBoxes = document.querySelectorAll("#div .box");
console.log(wrapperBoxes);

//////////////////////////////////////////////////
// modifier le contenu HTML d'un élément du DOM //
//////////////////////////////////////////////////

// la propriété innerHTML d'un élément du DOM permet d'accéder à son centenu et de le lire ou le modifier

div.innerHTML = "<h2>Texte qui remplace ma div d'origine</h2>";

// un exemple d'utilisation dans une boucle
const boxes = document.querySelectorAll("div.wrapper");
console.log(boxes);

for (let i = 0; i < boxes.length; i++) {
  //   console.log(boxes[i]);
  boxes[i].style.fontSize = "1.5rem";
  boxes[i].style.color = "red";
}

// récupérer le premier élément du tableau
// ici [0] représente l'index de l'élément qu'on recherche dans le tableau
boxes[0].style.color = "green";

/////////////////////////////////
// réagir à un événement en JS //
/////////////////////////////////

// on utilise pour ça un écouteur d'événement ou addEventListener() qui est une méthode (fonction) JS

// on récupère la référence du tag HTML button et on le stocke dans une variable
const button = document.querySelector("button");

// on ajoute un écouteur d'événement sur le click
button.addEventListener("click", function() {
  // pour chaque élément de notre tableau boxes on va faire qq chose
  boxes.forEach(function(elem) {
    // pour l'élément en cours on toggle la classe hide
    elem.classList.toggle("hide");
  });
});

// exemple d'utilisation pour récupérer la valeur d'un input et l'utiliser pour faire une recherche google

// get DOM elements
const searchInput = document.getElementById("searchInput");
const form = document.getElementById("form");

// add listener on input change
searchInput.addEventListener("change", function(event) {
  // create empty variable to store the query
  let query = "";
  //   set query value to input value
  query = event.target.value;
  //   when form is submitted
  form.addEventListener("submit", function(e) {
    //   prevent form submission
    e.preventDefault();
    // open google window and pass query as parameter
    window.open(`https://google.com?q=${query}`);
  });
});

//////////////////////////////////////////
// création dynamique d'éléments du DOM //
//////////////////////////////////////////

// comme JS a accès au DOM, on peut modifier, supprimer ou créer des éléments à la volée

// cette fonction prend en paramètre une variable index et va créer un paragraphe qui aura la classe "parag-" et la valeur d'index
// si index vaut 1, la classe sera parag-1
function createParagraph(index) {
  p = document.createElement("p");
  p.classList.add("parag-" + index);
  return p;
}

// on sélection l'élément du DOM qui va contenir nos paragraphes
const holder = document.querySelector(".holder");

// on crée une boucle qui a chaque itération va invoquer la fonction createParagraph(), créer un nouveau paragraphe et l'ajouter au contenu de l'élément qu'on a sélectionné
for (let i = 0; i < 10; i++) {
  const parag = createParagraph(i);
  // la méthode (fonction) appendChild() permet d'ajouter un élément enfant (child) à un élément du DOM
  holder.appendChild(parag);
}

const btnOn = document.querySelector("#on");

btnOn.addEventListener("click", () => {
  console.log(btnOn.dataset.action);
});
