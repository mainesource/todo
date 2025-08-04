<?php
session_start();

if 
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
        <h1>TODO Application</h1>
        <form method="post">
            <div class="form-floating">
                <label for="mail">Email:</label>
                <input type="email" name="email" id="mail" class="inp" placeholder="name@email.com">
            </div>
            <div class="form-floating">
                <label for="email">Password:</label>
                <input type="password" name="password" id="password" class="inp" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <button class="btn btn-primary btn-sm" ><a href="index.php">Cancel</a></button>
        </form>
    </div>
    <script src="jscript.js"></script>
</body>
</html>