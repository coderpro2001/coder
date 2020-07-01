// DONE: create update method
// DONE: remove body-parser
// DONE: extract db connection to own file
// DONE: extract routes to own file
// TODO: use environment variables
// TODO: render frontend express.static
// TODO: move server files to api folder

// c'est dans le fichier index.js que je vais créer mon serveur node
// on importe le framework express
const express = require("express");

// ici je vais importer mon fichier routes
const usersRoutes = require("./users");

// const connection = require("./db");

// on importe la méthode json dans le module body-parser de node
// cette méthode va permettre de transformer des données au format json en objet javascript
// https://www.npmjs.com/package/body-parser
// on peut utiliser le body-parser natif d'express
// const { json } = require("body-parser");

// on va créer une instance du serveur
const app = express();

// on va définir sur quel port le serveur va écouter les requêtes http
const port = "5000";

// ici on définit les middlewares

// ici on va utiliser le middleware body-parser de manière globale pour toutes les routes
app.use(express.json());

// on va définir l'endroit où sont stockés nos fichiers statiques
app.use(express.static("./public"));

// on crée un middleware qui va gérer toutes les requêtes sur les routes commençant par /users
app.use("/users", usersRoutes);

app.get("/", (request, response) => {
  response.status(200);
  response.render("index");
});

// on ve dire au serveur d'écouter les requêtes entrantes
app.listen(port, () => {
  console.log(`Serveur démarré sur le port ${port}`);
});
