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
                width: 500px;
            }
            *{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
                text-align: center;
            }
        </style>
    </head>
    <body bgcolor="#8caba8">
         
        <?php
        echo "<h2>Arithmetic Operations Using Arrays</h2>";
        echo "<h4>by: Dana Faye Huang</h4>";

        $num = array(1,2,3,4,5,6,7,8,9,10);
        $add = $sub = $multiply = $division = $num[0];

        for($i=0; $i < sizeof($num); $i++){
            $add = $add + $num[$i];
            $sub = $sub - $num[$i];
            $multiply = $multiply * $num[$i];
            $division = $division / $num[$i];
        }
        
        ?>
        <table>
            <th colspan="2"><?
            echo "Array List: ";
            foreach($num as $values){
                echo "$values ";
            }
            ?></th>
            <?
            echo "<tr><td>Addition</td><td>$add</td></tr>";
            echo "<tr><td>Subtraction</td><td>$sub</td></tr>";
            echo "<tr><td>Multiplication</td><td>$multiply</td></tr>";
            echo "<tr><td>Division</td><td>$division</td></tr>";
            ?>
        </table>
        
    </body>
</html>