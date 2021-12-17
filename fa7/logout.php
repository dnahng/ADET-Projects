<!DOCTYPE html>
<html>
    <head>
        <title>Successfully Logged Out</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body bgcolor="#f5e8db">
    <br><br>

        <div>
            <?php 
            session_start();
            
            session_unset();

            session_destroy();
            echo "<h3 style='text-align: center;'>You have successfully logged out.</h3>";

            echo "<li style='float:center; list-style-type:none;'><a href='login.php' class='a1' style='color:dimgray; border-radius:10px;'><b><u>Click Here to Login</u></b></a></li>";
            ?>
        </div>
    </body>
</html>