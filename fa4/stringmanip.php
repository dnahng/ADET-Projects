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
        th,td{
            padding: 5px;
        }
        *{
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
            text-align: center;
        }
    </style>
    </head>
    <body bgcolor="#d9d2e9">
        <?echo "<h3>String Functions</h3>";
        echo "by: Dana Huang<br><br>"?>
        <table>
            <th colspan="6"><?Echo "List of Names"?></th>

            <?
            echo "<tr><td>Name</td><td>Number of characters</td><td>Uppercase first character</td>
            <td>Replace vowels with @</td><td>Check position of character \"a\"</td><td>Reverse name</td></tr>";

            $names = array("taeil", "johnny", "yuta", "lee taeyong", "qian kun", "doyoung", "ten", "jaehyun", 
            "winwin", "jungwoo", "mark", "xiaojun", "hendery", "renjun", "haechan", "jaemin", "yangyang", 
            "chenle", "shotaro", "sungchan");

            $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

            foreach($names as $nameval){
                echo "<tr><td>".$nameval."</td>";
                echo "<td>".strlen($nameval)."</td>";
                echo "<td>".ucfirst($nameval)."</td>";
                echo "<td>".str_replace($vowels, "@", $nameval)."</td>";
                if(strpos($nameval, "a")){
                    echo "<td>".strpos($nameval, "a")."</td>";
                }
                else{
                    echo "<td>No \"a\" character</td>";
                }
                echo "<td>".strrev($nameval)."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>