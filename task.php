<?php
session_start();

if(!isset($_SESSION['user_id'])) {
    echo('<a href="index.php">Return</a><br>');        
    die('Access Denied!');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">    
    <link rel="stylesheet" href="styles.css">
    <title>Task</title>
</head>
<body>
    <header class="myCont">
        <h1>Tasks for <?=$_SESSION['name']?></h1>
    </header>
    <a href="logout.php">Logout</a>
</body>
</html>