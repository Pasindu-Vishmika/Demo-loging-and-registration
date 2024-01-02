<?php
    if(!isset($_GET['username'])){
        header("Location: index.html");
        exit;
    }
    setcookie("username",$_GET['username'],time()+3600);
    header("Location: Dashboard.php");
    
?>