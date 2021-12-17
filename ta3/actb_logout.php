<!DOCTYPE html>
<html>
    <head>
        <title>Successfully Logged Out</title>
        <link rel="stylesheet" href="webstyle.css">
    </head>
    <body bgcolor="#f5e8db">
    <ul>
        <li><a href ="actb_reg.php">Register</a></li>
        <li><a href="actb_login.php">Log-In</a></li>
        <li><a href="actb_home.php">User Profile</a></li>
    </ul>
    <br><br>

        <div>
            <?php 
            require_once "setdb.php";
            session_start();
            
            session_unset();

            session_destroy();
            echo "<h3 style='text-align: center;'>You have successfully logged out.</h3>";
            ?>
        </div>
    </body>
</html>