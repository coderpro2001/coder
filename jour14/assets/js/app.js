console.log("In Da House !");

// fun fun functions !
// déclaration d'une fonction sans paramètres
function sayHello() {
  return "Hello ";
}

// invocation
sayHello();

// déclaration d'une fonction avec paramètre par défaut
// si aucun paramètre n'est passé à la fonction lors de l'invocation, c'est la valeur du paramètre par défaut qui sera utilisée
function greet(name = "John") {
  let message = sayHello();
  console.log(message + name);
}

// invocation avec un paramètre
greet("Brian");

// stocker une fonction dans une variable
// ici c'est le code de la fontion qui est stocké et pas la valeur qu'elle retourne
const addNumbers = function(nb1, nb2) {
  return nb1 + nb2;
};

// dans la variable result on stocke le résultat retourné par la fonction addNumbers()
const result = addNumbers(10, 50);

// DEBUG en console
console.log(result);

//////////////////////////
// différentes syntaxes //
//////////////////////////

// déclaration classique d'une fonction

// function count(max) {
//   for (let index = 0; index < max.length; index++) {
//     console.log("Itération n° " + max);
//   }
// }

// syntaxe fonctions fléchées ES6 (dernière évolution majeure JS)

// si on ne passe qu'un paramètre à la fonction, on peut omettre les parenthèses
// si on exécute qu'une instruction, on peut omettre les {}
const count = (nb1, nb2 = 10) => console.log(nb1 + nb2);

// invocation de la fonction
count(20, 50);

//////////////////////
// les objets en JS //
//////////////////////

// comparaison entre la déclaration d'une variable contenant un tableau et un objet
// tableau
const tableau = [];

// objet
// l'objet est créé avec un initialisateur
const user = {};

// DEBUG console
console.log(user);

// création de propriétés et affectation de valeurs
// on crée une propriété name
user.name = "Brian";
// on crée une propriété country
user.country = "Uk";
// on crée une propriété sayHello qui contient une fonction
user.sayHello = function() {
  console.log("hello my name is " + user.name + "I live in " + user.country);
};

// DEBUG console
console.log(user.name, user.country);

console.log(user.sayHello());

// creation d'un objet avec un constructeur
// un constructeur est une fabrique d'objet : il décrit ses propriétés et ses méthodes et permet de créer autant d'objets qu'on le souhaite

// ici on crée un constructeur User qui a 3 propriétés
// le mot clé "this" se réfère au contexte du constructeur
function User(name, country, age) {
  (this.name = name), (this.country = country), (this.age = age);
}

// création d'un nouvel objet (une instance du constructeur)
const john = new User("John", "USA", 23);
// DEBUG console
console.log(john);

// on peut accéder à ses propriétés
console.log(john.name);
console.log(john.country);
console.log(john.age);

//////////////////////////////////////
// projet d'application random user //
//////////////////////////////////////

