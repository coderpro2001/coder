<?php

    // Documentation API Github : https://developer.github.com/v3/guides/

    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/user/repos');

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // set <header>
    // ici la valeur de User-Agent doit être votre nom d'utilisateur github
    $headers = [
        'User-Agent: username',
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // set authentication
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // username et userpassword doivent être remplacés par vos identifiants github
    curl_setopt($ch, CURLOPT_USERPWD, 'username:userpassword');

    // execute request
    // $output contains the output string
    $output = json_decode(curl_exec($ch));

    // close curl resource to free up system resources
    curl_close($ch);

    // send response to Javascript
    echo json_encode([
        'status' => 'Success',
        'payload' => $output,
    ]);
