<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
        <link rel="stylesheet" href="styling.css">
    </style>
    </head>
    <body bgcolor="#F2F0DF">
        <ul>
            <li><a class="active" href ="montharray.php"><i>Calendar</i></a></li>
            <li><a href="fruit-directory.php">Fruit Directory</a></li>
            <li><a href="shapevolume.php">Volume of Shapes</a></li>
            <li><a href="studresume.php">Student Resume</a></li>
            <li><a href="stringfunc.php">String Functions</a></li>
            <li style="float:right"><a>By Dana Huang</a>
        </ul>

        <br><br>
        
        <table>
            <th colspan="7"><?php echo "September";?></th>
            <?php
            echo "<tr><td>Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td>
            <td>Friday</td><td>Saturday</td><td>Sunday</td></tr><tr>";

            $days = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
            $ctr = 0;
            foreach($days as $val){
                if($val == 29){
                    echo "<td style='background-color:red'>$val</td>";
                }
                else{
                    echo "<td>$val</td>";
                }
                
                $ctr++;
                if($ctr==7){
                    echo "</tr><tr>";
                    $ctr = 0;
                }
            }
            ?>
        </table>
        
    </body>
</html>