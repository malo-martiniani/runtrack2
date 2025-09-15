<?php
$var1 = "test";
$var2 = 2;
$var3 = true;
$var4 = 2.5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "Tableau"; ?></title>
</head>
<body>
    <table>
        <tr>    
            <th>Type</th>
            <th>Name</th>
            <th>Value</th>
        </tr>
        <tr>
            <td><?php echo gettype($var1); ?></td>
            <td><?php echo "var1"; ?></td>
            <td><?php echo $var1; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($var2); ?></td>
            <td><?php echo "var2"; ?></td>
            <td><?php echo $var2; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($var3); ?></td>
            <td><?php echo "var3"; ?></td>
            <td><?php echo $var3; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($var4); ?></td>
            <td><?php echo "var4"; ?></td>
            <td><?php echo $var4; ?></td>
        </tr>
    </table>
</body>
</html>