<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body bgcolor="#f5e8db">
    <ul>
        <li><a class="active" href ="login.php"><i>Log-In</i></a></li>
    </ul>
    <br><br>

        <?php 
        require_once "setdb.php";
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && isset($_SESSION['p_un'])){
            $level = mysqli_query($connect, "select userlevel as lvl from record_info where username='".$_SESSION['p_un']."'");
                while($record = mysqli_fetch_array($level)){
                    if($record['lvl'] == "Admin"){
                        header("location: admin.php");
                    }
                    else{
                        header("location: user.php");
                    }
                }
            exit;
        }
        ?>

        <div>
        <h2 style="text-align: center;">Log-in Form</h2>
        <table>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <tr><td>Username: </td><td><input type="text" name="username" required placeholder="Enter username"></td></tr>

                <tr><td>Password: </td><td><input type="password" name="password" required placeholder="Enter password"></td></tr>

                <tr><td><input type="submit" name="submit" value="Submit" class="button"></td><tr>
            </form>
        </table>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST['username'];
            $password = $_POST['password'];

            echo "<hr>";
            
            $p_un = mysqli_real_escape_string($connect, $username);
            $p_pw = mysqli_real_escape_string($connect, $password);
            $sql = mysqli_query($connect, "select count(*) as usercnt from record_info where username='".$p_un."' and password='".$p_pw."'");
            $data = mysqli_fetch_array($sql);

            $count = $data['usercnt'];
            if($count > 0){
                $_SESSION['p_un'] = $p_un;
                $_SESSION['loggedin'] = true;
                $level = mysqli_query($connect, "select userlevel as lvl from record_info where username='".$p_un."'");
                while($record = mysqli_fetch_array($level)){
                    if($record['lvl'] == "Admin"){
                        header("location: admin.php");
                    }
                    else{
                        header("location: user.php");
                    }
                }
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