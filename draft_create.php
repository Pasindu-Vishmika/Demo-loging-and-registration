<?php
    if(!isset($_GET['name'])){
        header("Location: index.php");
        exit;
    }

    
    setcookie("username",$_GET['name'],time()+3600);
    header("Location: Dashboard.php");
    
?>