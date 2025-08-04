<?php
function flashFail(){
    echo($_SESSION['failure']);
    unset($_SESSION['failure']);
}
?>