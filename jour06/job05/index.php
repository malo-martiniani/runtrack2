<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if (isset($_GET['style'])) {
        $style = $_GET['style'];
        if ($style === 'style1') {
            echo '<link rel="stylesheet" href="style1.css">';
        } elseif ($style === 'style2') {
            echo '<link rel="stylesheet" href="style2.css">';
        } elseif ($style === 'style3') {
            echo '<link rel="stylesheet" href="style3.css">';
        }
    }
    ?>
</head>

<body>
    <form action="index.php" method="get">
        <select name="style">
            <option <?= $style == "style1" ? "selected" : "" ?> value="style1">Style 1</option>
            <option <?= $style == "style2" ? "selected" : "" ?> value="style2">Style 2</option>
            <option <?= $style == "style3" ? "selected" : "" ?> value="style3">Style 3</option>
            <input type="submit" value="Submit">
</body>

</html>