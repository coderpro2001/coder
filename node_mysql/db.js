// on importe le package mysql
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

module.exports = connection;
