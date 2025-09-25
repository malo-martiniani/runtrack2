
<?php
session_start();

// Gérer la réinitialisation du compteur
if (isset($_GET['reset'])) {
    session_unset();
    header("Location: index.php");
    exit();
}

// Initialiser ou incrémenter le compteur de visites
if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 0;
}
$_SESSION["nbvisites"]++;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Bienvenue sur notre site</h1>
    <p>Nombre de visites : <?php echo $_SESSION["nbvisites"]; ?></p>
    <a href="index.php?reset=1">
        <button type="button">Reset</button>
    </a>
</body>
</html>