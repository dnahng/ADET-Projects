<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="webstyle.css">
    </head>
    <body bgcolor="#f5e8db">
    <ul>
        <li><a href ="actb_reg.php">Register</a></li>
        <li><a class="active" href="actb_login.php"><i>Log-In</i></a></li>
        <li><a href="actb_home.php">User Profile</a></li>
    </ul>
    <br><br>

        <?php 
        require_once "setdb.php";
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            header("location: actb_home.php");
            exit;
        }
        ?>

        <div>
        <h2 style="text-align: center;">Log-in Form</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>
            <label>Username: </label><input type="text" name="username" required placeholder="Enter username">&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Password: </label><input type="password" name="pw" required placeholder="Enter password">&nbsp;&nbsp;<br><br>
        </p>
            <p><input type="submit" name="submit" value="Submit" class="button"></td></p>
        </form>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST['username'];
            $pw = $_POST['pw'];

            echo "<hr>";
            
            $p_un = mysqli_real_escape_string($connect, $username);
            $p_pw = mysqli_real_escape_string($connect, $pw);
            $sql = mysqli_query($connect, "select count(*) as usercnt from reg where username='".$p_un."' and pw='".$p_pw."'");
            $data = mysqli_fetch_array($sql);

            $count = $data['usercnt'];
            if($count > 0){
                $_SESSION['p_un'] = $p_un;
                $_SESSION['loggedin'] = true;
                header("location: actb_home.php");
            }
            else{
                echo "Invalid username and/or password. Please try again...";
            }
            mysqli_close($connect);
        }
        ?>
        </div>
    </body>
</html>