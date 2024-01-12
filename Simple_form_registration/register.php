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
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    
</head>
<body>
    <p><b>Please fill this form to <i style="color: cyan;">register</i></b></p>
    <form action="register_process.php" method="post" id="registerForm">
        
        <label for="email">Enter your email address : </label><br>
        <input type="email" name="email" id="email" required placeholder="Ex : example@gmail.com"><br>

        <label for="username">Enter your username :</label><br>
        <input type="text" name="username" id="username" required placeholder="Ex : Paladin67"><br>

        <label for="password">Enter your password :</label><br>
        <div id="passwordDiv">
            <input type="password" name="password" id="password" required placeholder="**********" minlength="8">
            <img src="eye_slashed.jpg" id="eyeSlashed" alt="Eye slashed" title="Display the password"><br>
        </div>

        <br><br>

        <input type="submit" value="Submit" name="submit" id="submit"><br>
        <label id="displayErrors"></label>
        <script src="registerScript.js"></script> 
    </form>
    <p id="redirection">Already registered? Click here to <a href="login.php">login</a></p><br>
    
    <script>
        // The eyes with the password
        let eyeSlashed = document.getElementById('eyeSlashed');
        let displayErrors = document.getElementById('displayErrors');

        eyeSlashed.addEventListener('click', () =>{
            let password = document.getElementById('password');
            if(password.type == 'password'){
                password.type = 'text';
                eyeSlashed.src = 'eye.png';
                eyeSlashed.title = "Hide the password";
            }
            else{
                password.type = 'password';
                eyeSlashed.src = 'eye_slashed.jpg';
                eyeSlashed.title="Display the password"
            }
        
        })
        displayErrors.style.fontSize = '25px'
    </script>
    
</body>
</html>

<?php
    include('footer.php');
?>



