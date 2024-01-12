<?php
session_start();
include("database.php");

$response = ['error' => false];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($email) || empty($username) || empty($password)) {
        $response['error'] = true;
        $response['message'] = "All fields are required!";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $hashedPassword);

        try {
            $stmt->execute();

            $_SESSION["username"] = $username;
            $_SESSION['loggedin'] = true;

            
            $id_user = $conn->insert_id;
            $_SESSION['id'] = $id_user;

            $response['redirect'] = "home.php?username=$username&id=$id_user";
        } catch (mysqli_sql_exception $exception) {
            $response['error'] = true;
            $response['message'] = "This email/username is already taken ❌";
        }

        $stmt->close();
    }
}

$conn->close();
echo json_encode($response);
?>
