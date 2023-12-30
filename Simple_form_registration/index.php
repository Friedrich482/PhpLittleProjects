<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Welcome on my page</h1>
    <form action="treatment.php" method="post">
        <label for="email">Enter your email adress : </label><br>
        <input type="email" name="email" id="email"><br>

        <label for="username">Enter your username :</label><br>
        <input type="text" name="username" id="username"><br>

        <label for="password">Enter your password :</label><br>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>