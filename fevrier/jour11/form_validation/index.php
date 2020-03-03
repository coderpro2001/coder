<?php
    // on importe notre librairie de validation
    require_once 'lib/validator.php';

    // on crée une variable qui contiendra notre message d'erreur et pour l'instant on lui affecte une chaine de caractères vide (pas encore d'erreur sur le formulaire)
    $errorMessage = '';

    // on vérifie si on a bien une requête et si elle n'est pas vide
    if (!empty($_REQUEST)) {
        // Détail du nettoyage manuel des inputs
        // $username = $_REQUEST['username'];
        // $email = $_REQUEST['email'];
        // $pwd = $_REQUEST['password'];
        // $cfm_pwd = $_REQUEST['confirm_pwd'];

        // nettoyage des inputs
        // $username = trim($username);
        // $username = htmlspecialchars($username);
        // $username = stripslashes($username);

        // $username = stripslashes(htmlspecialchars(trim($_REQUEST['username'])));
        // $email = stripslashes(htmlspecialchars(trim($_REQUEST['email'])));
        // $pwd = stripslashes(htmlspecialchars(trim($_REQUEST['password'])));
        // $cfm_pwd = stripslashes(htmlspecialchars(trim($_REQUEST['confirm_pwd'])));

        // on utilise la fonction validateInput() qu'on a créé dans notre lib et on lui passe la chaîne de caractère correspondant à l'input à nettoyer qu'on a reçue en GET
        $username = validateInput($_REQUEST['username']);
        $email = validateInput($_REQUEST['email']);
        $pwd = validateInput($_REQUEST['password']);
        $cfm_pwd = validateInput($_REQUEST['confirm_pwd']);

        // on utilise la méthode comparePwd() de notre librairie
        // cette méthode retourne true si les mots de passe sont identiques (===) sinon false
        $match = comparePwd($pwd, $cfm_pwd);

        // si la valeur de match est false
        if (!$match) {
            // on crée un message d'erreur et on le stocke dans notre variable
            $errorMessage = "Passwords don't match !";
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <form action="" method="post">
        <label for="user-name">User name</label>
        <input type="text" name="username" id="user-name" required>
        <label for="user-email">Email</label>
        <input type="email" name="email" id="user-email" required >
        <label for="user-password">Password</label>
        <input type="password" name="password" id="user-password" required minlength="8">
        <label for="user_-confirm">Confirm password</label>
        <input type="password" name="confirm_pwd" id="user-confirm" required minlength="8">
        <input type="submit" value="Log in">
    </form>
    <!-- on affiche ici le message d'erreur sous le formulaire -->
    <?php echo $errorMessage; ?>
</body>
</html>