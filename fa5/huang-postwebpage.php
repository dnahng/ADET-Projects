<!DOCTYPE html>
<html>
    <head>
        <title>Personal Webpage Using POST</title>
        <style>
            *{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            form{
                display: table;
                margin:auto;
            }
            p{
                display: table-row;  
            }
            label {
                display: table-cell; 
            }
            input{ 
                display: table-cell; 
            }
            div{
                border: 5px solid white;
                background-color: #CEDFBC;
                width: 500px;
                border-radius: 20px;
                padding: 20px;
                margin: auto;
            }
            hr{
                border: 3px solid white;
            }
            .button{
                background-color: #BFA2CA;
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                cursor: pointer;
                width: 100%;
            }
            .button:hover{
                background-color: #DBBFD5;
            }
        </style>
    </head>
    <body bgcolor="#F5E9D3">
        <div>
        <h2 style="text-align: center;">Personal Webpage Using POST</h2>
        <h4 style="text-align:center;">by: Dana Huang</h4>
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
            <label>Date of Birth: </label><input type="text" name="dob" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Address: </label><input type="text" name="add" required>&nbsp;&nbsp;<br><br>
        </p>
            <p><input type="submit" name="submit" value="Submit" class="button"></td></p>
        </form>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $dob = $_POST['dob'];
            $add = $_POST['add'];

            echo "<hr>";

            echo "<h3>Your Personal Information</h3>";
            echo "First Name: ".$fname;
            echo "<br><br>";
            echo "Middle Name: ".$mname;
            echo "<br><br>";
            echo "Last Name: ".$lname;
            echo "<br><br>";
            echo "Date of Birth: ".$dob;
            echo "<br><br>";
            echo "Address: ".$add;
            echo "<br><br>";
        }
        ?>
        </div>
    </body>
</html>