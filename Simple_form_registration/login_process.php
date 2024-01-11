<?php
    session_start();
    include("database.php");

    $response = ['error' => false];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(!empty($username) && !empty($password)){
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 0) {
                $response = ['error' => true, 'message' => "User not found! (ಥ _ ಥ)"];
            } else {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION["username"] = $username;
                    $_SESSION['id'] = $user["id"];
                    $_SESSION['loggedin'] = true;
                    $response = ['error' => false, 'redirect' => 'home.php'];
                } else {
                    $response = ['error' => true, 'message' => "Incorrect password! ❌"];
                }
            }

            $stmt->close();
        }

        $conn->close();
        echo json_encode($response);
}
?>
