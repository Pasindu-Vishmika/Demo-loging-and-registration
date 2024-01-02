<?php 

    $host="localhost";
    $name="root";
    $pass="";
    $DB = "users";


    $uname      =   $_POST['username'];
    $upass      =   password_hash($_POST['pass1'],PASSWORD_BCRYPT);
    $uemail     =   $_POST['email'];

    if (isset($_POST['username']) && isset($_POST['pass1']) && isset($_POST['email']) ){

        $con = new mysqli($host,$name,$pass,$DB);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        
        $sql = "INSERT INTO userdata (username,email,password) VALUES ('$uname','$uemail','$upass')";
        $con -> query ($sql);
        $con -> close();
        header("Location: index.html ?error=sucess");
        exit();
    }
    else{
        header("Location: register.html ?error=mismatch");
        exit();
        }
        

 
