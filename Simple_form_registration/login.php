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

<?php

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     echo "<script>
            
    //     </script>";
    //     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        
    //     $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        
    //     if(!empty($username) && !empty($password)){
            
    //         $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    //         $stmt->bind_param("s", $username);
    //         $stmt->execute();

    //         $result = $stmt->get_result();

    //         if ($result->num_rows === 0) {
    //             // user is not found in this case.
    //             $_SESSION['error'] = "User not found! (ಥ _ ಥ)";
               
    //             if (isset($_SESSION['error'])) {
    //                 echo "<script>
    //                         document.getElementById('loginForm').addEventListener('submit', (e) =>{
    //                             e.preventDefault();
    //                             document.getElementById('displayErrors').textContent = '" . $_SESSION['error'] . "';
    //                         })
    //                       </script>
    //                 ";
    //                 unset($_SESSION['error']); // Delete the message immediately after displayed it.
    //             }
    //         } 
            
    //         else {
    //             $user = $result->fetch_assoc();
    //             if (password_verify($password, $user['password'])) {
    //                 // The password is correct

    //                 $_SESSION["username"] = $username;
    //                 $id_user = $user["id"];
    //                 $_SESSION['id'] = $id_user;
    //                 $_SESSION['loggedin'] = true;
    //                 header("Location: home.php?username=$username&id=$id_user");
                    
    //             } else {
    //                 // The password is not correct
    //                 $_SESSION['error'] = "Incorrect password! ❌";
               
    //                 if (isset($_SESSION['error'])) {
    //                     echo "<script>
    //                         document.getElementById('displayErrors').innerHTML = '<p style=\'color: red;\'>" . $_SESSION['error'] . "</p>' 
    //                       </script>
    //                     ";
    //                     unset($_SESSION['error']); // Delete the message immediately after displayed it.
    //                 }
    //             }
    //         }

    //         $stmt->close();
    //         exit();
            
           
    //     }
    // }
    // $conn->close();
?>

