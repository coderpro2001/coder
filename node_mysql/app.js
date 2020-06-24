// c'est dans le fichier index.js que je vais créer mon serveur node
// on importe le framework express
const express = require("express");

// on importe mysql
const mysql = require("mysql");

// on intialise la connection à la db
const connection = mysql.createConnection({
  host: "localhost",
  user: "letitbe133",
  password: "Tinjiful",
  database: "user_db",
});

// on établit la connection à la db
connection.connect((error) => {
  if (error) {
    return console.log(error.message);
  }
  console.log("Connection ok à la bdd");
});

// on va créer une instance du serveur
const app = express();

// on va définir sur quel port le serveur va écouter les requêtes http
const port = "5000";

// on créer une première route en GET sur l'url /
app.get("/", (request, response) => {
  // on va renvoyer un status http pour la réponse
  response.status(200);
  response.send("<h1>Page d'accueil</h1>");
});

// on va créer une route qui va nous permettre de récupérer les users de notre database et de les afficher en console
app.get("/api/users", (request, response) => {
  // c'est ici qu'on va écrire le code qui va nous permettre de faire la requête à la bdd
  const sql = "SELECT * FROM user";

  // ensuite je vais exécuter ma requête
  connection.query(sql, (error, result) => {
    if (error) return console.error(error);
    console.log(result);
    response.send(result);
  });
});

// on va créer une route qui nous permet de récupérer un user par son id
// l'id sera récupérée à partir de l'url
// je dois récupérer dans l'url le paramètre id de manière dynamique
// http://localhost:5000/users/1
app.get("/users/:id", (request, response) => {
  // je crée ma requête sql
  const sql = "SELECT * FROM user WHERE id = ?";
  const id = request.params.id;

  //   je vais exécuter ma requête
  connection.query(sql, [id], (error, result) => {
    if (error) {
      console.error(error.message);
      return;
    }
    // ici j'efface ma console pour que ce soit plus facile à lire
    console.clear();
    console.log(result);
    response.status(200);
    response.send(`Affichage de l'utilisateur avec l'id ${id}`);
  });
});

// je vous laisse créer la route qui va permettre d'effacer dans la bdd un user en fonction de son id
// attention à la méthode http utilisée !
app.delete("/users/:id", (request, response) => {
  const id = request.params.id;

  const sql = "DELETE FROM user WHERE id = ?";

  connection.query(sql, [id], (error, result) => {
    if (error) {
      response.status(500);
      console.log(result);
      response.send("Erreur serveur");
    }
    response.status(200);
    response.send(`Utilisateur ${id} supprimé`);
  });
});

// on ve dire au serveur d'écouter les requêtes entrantes
app.listen(port, () => {
  console.log(`Serveur démarré sur le port ${port}`);
});
