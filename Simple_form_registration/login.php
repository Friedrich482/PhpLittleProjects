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
    <script src="script.js" defer></script>
</head>
<body>
    
    <p><b>Please fill this form to <i style="color: cyan;">login</i></b></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        
        <label for="username">Enter your username :</label><br>
        <input type="text" name="username" id="username" required placeholder="Ex : Paladin67"><br>

        <label for="password">Enter your password :</label><br>
        <input type="password" name="password" id="password" required placeholder="*********"><br>

        <input type="submit" value="Submit" name="submit" id="submit"><br>
        <label id="displayErrors"></label>

    </form>
    <p id="redirection">Not yet registered? Click here to <a href="register.php">register</a></p><br>
</body>
</html>

<?php
    include('footer.php');
?>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(!empty($username) && !empty($password)){
            
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows === 0) {
                echo($result->num_rows);
                echo "  <script>
                            let displayErrors = document.getElementById('displayErrors');
                            displayErrors.textContent = 'User not found! (ಥ _ ಥ)';
                            displayErrors.style.color = 'red';
                            displayErrors.style.fontSize = '30px';
                        </script>";
            } 
            
            else {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    // The password is correct

                    $_SESSION["username"] = $username;
                    $id_user = $user["id"];
                    $_SESSION['id'] = $id_user;
                    $_SESSION['loggedin'] = true;
                    header("Location: home.php?username=$username&id=$id_user");
                    
                } else {
                    echo "  <script>
                                let displayErrors = document.getElementById('displayErrors');
                                displayErrors.textContent = 'Incorrect password !       ❌';
                                displayErrors.style.color = 'red';
                                displayErrors.style.fontSize = '30px'
                            </script>";
                }
            }

            $stmt->close();

           
            
            exit();
            
           
        }
    }
    $conn->close();
?>

