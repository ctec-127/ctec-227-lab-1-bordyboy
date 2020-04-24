<?php 

session_start();

if(isset($_SESSION['views'])){
    unset($_SESSION['views']);
}
if(isset($_SESSION['browser'])){
    unset($_SESSION['browser']);
}
if(isset($_SESSION['role'])){
    unset($_SESSION['role']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Destroy Session</title>
</head>
<body>
    <ul>
        <li><a href="create_session.php">Create Session</a></li>
        <li><a href="read_session.php">Read Session</a></li>
        <li><a href="destroy_all_session.php">Destroy All Session</a></li>
    </ul>
</body>
</html>