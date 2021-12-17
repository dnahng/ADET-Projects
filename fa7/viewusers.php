<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
        <style>
            table, th, td{
                margin-left: auto;
                margin-right: auto;
                border: 1px solid black;
                padding: 10px;
                align-items: center;
            }
            table{
                background-color: white;
                text-align: center;
                width: 400px;
            }
            div{
                width: 700px;
            }
        </style>
    </head>
    <body bgcolor="#f5e8db">
    <ul>
        <li><a class="active" href ="login.php"><i>Log-In</i></a></li>
    </ul>
    <br><br>

        <?php 
        require_once "setdb.php";
        session_start();
        if(!isset($_SESSION['p_un'])){
            header('location: login.php');
        }
        $username = $_SESSION['p_un'];
        ?>

        <div>
            <h2>View Records</h2>
            <li style='float:right; list-style-type:none;'><a href='admin.php' class='a1' style='color:dimgray; border-radius:10px;'><b><u>Back</u></b></a></li>
            <br><br><hr><br>
            <?php
            $records = mysqli_query($connect, "select * from record_info");

            echo "<table>";
            echo "<tr><td>ID</td><td>Email</td><td>Username</td><td>Password</td><td>Userlevel</td><td>Status</td></tr>";

            while($data = mysqli_fetch_array($records)){
                echo "<tr><td>".$data['id']."</td><td>".$data['email']."</td><td>".$data['username']."</td><td>".$data['password']."</td><td>".$data['userlevel']."</td><td>".$data['status']."</td></tr>";
            }
            echo "</table>";
            echo "<br><br>";
            ?>
        </div>
    </body>
</html>