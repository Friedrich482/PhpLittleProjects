<?php
    session_start();
    include("database.php");
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
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div id="visits_container">
        <button id="visitsDisplayerButton">&darr;</button>
        <div id="visits" style="display: none;">
            You have visited this page <label><?php echo $number_of_visits?></label> times
        </div>
    </div>
    
    <h1 id="welcome">Welcome,<?php echo "{$_SESSION['username']}"?>, on my page 👋</h1>
   <p id='catch'>What are we doing today ? 🙃</p>
   <br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php
    include('footer.php');
?>

