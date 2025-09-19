<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>Enter a text:</label>
        <input type="text" name="text" required>
        <input type="submit" value="Submit">
    </form>


<?php

$count = 0;

foreach ($_GET as $key => $value) {
    $count++;
}

echo "Total : " . $count;
?>
</body>
</html>