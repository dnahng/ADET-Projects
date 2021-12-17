<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td{
                margin-left: auto;
                margin-right: auto;
                border: 1px solid black;
            }
            table{
                background-color: white;
                width: 600px;
            }
            *{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
                text-align: center;
            }
        </style>
    </head>
    <body bgcolor="#8caba8">
        <?

        echo "<h2>Arithmetic Operations Using User Defined Functions</h2>";
        echo "<h4>by: Dana Faye Huang</h4>";

        function my_func($p1, $p2, $p3){
            $add = $p1 + $p2 + $p3;
            $sub = $p1 - $p2 - $p3;
            $multiply = $p1 * $p2 * $p3;
            $division = $p1 / $p2 / $p3;

            echo "<table><th colspan=\"3\">My Parameter Values: $p1 $p2 $p3</th>";
            echo "<tr><td>Addition</td><td>$add</td></tr>";
            echo "<tr><td>Subtraction</td><td>$sub</td></tr>";
            echo "<tr><td>Multiplication</td><td>$multiply</td></tr>";
            echo "<tr><td>Division</td><td>$division</td></tr>";

        }

        echo my_func(25, 13, 6);
        ?>
    </body>
</html>