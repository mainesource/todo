<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    echo('<a href="index.php">Return</a><br>');        
    die('Access Denied!');
}
?>