<!DOCTYPE html>
<html>
    <head>
        <title>Information Registration</title>
        <link rel="stylesheet" href="style.css">
        <style>
            li{
                list-style-type: none;
                color: black;
                border-radius: 10px;
                padding: 1px 1px;
            }
        </style>
    </head>
    <body bgcolor="#f5e8db">
    <ul>
        <li><a href="login.php">Log-In</a></li>
    </ul>
    <br><br>
    
        <div>
        <h2 style="text-align: center;">Add Record</h2>
        <li style='float:right;'><a href='admin.php' style='color:dimgray; border-radius:10px;'><b><u>Back</u></b></a></li>
        <br><br><br><hr><br>
        <table>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <tr><td>Email: </td><td colspan="2"><input type="email" name="email" required></td></tr>

                <tr><td>Username: </td><td colspan="2"><input type="text" name="username" required></td></tr>

                <tr><td>Password: </td><td colspan="2"><input type="password" name="password" required></td></tr>

                <tr><td>User Level: </td>
                <td><input type="radio" id="admin" name="userlevel" value="Admin" required>
                <label for="admin">Admin</label></td>
                <td><input type="radio" id="user" name="userlevel" value="User" required>
                <label for="user">User</label></td></tr>

                <tr><td>Status: </td>
                <td><input type="radio" id="active" name="status" value="Active" required>
                <label for="active">Active</label></td>
                <td><input type="radio" id="disable" name="status" value="Disable" required>
                <label for="disable">Disable</label></td></tr>
                <tr> </tr>
                <tr><td></td><td><input type="submit" name="submit" value="Submit" class="button"></td><td></td></tr>
            </form>
        </table>
        <br>
        <?php
        require_once "setdb.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userlevel = $_POST['userlevel'];
            $status = $_POST['status'];

            echo "<hr>";
            $info = $connect->prepare("insert into record_info(username, email, password, userlevel, status)
            values(?,?,?,?,?)");
            $info->bind_param("sssss", $username, $email, $password, $userlevel, $status);
            $todb = $info->execute();
            if($todb){
                echo "Record Added Successful!<br>";
                    

                echo "<h3>Record Information</h3>";
                echo "Email: ".$email;
                echo "<br><br>";
                echo "Username: ".$username;
                echo "<br><br>";
                echo "Password: ".$password;
                echo "<br><br>";
                echo "User Level: ".$userlevel;
                echo "<br><br>";
                echo "Status: ".$status;
                echo "<br><br>";

                $info->close();
                $connect->close();
            }
            else{
                echo "Registration unsuccessful. Please try again...";
            }
        }
        ?>
        </div>
    </body>
</html>