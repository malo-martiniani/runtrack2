<?php
if (isset($_GET['number'])) {
    if ($_GET['number'] % 2 == 1) {
        echo "Nombre Impair";
    }
    else {
        echo "Nombre Pair";
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
    <form action ="index.php" method="get">
        <label for = "number">nombre</label>
        <input type = "number" name = "number">
        <input type = "submit" value = "Submit">
    </form>
</body>
</html>