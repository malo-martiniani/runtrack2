<?php
// Gérer la réinitialisation du compteur
if (isset($_GET['reset'])) {
    setcookie("nbvisites", "", time() - 3600);
    header("Location: index.php");
    exit();
}
// Initialiser ou incrémenter le compteur de visites
if (!isset($_COOKIE["nbvisites"])) {
    $nbvisites = 1;
    setcookie("nbvisites", $nbvisites, time() + 365*24*3600);
} else {
    // Incrémenter le compteur
    $nbvisites = $_COOKIE["nbvisites"] + 1;
    setcookie("nbvisites", $nbvisites, time() + 365*24*3600);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>
    <a href ="index.php?reset=1">
        <button type="button">Reset</button>
    </a>
</body>
</html>