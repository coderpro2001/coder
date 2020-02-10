<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1><?php echo $titre1 ?? "TITRE DE LA PAGE" ?></h1>
        <nav>
            <a href="index.php">accueil</a>
            <a href="produits.php">mes produits</a>
            <a href="contact.php">contactez-nous</a>
        </nav>
    </header>
    <main>
