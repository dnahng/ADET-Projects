<!DOCTYPE html>
<html>
    <head>
        <title>User Account</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body bgcolor="#f5e8db">
    <ul>
        <li><a href="login.php">Log-In</a></li>
    </ul>
    <br><br>

        <div>
        <?php
        require_once "setdb.php";
        session_start();
        
        if(!isset($_SESSION['p_un'])){
            header('location: login.php');
        }
        $username = $_SESSION['p_un'];
        $record = mysqli_query($connect, "select * from record_info where username = '$username'");
        
        
        echo "<h2>User Account</h2>";
        ?>
        
        <li style='float:right; list-style-type:none;'><a href='logout.php' class='a1' style='color:dimgray; border-radius:10px;'><b><u>Log-out</u></b></a></li><br><br>
        <br>

        

        <?php
        
        echo "<br><br>";
        while($data = mysqli_fetch_array($record)){
            if($data['image']!=''){
                echo "<img src='uploads/".$data['image']."' height='150' width='150'>";
            }
            else{
                echo "<img src='blank.png' height='150' width='150'>";
            }

            echo "<b>Welcome </b><br> &nbsp;&nbsp;".$data['username']." (".$data['userlevel'].") <br>";
            echo "<b>User Level: </b><br> &nbsp;&nbsp;".$data['userlevel']."<br>";
            echo "<b>Email: </b><br> &nbsp;&nbsp;".$data['email']."<br>";
        }

        echo "<br><br>";
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
        <br><br><input type="file" name="pic" id="pic" style="float:right; margin-right:-70px;">
        <button type="submit" name="upload">POST</button>
        <?php
        if (isset($_POST['upload'])) {

            $image = $_FILES['pic']['name'];
            // image file directory
            $target = "/Applications/XAMPP/xamppfiles/htdocs/adet/fa7/uploads/".basename($image);

            $setpic = $connect->query("UPDATE record_info SET image='".$image."' WHERE username = '".$username."'");
            // execute query

            if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }

        ?>

        </form>
        <br><br><hr>
        
        <h3 style="text-align: center;">Reset Password</h3>
        <table>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <tr><td>Current Password: </td><td><input type="password" name="currpw" required>&nbsp;&nbsp;</td></tr>

                <tr><td>Enter New Password: </td><td><input type="password" name="newpw" required>&nbsp;&nbsp;</td></tr>

                <tr><td>Re-Enter New Password: </td><td><input type="password" name="confpw" required>&nbsp;&nbsp;</td></tr>

                <tr><td><input type="submit" name="submit" value="Submit" class="button"></td></tr>
            </form>
        </table>
        <br><br>

        <?php
        if(isset($_POST['submit'])){
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $currpw = $_POST['currpw'];
                $newpw = $_POST['newpw'];
                $confpw = $_POST['confpw'];

                $sql = mysqli_query($connect, "select password as pwchck from record_info where username='".$username."'");
                
                while($row = mysqli_fetch_array($sql)){
                    if ($currpw == $row['pwchck']){
                        if(strcmp($newpw,$confpw)==0){
                            $update_pw = "UPDATE record_info SET password='$newpw' WHERE username = '$username'";
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
        }
        
        ?>
        </div>
    </body>
</html>