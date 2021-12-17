<!DOCTYPE html>
<html>
    <head>
        <title>Favorite Colors</title>
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
                border: 1px solid black;
                padding: 10px;
            }
            table{
                background-color: white;
                text-align: center;
            }
            div{
                border: 5px solid white;
                background-color: #D1B4B4;
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
        </style>
    </head>
    <body bgcolor="#D4BBAD">
        <div>
        <?php
        session_start();

        echo "<h2 style=\"text-align: center;\">Favorite Colors</h2>";
        echo "<h4 style=\"text-align:center;\">by: Dana Huang</h4><table>";
        echo "<th colspan=\"6\" text-align=\"center\">Enter Your Favorite Colors</th><form method=\"post\" action=\"huang-resultcolors.php\">";
        echo "<tr><td>Favorite Color 1: </td><td><input type=\"text\" name=\"color1\" required>&nbsp;&nbsp;<br><br></tr>";
        echo "<tr><td>Favorite Color 2:  </td><td><input type=\"text\" name=\"color2\" required>&nbsp;&nbsp;<br><br></tr>";
        echo "<tr><td>Favorite Color 3: </td><td><input type=\"text\" name=\"color3\" required>&nbsp;&nbsp;<br><br></tr>";
        echo "<tr><td>Favorite Color 4: </td><td><input type=\"text\" name=\"color4\" required>&nbsp;&nbsp;<br><br></tr>";
        echo "<tr><td>Favorite Color 5: </td><td><input type=\"text\" name=\"color5\" required>&nbsp;&nbsp;<br><br></tr>";
        echo "<tr><td colspan=\"6\" align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Send Colors\" class=\"button\"></td></tr></form></table><br>";
        ?>
        </div>
    </body>
</html>