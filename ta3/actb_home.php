<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title>
        <link rel="stylesheet" href="webstyle.css">
        <style>
            li{
                list-style-type: none;
                color: black;
                border-radius: 10px;
            }
        </style>
    </head>
    <body bgcolor="#f5e8db">
    <ul>
        <li><a href="actb_reg.php">Register</a></li>
        <li><a href="actb_login.php">Log-In</a></li>
        <li><a class="active" href="actb_home.php"><i>User Profile</i></a></li>
    </ul>
    <br><br>

        <div>
        <?php
        require_once "setdb.php";
        session_start();
        
        if(!isset($_SESSION['p_un'])){
            header('location: actb_login.php');
        }
        $username = $_SESSION['p_un'];
        $record = mysqli_query($connect, "select * from reg where username = '$username'");
        
        echo "<h2>User Profile and Information</h2>";
        ?>
        
            <li style='float:right;'><a href='actb_logout.php' style='color:black; border-radius:10px;'><b>Log-out</b></a></li>
        
        <?php
        while($data = mysqli_fetch_array($record)){
            echo "<b>Welcome </b>".$data['fname']." ".$data['mname']." ".$data['lname']."<br>";
            echo "<b>Birthday: </b>".$data['dob']."<br>";
            echo "<b>Contact Information:</b> <br>";
            echo "&nbsp; <b>Email: </b>".$data['email']."<br>";
            echo "&nbsp; <b>Contact Number: </b>".$data['contactno']."<br>";
        }
        echo "<br><hr>";
        ?>

        <h3 style="text-align: center;">Reset Password</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>
            <label>Current Password: </label><input type="password" name="currpw" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Enter New Password: </label><input type="password" name="newpw" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Re-Enter New Password: </label><input type="password" name="confpw" required>&nbsp;&nbsp;<br><br>
        </p>
            <p><input type="submit" name="submit" value="Submit" class="button"></td></p>
        </form>
        <br><br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $currpw = $_POST['currpw'];
            $newpw = $_POST['newpw'];
            $confpw = $_POST['confpw'];

            $sql = mysqli_query($connect, "select pw as pwchck from reg where username='".$username."'");
            
            while($row = mysqli_fetch_array($sql)){
                if ($currpw == $row['pwchck']){
                    if(strcmp($newpw,$confpw)==0){
                        $update_pw = "UPDATE reg SET pw='$newpw', confirmpw='$newpw' WHERE username = '$username'";
                        if($connect->query($update_pw)){
                            echo "Password has been updated successfully.";
                        }
                        else{
                            echo "There was an error with updating your password. Please try again...";
                        }
                        $connect->close();
                    }
                    else{
                        echo "New password and re-entered password should be the same. Please try again...";
                    }
            }
            else{
                echo "Current password is not the same with the old password. Please try again...";
            }
        }
        }
        ?>
        </div>
    </body>
</html>