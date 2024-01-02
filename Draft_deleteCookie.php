<?php

if (!isset($_COOKIE['username'])) {
    header("Location: index.php?error=wrong");
    exit;
}
else{
    setcookie("username","",time()-1);
    header("Location: index.php");
    exit;
}

?>