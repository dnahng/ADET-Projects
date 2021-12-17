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
                width: 1000px;
            }
            p{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
                text-align: center;
            }
            h2, h4{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
            }
        </style>
    </head>
    <body bgcolor="#8caba8">
        <h2>Favorite KPOP Celebrities</h2>
        <h4>Using array, arranged alphabetically<br> By: Dana Faye Huang</h4>
        <?php
        $person = array(
            array("Mark Lee", '<img src="pics/mark.jpeg" height="200">', 22, "06/02/1999", "09728741256"),
            array("John Suh", '<img src="pics/johnny.jpeg" height="200">', 26, "02/09/1995", "09173256372"),
            array("Yi Zhuo Ning", '<img src="pics/ningning.jpeg" height="200">', 18, "10/23/2002", "09152663477"),
            array("Yuta Nakamoto", '<img src="pics/yuta.jpeg" height="200">', 25, "10/26/1995", "09285436734"),
            array("Hendery Huang", '<img src="pics/hendery.jpeg" height="200">', 22, "09/28/1999", "09391235675"),
            array("Kun Qian", '<img src="pics/kun.jpeg" height="200">', 25, "01/01/1996", "09172347388"),
            array("Yerim Kim", '<img src="pics/yeri.jpeg" height="200">', 22, "03/05/1999", "097512356278"),
            array("Yangyang Liu", '<img src="pics/yangyang.jpeg" height="200">', 21, "10/10/2000", "09153579235"),
            array("Chittaphon Leechaiyapornkul", '<img src="pics/ten.jpeg" height="200">', 25, "02/27/1996", "09391678283"),
            array("Roseanne Park", '<img src="pics/rose.jpeg" height="200">', 24, "02/11/1997", "09416734674"),
        );


        sort($person);
        echo "<table><tr><th><p>No.</p></th><th><p>Name</th>";
        echo "<th><p>Image</p></th><th><p>Age</p></th><th><p>Birthday</p></th><th><p>Contact Number</th></tr></p>";
        for ($row = 0; $row < 10; $row++) {
            echo "<tr><td><p>".($row+1)."</p></td>";
            for ($col = 0; $col < 5; $col++) {
              echo "<td><p>".$person[$row][$col]."</p></td>";
            }
            echo "</tr>";
          }
          echo "</table>"

        ?>
    </body>
</html>