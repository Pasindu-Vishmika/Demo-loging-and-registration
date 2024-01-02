<?
session_start();

if (!isset($_COOKIE['username'])) {
    $_SESSION['error'] = "wrong";
    header("Location: index.php");
    exit;
}
else{
    setcookie("username","",time()-1);
    header("Location: index.php");
    exit;
}

?>