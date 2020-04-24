<?php 

session_start();

if(!isset($_SESSION['views'])){
    $_SESSION['views'] = 0;
}

if(!isset($_SESSION['browser'])){
    $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
}

if(!isset($_SESSION['role'])){
    $_SESSION['role'] = 'admin';
}

//increment the views
$_SESSION['views'] += 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Create Session</title>
</head>
<body>
    <?php echo "<p>" . $_SESSION['views'] . "</p>" ?>
    <ul>
        <li><a href="read_session.php">Read Session</a></li>
        <li><a href="destroy_session.php">Destroy Session</a></li>
        <li><a href="destroy_all_session.php">Destroy All Session</a></li>
    </ul>
</body>
</html>