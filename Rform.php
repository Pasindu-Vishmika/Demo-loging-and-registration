<!DOCTYPE html>
<html>
<head>
    <title>Login Home Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1 align="center">Register Page</h1>
    <form action="register.php" method="post">
        <fieldset>
            <legend align="center">User Data</legend>
    
            <input type="text" placeholder="Enter your username" name="username" required><br>
            <input type="password" id="password1" placeholder="Enter your password" name="pass1" onkeyup="checkPasswordMatch();" required><br>
            <input type="password" id="password2" placeholder="Re-enter your password" name="pass2" onkeyup="checkPasswordMatch();" required><br>

            <span id="passwordError" style="color: red; display: none;">Passwords do not match.</span>
            <span id="passwordMatch" style="color: rgb(69, 218, 69); display: none;">Passwords match.</span>

            <input type="text" placeholder="Enter your email" name="email" required><br><br>

            <input type="reset">
            <input type="submit" value="Register" id="registerButton" disabled>

            <p>already registerd <a href="index.html">click hear</a></p>
            <div class="error-message">
                <!-- Error message will appear here -->
            </div>
        </fieldset>
    </form>
    
    
</body>



<script>
    function checkPasswordMatch() {
        var password1 = document.getElementById('password1').value;
        var password2 = document.getElementById('password2').value;
        var passwordError = document.getElementById('passwordError');
        var passwordMatch = document.getElementById('passwordMatch');
        var registerButton = document.getElementById('registerButton');

    
        if (password1 !== password2) {
            passwordError.style.display = 'block';
            passwordMatch.style.display = 'none';
            registerButton.disabled = true;
        } else {
            passwordError.style.display = 'none';
            passwordMatch.style.display = 'block';
            registerButton.disabled = false;
        }
    }
    
    const error = "<?php 
    session_start();
    echo $_SESSION['error'];
    $_SESSION['error'] = "";?>"

    if (error === 'mismatch') {
        const errorMessage = document.querySelector('.error-message');
        errorMessage.textContent = 'Please Register again';
        errorMessage.style.display = 'block';

    }

</script>

</html>
