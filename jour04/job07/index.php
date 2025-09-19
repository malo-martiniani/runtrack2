<?php
if (
    $_SERVER['REQUEST_METHOD'] === 'POST'
    && isset($_POST['largeur'], $_POST['hauteur'])
    && $_POST['largeur'] !== ''
    && $_POST['hauteur'] !== ''
)
{
    $L = (int)$_POST['largeur']; // largeur intérieure + bords pour le toit et la base
    $H = (int)$_POST['hauteur']; // nombre de lignes pour le corps

    if ($L < 3 || $H < 1) {
        echo '<pre>Dimensions trop petites.</pre>';
    } else {
        echo '<pre>';

        // 1) Toit
        // Hauteur du toit telle que la dernière ligne couvre exactement L caractères avec / ... \
        // On construit un triangle isocèle dont la dernière ligne a L-2 underscores entre / et \
    // Nombre de lignes du toit ≈ ceil((L-1)/2) sans utiliser de fonction
    $roofLines = (int)(($L - 2) / 2) + 1;
        if ($roofLines < 1) $roofLines = 1;

        for ($i = 0; $i < $roofLines; $i++) {
            // Espaces à gauche pour centrer: roofLines-1-i
            for ($s = 0; $s < $roofLines - 1 - $i; $s++) echo ' ';

            echo '/';

            // Largeur intérieure entre / et \ pour cette ligne
            // On veut progresser de 2 en 2: 0,1,3,5,... et
            if ($i === $roofLines - 1) {
                // Dernière ligne: doit remplir exactement L-2 underscores
                for ($u = 0; $u < $L - 2; $u++) echo '_';
            } else if ($i === 0) {
                // sommet: aucun intérieur
                // rien
            } else {
                // lignes intermédiaires: underscores pour former les paliers (0,2,4,...)
                for ($m = 0; $m < 2 * $i; $m++) echo '_';
            }

            echo '\\';
            echo "\n";
        }

        // 2) Corps: côtés en | dans l'énoncé semblent pointillés; on garde des côtés droits.
        for ($r = 0; $r < $H; $r++) {
            echo '|';
            for ($c = 0; $c < $L - 2; $c++) echo ' ';
            echo '|';
            echo "\n";
        }

        // 3) Base
        echo '|';
        for ($b = 0; $b < $L - 2; $b++) echo '_';
        echo '|';

        echo '</pre>';
    }
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
    <form action ="index.php" method="post">
        <label for = "largeur">Largeur</label>
        <input type = "number" name = "largeur">
        <label for = "hauteur">Hauteur</label>
        <input type = "number" name = "hauteur">
        <input type = "submit" value = "Submit">
    </form>
</body>
</html>
