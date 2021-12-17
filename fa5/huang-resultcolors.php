<!DOCTYPE html>
<html>
    <head>
        <title>Result of Favorite Colors</title>
        <style>
            *{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            form{
                margin:auto;
            }
            table, th, td{
                margin-left: auto;
                margin-right: auto;
                padding: 5px;
            }
            table{
                text-align: left;
            }
            div{
                border: 5px solid white;
                background-color: #D4BBAD;
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
                width: 80%;
            }
            .button:hover{
                background-color: #B9C8F3;
            }
            p{
                text-align: center;
            }
        </style>
    </head>
    <body bgcolor="#D1B4B4">
        <div>
            <?php
            echo "<h2 style=\"text-align: center;\">Result of Favorite Colors</h2>";
            echo "<h4 style=\"text-align:center;\">by: Dana Huang</h4>";
            echo "<br><hr>";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                error_reporting(0);
                $color1 = $_POST["color1"];
                $color2 = $_POST["color2"];
                $color3 = $_POST["color3"];
                $color4 = $_POST["color4"];
                $color5 = $_POST["color5"];
                
                $_SESSION['color1'] = $color1;
                $_SESSION['color2'] = $color2;
                $_SESSION['color3'] = $color3;
                $_SESSION['color4'] = $color4;
                $_SESSION['color5'] = $color5;
                if (!empty($color1)){}
                    echo "<table>";
                    echo "<tr><td colspan='2'><h3 style=\"text-align:center;\">Favorite Colors Are:</h3></td></tr>";
                    echo "<tr><td>My Favorite Color 1: </td><td>".$_SESSION['color1']."<br></td></tr>";
                    echo "<tr><td>My Favorite Color 2: </td><td>".$_SESSION['color2']."<br></td></tr>";
                    echo "<tr><td>My Favorite Color 3: </td><td>".$_SESSION['color3']."<br></td></tr>";
                    echo "<tr><td>My Favorite Color 4: </td><td>".$_SESSION['color4']."<br></td></tr>";
                    echo "<tr><td>My Favorite Color 5: </td><td>".$_SESSION['color5']."<br></td></tr>";
                    echo "</table>";
                
            }
            else{
                echo "<p>You have not yet entered any favorite colors</p>";
            }
            ?>
        </div>
    </body>
</html>