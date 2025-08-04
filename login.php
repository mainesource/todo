<?php
session_start();
require_once "pdo.php";
require_once "functions.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    
    $salt = 'XyZzy12*_';
    $check = hash('md5', $salt.$_POST['password']);
    $stmt = $pdo->prepare('SELECT user_id, name FROM users WHERE email = :em AND password = :pw');
    $stmt->execute(array(':em' => htmlentities($_POST['email']),
                         ':pw' => $check));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row !== false){
        $_SESSION['name'] = $row['name'];
        $_SESSION['user_id'] = $row['user_id'];
        header('Location:task.php');
        return;
    }
    else{   
        $_SESSION['failure'] = 'Incorrect Password';     
        header('Location:login.php');
        return;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="myCont">
        <div class="fail">
            <?php if(isset($_SESSION['failure'])) flashFail();?>
        </div>
        <h1 id="heading">TODO Application</h1>
        <form method="post">
            <div class="form-floating">
                
                <input type="text" name="email" id="email" class="inp" placeholder="name@email.com" >
            </div>
            <div class="form-floating">
                
                <input type="password" name="password" id="password" class="inp" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary btn-lg" onclick="loginValidate()">Submit</button><br>
            <button class="btn btn-primary btn-lg" ><a href="index.php">Cancel</a></button>
        </form>
    </div>      
    <script src="jscript.js"></script>    
</body>
</html>