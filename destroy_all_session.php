<?php 

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Destroy All Session</title>
</head>
<body>
    <ul>
        <li><a href="create_session.php">Create Session</a></li>
        <li><a href="read_session.php">Read Session</a></li>
        <li><a href="destroy_session.php">Destroy Session</a></li>
    </ul>
</body>
</html>