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
            }
            td{
                width: 20%;
            }
            *{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
                text-align: center;
            }
        </style>
    </head>
    <body bgcolor="#d9d2e9">
        <table>
            <tr>
                <?
                echo "<h2>Short Stories and Fables</h2>";
                echo "Stories by: Aesop || Webpage by: Dana Huang<br><br>";
                echo "<td>";
                include 'story1.php';
                echo "</td>";

                echo "<td>";
                include 'story2.php';
                echo "</td>";

                echo "<td>";
                require 'story3.php';
                echo "</td>";

                echo "<td>";
                require 'story4.php';
                echo "</td>";

                echo "<td>";
                require 'story5.php';
                echo "</td>";
                ?>
            </tr>
        </table>
    </body>
</html>