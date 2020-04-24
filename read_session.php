<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Read Session</title>
</head>
<body>
    <?php if(isset($_SESSION['views'])) {
        echo "<p>Session Views: " . $_SESSION['views'] . "</p>";
    }

    if(isset($_SESSION['browser'])){
        echo "<p>User Browser: " . $_SESSION['browser'] . "</p>";
    }

    if(isset($_SESSION['role'])){
        echo "<p>User Role: " . $_SESSION['role'] . "</p>";
    }

    ?>

    <ul>
        <li><a href="create_session.php">Create Session</a></li>
        <li><a href="destroy_session.php">Destroy Session</a></li>
        <li><a href="destroy_all_session.php">Destroy All Session</a></li>
    </ul>
</body>
</html>