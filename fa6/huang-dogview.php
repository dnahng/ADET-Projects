<!DOCTYPE html>
<html>
    <head>
        <title>View Dog Information</title>
        <style>
            *{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            form{
                display: table;
                margin:auto;
            }
            table, th, td{
                margin-left: auto;
                margin-right: auto;
                border: 1px solid black;
                padding: 10px;
            }
            table{
                background-color: white;
                text-align: center;
                width: 400px;
            }
            div{
                border: 5px solid white;
                background-color: #FFE0BD;
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
    <body bgcolor="#FFD0CE">
        <div>
        <h2 style="text-align: center;">View Dog Information</h2>
        <h4 style="text-align:center;">by: Dana Huang</h4>
        
        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'dogInfo');
        if($connect->connect_error){
            echo "$connect->connect_error";
            die("Connection Failed : ".$connect->connect_error);
        }
        else{
            $records = mysqli_query($connect, "select * from info");

            while($data = mysqli_fetch_array($records)){
                echo "<table>";
                echo "<tr><td colspan='2' text-align='center'>Dog ".$data['id']."</td><tr>";
                echo "<tr><td>Name: </td><td>".$data['name']."</td></tr>";
                echo "<tr><td>Breed: </td><td>".$data['breed']."</td></tr>";
                echo "<tr><td>Age: </td><td>".$data['age']."</td></tr>";
                echo "<tr><td>Address: </td><td>".$data['address']."</td></tr>";
                echo "<tr><td>Color: </td><td>".$data['color']."</td></tr>";
                echo "<tr><td>Height: </td><td>".$data['height']."</td></tr>";
                echo "<tr><td>Weight: </td><td>".$data['weight']."</td></tr>";
                echo "</table>";
                echo "<br><br>";
            }
            mysqli_close($connect);
        }
        ?>
        </div>
    </body>
</html>