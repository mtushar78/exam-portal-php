<?php
session_start();
if(isset($_SESSION) && !empty($_SESSION["user_name"])){
    header("Location: selection.php" );
}else{
    header("Location: login.php" );
}
?>