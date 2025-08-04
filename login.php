<?php
session_start();
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
    <div class="container">
        <h1>TODO Application</h1>
        <form method="post">
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email" id="Email" placeholder="name@email.com" size="80">
            </div>
            <label for="email">Password:</label>
            <input type="password" name="password" id="Password" placeholder="password" size="80"><br>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <button class="btn btn-primary btn-sm" ><a href="index.php">Cancel</a></button>
        </form>
    </div>
</body>
</html>