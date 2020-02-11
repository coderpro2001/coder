<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>titre cv</title>
    <style>

/* SI ON VEUT CONTROLER LA HAUTEUR height */
section {
    min-height:100vh; /* vh HAUTEUR DE L'ECRAN 100vh => 100% */
    padding-top: 80px;
}

/* SI ON VEUT QUE LE MENU SOIT TOUT LE TEMPS VISIBLE */
header {
    position:fixed; /* NE PAS OUBLIER LES COORDONNEES top ET left */
    top:0;
    left:0;
    background-color: rgba(200, 200, 200, 0.9); /* TRANSPARENCE POUR VOIR LE FOND */
    width:100%;
    padding:16px;
    opacity:0.5;
    height:30px;
    transition: all 0.5s linear;
} 

/* CSS QUAND LA SOURIS PASSE SUR L'ELEMENT */
/* ATTENTION: PAS DE SOURIS SUR LES SMARTPHONES ET LES TABLETTES */

header:hover {
    opacity:1;
    height:60px;
}

nav a {
    font-size:12px;
    transition: all 0.25s linear;
    text-decoration: none; /* ENLEVER LE SOULIGNE SUR LE TEXTE */
    border: 1px solid orange;
    padding: 8px; /* ESPACE VIDE ENTRE LE TEXTE ET LA BORDURE */
    border-radius:16px;
    box-shadow: 1px 2px 3px #000000;
}

nav a:hover {
    color: red;
    /* font-size:16px; */
    background-color:rgb(255, 255, 255);
    /* transform:rotate(-400deg); */
    display:inline-block;
    box-shadow: none;
}

p:hover {
    border:1px solid green;
}

.revenir {
    position:fixed;
    right:0;
    bottom:0;
    width:60px;
    height:60px;
    border-radius: 50%;
    background-color: lightblue;
}

/* 
    QUAND EN HTML ON A id="s1" 
    ALORS LE SELECTEUR CSS EST #s1
*/
#s1 {
    background-image: url('assets/img/bureau.jpg');
    background-size: cover;
}

#s1 h2 {
    color:orange;
    text-align:center;
    text-shadow: 1px 2px 4px #ffaaaa;
}

#s1 p {
    color:#ffffff;
    text-shadow: 1px 2px 4px #000000;
    max-width:400px;
    text-align:center;
    display:block;
    margin:0 auto;
}

/* FLEX POUR FAIRE UNE LIGNE */
/* JE SELECTIONNE LA BALISE QUI A LA CLASSE container */
.container {
    display:flex;
    width:100%;
    flex-wrap: wrap;
}

/* JE SELECTIONNE LES IMAGES QUI SONT ENFANTS DE LA BALISE AVEC LA CLASSE container */
.container img {
    margin:10px;
    max-width:100%;
    width: calc(100% / 3 - 20px);  /* PRATIQUE POUR LES DIVISIONS AVEC VIRGULE */
    object-fit: cover;
    height:300px;
}

    </style>
</head>
<body class="<?php echo $classeBody ?>">
    <header>
        <h1><?php echo $titrePage ?? "" ?></h1>
        <nav>
            <!-- POUR ALLER SUR UNE ANCRE ON UTILISE LE SELECTEUR # -->
            <a href="#s1">section1</a>
            <a href="#s2">section2</a>
            <a href="#s3">section3</a>
            <a href="#s4">section4</a>
            <a href="#s5">section5</a>
        </nav>
    </header>
    <main id="haut">


