<?php
try {
    // Ici tu crées une connexion PDO à la base MySQL "jour09"
    // - host=localhost : ton serveur est en local
    // - dbname=jour09 : c’est le nom de ta base de données
    // - "root" : ton identifiant (à éviter en production)
    // - "" : contient le mot de passe
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");

    // Tu configures PDO pour qu’il envoie une exception si une erreur SQL survient
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Tu écris ta requête SQL pour sélectionner prénom, nom et naissance des étudiants
    $sql = "SELECT COUNT(*) AS nombre_etudiants FROM etudiants";

    // Tu exécutes directement la requête avec ->query() car tu n’as pas de paramètres
    $stmt = $pdo->query($sql);

    // Tu commences ton tableau HTML pour afficher les résultats
    echo "<table border='1'>";
    echo "<tr><th>Nombre d'étudiants</th></tr>";

    // Tu parcours chaque résultat avec fetch(PDO::FETCH_ASSOC)
    // Ça te renvoie un tableau associatif (les colonnes sont accessibles par leur nom)
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        // Tu utilises htmlspecialchars() pour éviter les failles XSS si les données contiennent du HTML
        echo "<td>" . htmlspecialchars($row['nombre_etudiants']) . "</td>";
        echo "</tr>";
    }

    // Tu fermes ton tableau HTML
    echo "</table>";

} catch (PDOException $e) {
    // Si une erreur se produit (connexion ou requête), tu récupères le message d’erreur
    echo "Erreur : " . $e->getMessage();
}
?>