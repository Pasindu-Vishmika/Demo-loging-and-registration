<?php
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
    header("Location: index.html?error=empty");
    exit();
}

$sql = "SELECT * FROM userdata WHERE email='$emailOrUsername' OR username='$emailOrUsername';";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    $userPasswordFromDB = $user['password'];
    if (varpassword_verfy($password,$userPasswordFromDB)) {
        header("Location: draft_create.php?name=" . $user['username']);
        exit();
    } else {
        header("Location: index.html?error=invalid");
        exit();
    }
} else {
    header("Location: index.html?error=notfound");
    exit();
}

$con->close();
?>
