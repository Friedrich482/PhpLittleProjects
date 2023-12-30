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
    <form action="index.php" method="post">
        <label for="email">Enter your email adress : </label><br>
        <input type="email" name="email" id="email" required><br>

        <label for="username">Enter your username :</label><br>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Enter your password :</label><br>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Submit" name="submit"><br>
        <label id="displayErrors"></label>
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(empty($email)){
            echo "  <script>
                        let displayErrors = document.getElementById('displayErrors');
                        displayErrors.textContent = `Please enter an email !`
                        displayErrors.style.color = 'red';
                    </script>

            ";
        }

        elseif(empty($username)){
            echo "  <script>
                        let displayErrors = document.getElementById('displayErrors');
                        displayErrors.textContent = `Please enter a username !`
                        displayErrors.style.color = 'red';
                    </script>

            ";
        }

        elseif(empty($password)){
            echo "  <script>
                        let displayErrors = document.getElementById('displayErrors');
                        displayErrors.textContent = `Please enter a password !`
                        displayErrors.style.color = 'red';
                    </script>

            ";
        }

        else{
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

          
                mysqli_query($conn, $sql);
                echo "<script>
                        let displayErrors = document.getElementById('displayErrors');
                        displayErrors.textContent = `You are now registered !`
                        displayErrors.style.color = 'green';
                    </script>";
            
            // catch(mysqli_sql_exception){{
            //     echo "<script>
            //             let displayErrors = document.getElementById('displayErrors');
            //             displayErrors.textContent = `This email / username is already taken !`
            //             displayErrors.style.color = 'red';
            //         </script>";;
            // }}
        }
    }
    mysqli_close($conn);
?>

