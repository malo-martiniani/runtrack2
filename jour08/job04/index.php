<?php
if (isset($_POST['deco'])) {
    // Expire the cookie and redirect
    setcookie("username", "", time() - 3600);
    header("Location: index.php");
    exit();
}

if (isset($_POST['connexion']) && isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $username = $_POST['prenom'];
    // Set cookie for one year
    setcookie('username', $username, time() + 365*24*3600);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <?php if (isset($_COOKIE['username']) && !empty($_COOKIE['username'])): ?>
        <p>Bonjour <?php echo $_COOKIE['username']; ?> !</p>
        <form action="index.php" method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form action="index.php" method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>