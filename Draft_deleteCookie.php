<?php

if (!isset($_COOKIE['username'])) {
    header("Location: draft_form.html?error=wrong");
    exit;
}
else{
    setcookie("username","",time()-1);
    header("Location: draft_form.html");
    exit;
}

?>