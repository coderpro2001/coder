<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jour 13 - Javascript</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1  id="title">Jour 13</h1>
    <div id="div" class="wrapper hide">
        <div class="box">
            <h2>Section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit commodi quas illum ab, id praesentium provident architecto vel quo maiores minima deserunt labore at dolor neque, debitis rem voluptatibus saepe! Vitae mollitia ullam cumque fugiat, est ex doloremque, reprehenderit minima veniam quis itaque obcaecati modi sit praesentium omnis commodi autem?</p>
        </div>
        <div class="box">
            <h2>Section 2</h2>
            <p>Ipsum voluptate vero debitis dolores vitae? Dicta quaerat fuga culpa dolore hic, perferendis, ducimus iure, eaque dolorem cum quas dignissimos animi repellendus quam dolor asperiores commodi ullam facere cumque alias ut provident. Error aperiam dicta quis, inventore ipsum libero distinctio quisquam voluptatem consectetur aspernatur molestias commodi quam saepe exercitationem. Quas!</p>
        </div>
        <div class="box">
            <h2>Section 3</h2>
            <p>Dolores eaque illo nobis voluptate repellendus adipisci minus repellat commodi mollitia officiis, nemo quam fuga nihil culpa ipsum nulla nesciunt eos, quia temporibus accusantium cum sapiente. Aut, ipsa commodi, modi repudiandae a perferendis possimus eveniet neque perspiciatis porro nesciunt rem deleniti. Inventore ullam corporis a numquam nostrum dignissimos cum. Perspiciatis.</p>
        </div>
    </div>
    <button>Click me !</button>

    <hr>

    <form action="" id="form">
        <input type="text" name="" id="searchInput" placeholder="Tapez votre recherche">
        <button>Search</button>
    </form>

    <hr>

    <audio controls>
        <source src="assets/media/sound.mp3" type="audio/mpeg">
    </audio>

    <hr>

    <div class="holder"></div>

    <button id="on" data-action = "on">On</button>

    <!-- bonne pratique : positionner les scripts avant la fermeture du body et référencer un fichier externe -->
    <script src="assets/js/app.js"></script>
    <?php require_once 'script.php'; ?>
</body>
</html>