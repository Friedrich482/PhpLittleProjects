<?php
    session_start();
    include("database.php");
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    
</head>
<body>
    <p><b>Please fill this form to <i style="color: cyan;">login</i></b></p>
    <form action="login_process.php" method="post" id="loginForm">
        
        <label for="username">Enter your username :</label><br>
        <input type="text" name="username" id="username" required placeholder="Ex : Paladin67"><br>

        <label for="password">Enter your password :</label><br>
        <div id="passwordDiv">
            <input type="password" name="password" id="password" required placeholder="*********" >
            <img src="eye_slashed.jpg" id="eyeSlashed" alt="Eye slashed" title="Display the password"><br>
        </div>
        <br><br>
        
        <input type="submit" value="Submit" name="submit" id="submit"><br>
        <label id="displayErrors"></label>
        <script src="scriptLogin.js"></script>
    </form>
    <p id="redirection">Not yet registersed? Click here to <a href="register.php">register</a></p><br>
    
    <script src="eye.js"></script>
</body>
</html>

<?php
    include('footer.php');
?>



