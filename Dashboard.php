<?php

     if (!isset($_COOKIE['username'])) {
        header("Location: index.html?error=wrong");

     } else {
      

        $name = $_COOKIE['username'];
        echo "<h1>Welcome $name to the Dashboard</h1>";
        echo "<hr>";
        echo '<form action="Draft_deleteCookie.php" method="post" style="margin-top: 20px;">
        <input type="submit" value="Logout" style="background-color: #1877f2; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;">
      </form>';
    }
?>
