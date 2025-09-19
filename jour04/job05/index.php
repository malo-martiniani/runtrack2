<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    if($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
        echo "C'est pas ma guerre !";
    }
    else {
        echo "Votre pire cauchemar";
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
        <label for = "username">Username</label>
        <input type = "text" name = "username">
        <label for = "password">Password</label>
        <input type = "password" name = "password">
        <input type = "submit" value = "Submit">
</body>
</html>