<?php
    session_start();
    include("database.php");


    // Check if the user is logged in. Otherwise, redirect him to the login page.

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header('Location: login.php');
        exit;
    }

?>

<?php
    // incrementation of the counter of visits everytime you visit the page

    $sql = "UPDATE users SET visits = visits + 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $_SESSION['id']);

    $stmt->execute();

    $stmt->close();

    // display of the actual value of the counter of visits

    $sql = "SELECT visits FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $_SESSION["id"]);
    $stmt->execute();


    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $number_of_visits = $row['visits'];

    $stmt->close();
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 🏠</title>
    <link rel="stylesheet" href="home.css">
    <script src="script.js" defer></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<body>
    <div id="visits_container">
        <button id="visitsDisplayerButton"><i class="fi fi-rr-angle-down"></i></button>
        <div id="visits" style="display: none;">
            You have visited this page <label><?php echo $number_of_visits?></label> times
        </div>
    </div>
    <i class="fi fi-rr-menu-burger"></i>
    <h1 id="welcome">Welcome <?php echo "{$_SESSION['username']}"?>, on my page <lord-icon style="display:inline-block"  src="https://cdn.lordicon.com/pcwupfyl.json" trigger="loop" style="width:100px;height:100px"></lord-icon></h1>
        
    <p id='catch'>What are we doing today ? 🙃</p>
    
    <i class="fi fi-rr-cross-small"></i>
    <br><br><br><br><br><br><br><br><br><br>

    <form action="home.php" method="post">
        <input type="button" value="Logout" name="logout" id="logout">
    </form>

    <form action="" method="post" style="display:none;" id="confirmForm">
        <label id="sure">Are you sure to log out ?</label><br>
        <div id="confirmButtons">
            <input class = 'confirmButton' type="submit" value="Yes ✅">
            <input class = 'confirmButton' type="button" value="No ❌" id="denyButton">
        </div>

    </form>

   <br><br>

   <script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION['loggedin'] = false;
        session_destroy();
        header("Location: login.php");
    }
?>
<?php
    include('footer.php');
?>

