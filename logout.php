<?php
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['user_id']);
    $_SESSION['failure'] = 'Logged out';
    header('Location:index.php');
    return;
?>