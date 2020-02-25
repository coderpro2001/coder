<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX Time guys !</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>This is day #15</h1>
    <div>
        <form id="search-form" action="" method="post">
            <input type="text" name="username" id="username" placeholder="Search for user name">
            <button type="submit">Search</button>
        </form>
    </div>
    <hr>
    <button id="list-users">List users</button>
    <hr>
    <button id="ajax">Requête AJAX</button>
    <div id="users-list"></div>
    <script src="assets/js/app.js"></script>
</body>
</html>