<?php
session_start();

// Gérer la réinitialisation
if (isset($_GET['reset'])) {
    // Réinitialiser la liste des prénoms
    unset($_SESSION["list_prenom"]);
    // Rediriger vers la page principale
    header("Location: index.php");
    exit();
}

// Initialiser la liste des prénoms si elle n'existe pas
if (!isset($_SESSION["list_prenom"])) {
    $_SESSION["list_prenom"] = array();
}

// Traitement du formulaire
if (isset($_POST["prenom"]) && !empty($_POST["prenom"])) {
    // Ajouter le prénom à la liste
    $_SESSION["list_prenom"][] = $_POST["prenom"];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required>
        <button type="submit">Ajouter</button>
    </form>
    
    <a href="index.php?reset=1">
        <button type="button">Reset</button>
    </a>

    <h2>Liste des prénoms :</h2>
    <div>
        <?php
        if (!empty($_SESSION["list_prenom"])) {
            foreach ($_SESSION["list_prenom"] as $prenom) {
                echo $prenom . "<br>";
            }
        } else {
            echo "<p>Aucun prénom enregistré.</p>";
        }
        ?>
    </div>
</body>
</html>