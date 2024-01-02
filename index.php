<!DOCTYPE html>
<html>
<head>
    <title>Login Home Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1 align="center">Login Page</h1>
    <form action="loging.php" method="post">
        <fieldset>
            <legend align="center">User Data</legend>

            <input type="text" placeholder="Enter your username or email" name="username"><br>
            <input type="password" placeholder="Enter your Password" name="pass"><br><br>
            <input type="reset">
            <input type="submit" value="Login"></br>
            <p>Don't have registerd ? <a href="register.html" >click hear</a></p>
            <div class="error-message">
                <!-- Error message will appear here -->
                
            </div>
        </fieldset>
    </form>
</body>

<script>
    
    const error = "<?php 
    session_start();
    echo $_SESSION['error'];
    $_SESSION['error'] = "";?>"

    if (error === 'invalid') {
        const errorMessage = document.querySelector('.error-message');
        errorMessage.textContent = 'Invalid username or password.';
        errorMessage.style.display = 'block';

    } else if (error === 'empty') {
        const errorMessage = document.querySelector('.error-message');
        errorMessage.textContent = 'Please fill both Username and Password fields.';
        errorMessage.style.display = 'block';
    }

     else if (error === 'wrong') {
        const errorMessage = document.querySelector('.error-message');
        errorMessage.textContent = 'Session expired. Log again .';
        errorMessage.style.display = 'block';
     }
    else if (error === 'not-found') {
            const errorMessage = document.querySelector('.error-message');
            errorMessage.textContent = 'Sorry this user not found';
            errorMessage.style.display = 'block';
    }
    else if (error === 'sucess') {
        const errorMessage = document.querySelector('.error-message');
        errorMessage.textContent = 'Registration Sucessfull. Please loging now';
        errorMessage.style.display = 'block';
        errorMessage.style.color = 'green';
    }

</script>

</html>
