// on importe express
const express = require("express");

// on importe la connexion à la db
const connection = require("./db");

// on instancie le router
const router = express.Router();

// on va créer une route qui va nous permettre de récupérer les users de notre database et de les afficher en console
router.get("/", (request, response) => {
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
router.get("/:id", (request, response) => {
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
    // console.clear();
    // console.log(result);
    response.status(200);
    response.send(result);
  });
});

// je vous laisse créer la route qui va permettre d'effacer dans la bdd un user en fonction de son id
// attention à la méthode http utilisée !
router.delete("/:id", (request, response) => {
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

// on va créer une route permettant d'insérer un nouvel utilisateur dans la bdd
// ici on utilise la fonction json() qu'on a importée. Cette fonction est un middleware (une fonction qui sera exécutée systématiquement entre le moment ou la requête arrive au serveur et le moment où la réponse est envoyée)
// pour notre route, a chaque fois que le serveur recevra une requête en POST sur /users, il exécutera json() pour transformer le json reçu en js, ensuite la fonction callback sera exécutée
router.post("/", (request, response) => {
  // création d'un user pour tester la route
  // const user = {
  //   name: "Zakaria",
  //   email: "zak@gmail.com",
  // };

  // on récupère la valeur de la propriété body de la requête
  // elle va contenir les données d'un formulaire de création d'un user
  const user = request.body;

  const sql = "INSERT INTO user SET ?";

  connection.query(sql, [user], (err, rows) => {
    if (err) {
      response.status(500);
      response.send("Erreur enregistrement utilisateur");
    }
    response.status(200);
    response.send(`Utilisateur créé, ${rows.affectedRows} modifiés`);
  });
});

// on va créer la route qui va nous permettre de faire un update dans la bdd
router.put("/:id", (request, response) => {
  const id = request.params.id;
  const user = request.body;

  const sql = "UPDATE user SET ? WHERE id = ?";

  connection.query(sql, [user, id], (error, rows) => {
    if (error) {
      response.status(500);
      response.send(`Imposssible de mettre à jour l'utilisateur ${id}`);
    }
    response.status(200);
    response.send(`Utilisateur ${id} mis à jour`);
  });
});

module.exports = router;
