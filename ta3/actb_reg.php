<!DOCTYPE html>
<html>
    <head>
        <title>Information Registration</title>
        <link rel="stylesheet" href="webstyle.css">
    </head>
    <body bgcolor="#f5e8db">
    <ul>
        <li><a class="active" href ="actb_reg.php"><i>Register</i></a></li>
        <li><a href="actb_login.php">Log-In</a></li>
        <li><a href="actb_home.php">User Profile</a></li>
    </ul>
    <br><br>
    
        <div>
        <h2 style="text-align: center;">Personal Information Registration</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>
            <label>First Name: </label><input type="text" name="fname" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Middle Name:  </label><input type="text" name="mname" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Last Name: </label><input type="text" name="lname" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Username: </label><input type="text" name="username" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Password: </label><input type="text" name="pw" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Confirm Password: </label><input type="text" name="confirmpw" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Date of Birth: </label><input type="date" name="dob" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Email: </label><input type="email" name="email" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Contact Number: </label><input type="number" name="contactno" pattern="[0-9]{11}" required>&nbsp;&nbsp;<br><br>
        </p>
            <p><input type="submit" name="submit" value="Submit" class="button"></td></p>
        </form>
        <br>
        <?php
        require_once "setdb.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $pw = $_POST['pw'];
            $confirmpw = $_POST['confirmpw'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $contactno = $_POST['contactno'];

            echo "<hr>";
            if(strcmp($pw,$confirmpw)==0){   
                $info = $connect->prepare("insert into reg(fname, mname, lname, username, pw, confirmpw, dob, email, contactno)
                values(?,?,?,?,?,?,?,?,?)");
                $info->bind_param("sssssssss", $fname, $mname, $lname, $username, $pw, $confirmpw, $dob, $email, $contactno);
                $todb = $info->execute();
                if($todb){
                    echo "Registration Successful!<br>";
                    

                    echo "<h3>Your Personal Information</h3>";
                    echo "First Name: ".$fname;
                    echo "<br><br>";
                    echo "Middle Name: ".$mname;
                    echo "<br><br>";
                    echo "Last Name: ".$lname;
                    echo "<br><br>";
                    echo "Username: ".$username;
                    echo "<br><br>";
                    echo "Password: ".$pw;
                    echo "<br><br>";
                    echo "Date of Birth: ".$dob;
                    echo "<br><br>";
                    echo "Email: ".$email;
                    echo "<br><br>";
                    echo "Contact Number: ".$contactno;
                    echo "<br><br>";

                    $info->close();
                    $connect->close();
                }
                else{
                    echo "Registration unsuccessful. Please try again...";
                }
            }
            else{
                echo "Password and confirm password are not the same. Please try again...";
            }
        }
        ?>
        </div>
    </body>
</html>