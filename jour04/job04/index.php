<?php
if (isset($_POST['nom']) && isset($_POST['prenom'])) {
    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";
    foreach ($_POST as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }
    echo "</table>";
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
    <form action="index.php" method="post">
        <label for="nom">Votre nom</label>
        <input type="text" name="nom" id="nom" required>
        <label for="prenom">Votre prénom</label>
        <input type="text" name="prenom" id="prenom" required>
        <input type="submit" value="Submit">
</body>
</html>

