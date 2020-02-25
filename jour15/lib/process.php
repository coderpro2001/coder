<?php

//////////////////////////
// réponse texte simple //
//////////////////////////

// echo 'Voilà la réponse du script PHP';

////////////////////////
// réponse objet JSON //
////////////////////////

// $user = [
//     'id' => '1',
//     'username' => 'Brian',
//     'email' => 'brian@gmail.com',
// ];

// echo json_encode([
//     'status' => 'Success',
//     'message' => 'Utilisateur trouvé dans la BDD',
//     'data' => $user,
// ]);

///////////////////////////////////
// réponse tableau d'objets JSON //
///////////////////////////////////

// $users = [
//     [
//         'id' => '1',
//         'name' => 'John Doe',
//         'email' => 'john.doe@gmail.com',
//     ],
//     [
//         'id' => '2',
//         'name' => 'Jane Doe',
//         'email' => 'jane.doe@gmail.com',
//     ],
//     [
//         'id' => '3',
//         'name' => 'Kevin Mitnick',
//         'email' => 'kevin.mitnick@gmail.com',
//     ],
//     [
//         'id' => '4',
//         'name' => 'Edward Snowden',
//         'email' => 'edward.snowden@gmail.com',
//     ],
//     [
//         'id' => '5',
//         'name' => 'Julian Assange',
//         'email' => 'julian.assange@gmail.com',
//     ],
// ];

// echo json_encode($users);

////////////////////////
// création d'un user //
////////////////////////

// $userName = $_REQUEST['username'];

// echo json_encode([
//     'status' => 'Success',
//     'data' => "Username {$userName} successfully created",
// ]);

/////////////////////////////////////////////////
// récupération d'un objet JSON envoyé en AJAX //
/////////////////////////////////////////////////

// récupération d'un objet JSON
// $data = json_decode(file_get_contents('php://input'), true);

// echo json_encode([
//     'status' => 'success',
//     'payload' => $data,
// ]);
