<?php
    $country = $_GET["country"];
    echo"<p>Welcome ! You are from $country</p>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country and flag</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <p id="para"></p>
    <img  id="flag" src="Flags/dot.png" alt="Flag" style="visibility: hidden;" >
    <p>That's it !<br><a href="exo1.php">Return to the main page</a></p>
    <script src="script.js"></script>
</body>
</html>