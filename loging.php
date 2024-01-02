<?php
    $user= $_POST['username'];
    $pass= $_POST["pass"];
    $validate=false;

    if (isset($_POST['username']) && isset($_POST['pass']) && $pass !="" ){
        
        $host ="Localhost";
        $name="root";
        $
        

        }

        if($validate){
            
            header("Location: draft_create.php ?username=$user");
            exit;
        }
        else{
            header("Location: index.html ?error=invalid");
            exit;
        }
    }
    else{
        # echo "Please Fill both Username and Password";
        header("Location: index.html ?error=empty");
        exit();
    }



?>
