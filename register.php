<?php 

    session_start();

    $host="localhost";
    $name="root";
    $pass="";
    $DB = "users";


    $uname      =   $_POST['username'];
    $upass      =   md5($_POST["pass1"]);
    $uemail     =   $_POST['email'];

    if (isset($_POST['username']) && isset($_POST['pass1']) && isset($_POST['email']) ){

        $con = new mysqli($host,$name,$pass,$DB);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        
        $sql = "INSERT INTO userdata (username,email,password) VALUES ('$uname','$uemail','$upass')";
        $con -> query ($sql);
        $con -> close();
        $_SESSION['error'] = "sucess";
        header("Location: index.php");
        exit();
    }
    else{
        $_SESSION['error'] = "mismatch";
        header("Location: Rform.php");
        exit();
        }
        
    ?>