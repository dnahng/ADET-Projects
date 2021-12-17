<!DOCTYPE html>
<html>
    <head>
        <title>Register Dog Information</title>
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
                background-color: #FFD0CE;
                width: 500px;
                border-radius: 20px;
                padding: 20px;
                margin: auto;
            }
            hr{
                border: 2px solid white;
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
    <body bgcolor="#FFE0BD">
        <div>
        <h2 style="text-align: center;">Dog Information</h2>
        <h4 style="text-align:center;">by: Dana Huang</h4>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>
            <label>Name: </label><input type="text" name="name" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Breed:  </label><input type="text" name="breed" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Age: </label><input type="text" name="age" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Address: </label><input type="text" name="address" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Color: </label><input type="text" name="color" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Height (in feet): </label><input type="number" name="height" step="0.01" required>&nbsp;&nbsp;<br><br>
        </p>
        <p>
            <label>Weight (in kg): </label><input type="number" name="weight" step="0.01" required>&nbsp;&nbsp;<br><br>
        </p>
            <p><input type="submit" name="submit" value="Submit" class="button"></td></p>
        </form>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $breed = $_POST['breed'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $color = $_POST['color'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];

            echo "<hr>";

            $connect = new mysqli('localhost','root', '','dogInfo');
            if($connect->connect_error){
                echo "$connect->connect_error";
                die("Connection Failed : ".$connect->connect_error);
            }
            else{
                $info = $connect->prepare("insert into info(name, breed, age, address, color, height, weight)
                values(?,?,?,?,?,?,?)");
                $info->bind_param("sssssdd", $name, $breed, $age, $address, $color, $height, $weight);
                $todb = $info->execute();
                echo "Information has been stored...<br>";
                $info->close();
                $connect->close();
            }
        }
        ?>
        </div>
    </body>
</html>