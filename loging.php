<?php
session_start();
$host = "localhost";
$name = "root";
$pass = "";
$DB = "users";

$con = new mysqli($host, $name, $pass, $DB);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$emailOrUsername = $_POST['username'];
$password = $_POST["pass"];

if (empty($emailOrUsername) || empty($password)) {
    $_SESSION['error'] = "empty";
    header("Location: index.php?");
    exit();
}

$sql = "SELECT * FROM userdata WHERE email='$emailOrUsername' OR username='$emailOrUsername';";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    $userPasswordFromDB = $user['password'];


    if (md5($password)===$userPasswordFromDB) {

        header("Location: draft_create.php?name=" . $user['username']);
        exit();
    } else {
        $_SESSION['error'] = "invalid";
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['error'] = "not-found";
    header("Location: index.php");
    exit();
}

$con->close();
?>