// tableau d'objets
const users = [
  {
    id: 1,
    name: "Leanne Graham",
    username: "Bret",
    email: "Sincere@april.biz",
    address: {
      street: "Kulas Light",
      suite: "Apt. 556",
      city: "Gwenborough",
      zipcode: "92998-3874",
      geo: {
        lat: "-37.3159",
        lng: "81.1496"
      }
    },
    phone: "1-770-736-8031 x56442",
    website: "hildegard.org",
    company: {
      name: "Romaguera-Crona",
      catchPhrase: "Multi-layered client-server neural-net",
      bs: "harness real-time e-markets"
    }
  },
  {
    id: 2,
    name: "Ervin Howell",
    username: "Antonette",
    email: "Shanna@melissa.tv",
    address: {
      street: "Victor Plains",
      suite: "Suite 879",
      city: "Wisokyburgh",
      zipcode: "90566-7771",
      geo: {
        lat: "-43.9509",
        lng: "-34.4618"
      }
    },
    phone: "010-692-6593 x09125",
    website: "anastasia.net",
    company: {
      name: "Deckow-Crist",
      catchPhrase: "Proactive didactic contingency",
      bs: "synergize scalable supply-chains"
    }
  },
  {
    id: 3,
    name: "Clementine Bauch",
    username: "Samantha",
    email: "Nathan@yesenia.net",
    address: {
      street: "Douglas Extension",
      suite: "Suite 847",
      city: "McKenziehaven",
      zipcode: "59590-4157",
      geo: {
        lat: "-68.6102",
        lng: "-47.0653"
      }
    },
    phone: "1-463-123-4447",
    website: "ramiro.info",
    company: {
      name: "Romaguera-Jacobson",
      catchPhrase: "Face to face bifurcated interface",
      bs: "e-enable strategic applications"
    }
  },
  {
    id: 4,
    name: "Patricia Lebsack",
    username: "Karianne",
    email: "Julianne.OConner@kory.org",
    address: {
      street: "Hoeger Mall",
      suite: "Apt. 692",
      city: "South Elvis",
      zipcode: "53919-4257",
      geo: {
        lat: "29.4572",
        lng: "-164.2990"
      }
    },
    phone: "493-170-9623 x156",
    website: "kale.biz",
    company: {
      name: "Robel-Corkery",
      catchPhrase: "Multi-tiered zero tolerance productivity",
      bs: "transition cutting-edge web services"
    }
  },
  {
    id: 5,
    name: "Chelsey Dietrich",
    username: "Kamren",
    email: "Lucio_Hettinger@annie.ca",
    address: {
      street: "Skiles Walks",
      suite: "Suite 351",
      city: "Roscoeview",
      zipcode: "33263",
      geo: {
        lat: "-31.8129",
        lng: "62.5342"
      }
    },
    phone: "(254)954-1289",
    website: "demarco.info",
    company: {
      name: "Keebler LLC",
      catchPhrase: "User-centric fault-tolerant solution",
      bs: "revolutionize end-to-end systems"
    }
  },
  {
    id: 6,
    name: "Mrs. Dennis Schulist",
    username: "Leopoldo_Corkery",
    email: "Karley_Dach@jasper.info",
    address: {
      street: "Norberto Crossing",
      suite: "Apt. 950",
      city: "South Christy",
      zipcode: "23505-1337",
      geo: {
        lat: "-71.4197",
        lng: "71.7478"
      }
    },
    phone: "1-477-935-8478 x6430",
    website: "ola.org",
    company: {
      name: "Considine-Lockman",
      catchPhrase: "Synchronised bottom-line interface",
      bs: "e-enable innovative applications"
    }
  },
  {
    id: 7,
    name: "Kurtis Weissnat",
    username: "Elwyn.Skiles",
    email: "Telly.Hoeger@billy.biz",
    address: {
      street: "Rex Trail",
      suite: "Suite 280",
      city: "Howemouth",
      zipcode: "58804-1099",
      geo: {
        lat: "24.8918",
        lng: "21.8984"
      }
    },
    phone: "210.067.6132",
    website: "elvis.io",
    company: {
      name: "Johns Group",
      catchPhrase: "Configurable multimedia task-force",
      bs: "generate enterprise e-tailers"
    }
  },
  {
    id: 8,
    name: "Nicholas Runolfsdottir V",
    username: "Maxime_Nienow",
    email: "Sherwood@rosamond.me",
    address: {
      street: "Ellsworth Summit",
      suite: "Suite 729",
      city: "Aliyaview",
      zipcode: "45169",
      geo: {
        lat: "-14.3990",
        lng: "-120.7677"
      }
    },
    phone: "586.493.6943 x140",
    website: "jacynthe.com",
    company: {
      name: "Abernathy Group",
      catchPhrase: "Implemented secondary concept",
      bs: "e-enable extensible e-tailers"
    }
  },
  {
    id: 9,
    name: "Glenna Reichert",
    username: "Delphine",
    email: "Chaim_McDermott@dana.io",
    address: {
      street: "Dayna Park",
      suite: "Suite 449",
      city: "Bartholomebury",
      zipcode: "76495-3109",
      geo: {
        lat: "24.6463",
        lng: "-168.8889"
      }
    },
    phone: "(775)976-6794 x41206",
    website: "conrad.com",
    company: {
      name: "Yost and Sons",
      catchPhrase: "Switchable contextually-based project",
      bs: "aggregate real-time technologies"
    }
  },
  {
    id: 10,
    name: "Clementina DuBuque",
    username: "Moriah.Stanton",
    email: "Rey.Padberg@karina.biz",
    address: {
      street: "Kattie Turnpike",
      suite: "Suite 198",
      city: "Lebsackbury",
      zipcode: "31428-2261",
      geo: {
        lat: "-38.2386",
        lng: "57.2232"
      }
    },
    phone: "024-648-3804",
    website: "ambrose.net",
    company: {
      name: "Hoeger LLC",
      catchPhrase: "Centralized empowering task-force",
      bs: "target end-to-end models"
    }
  }
];

// déclaration d'une fonction qui génère un entier aléatoire compris entre 0 et la longueur du tableau users et retourne un utilisateur choisi au hasard dans le tableau
function getRandomUser() {
  const randomIndex = Math.floor(Math.random() * users.length);

  const user = users[randomIndex];

  return user;
}

// on récupère la référence aux éléments du DOM dont on a besoin
const userBtn = document.getElementById("userBtn");
const userInfo = document.getElementById("userInfo");

// on ajoute un écouteur d'événement au click sur le bouton
userBtn.addEventListener("click", function() {
  // quand on clique, on invoque la fonction getRandomUser() et on stocke l'utilisateur retourné dans une variable user
  // user contient maintenant un objet
  const user = getRandomUser();

  // on affiche la valeur des propriétés du user dans un template HTML à l'intérieur de l'élément qu'on a sélectionné
  userInfo.innerHTML = `
  <div>
    <h1>Nom de l'utilisateur : ${user.name}</h1>
    <p>Id de l'utilisateur : ${user.id}</p>
    <p>Email de l'utilisateur : ${user.email}</p>
    <p>Username de l'utilisateur : ${user.username}</p>
  </div>`;
});
