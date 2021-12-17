<!DOCTYPE html>
<html>
    <head>
        <title>String Functions</title>
        <link rel="stylesheet" href="styling.css">
        <style>
            table{
                width: 100%;
                text-align: left;
            }
        </style>
    </head>
    <body bgcolor="#F2F0DF">
    <ul>
        <li><a href ="montharray.php">Calendar</a></li>
        <li><a href="fruit-directory.php">Fruit Directory</a></li>
        <li><a href="shapevolume.php">Volume of Shapes</a></li>
        <li><a href="studresume.php">Student Resume</a></li>
        <li><a class="active" href="stringfunc.php"><i>String Functions</i></a></li>
        <li style="float:right"><a>By Dana Huang</a>
    </ul>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <p style="text-align: center;">
    Enter Sentence: <input type="str" name="str" required>&nbsp; <br><br>
    <input type="submit" name="submit" value="Submit" class="button"></td></p><br>
    </form>
    <hr style="background-color: #968477; height: 2px"><br>
    <?php
    $string = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string = $_POST['str'];
    }
    if($string){
        echo "<h2 style='text-align:center'>String Functions</h2>";

        echo "<table><th>No.</th><th>Description</th><th>Output</th>";
        
        //1
        echo "<tr><td>1.</td><td>Original value of \$string</td><td>*".htmlspecialchars($string)."*</td></tr>";

        //2
        echo "<tr><td>2.</td><td>Number of characters</td><td>*".strlen($string)."*</td></tr>";
        
        //3
        echo "<tr><td>3.</td><td>Number of word</td><td>*".str_word_count($string)."*</td></tr>";
        echo "<tr><td colspan=3 height=15px></td></tr>";

        //4
        echo "<tr><td>4.</td><td>First character to uppercase</td><td>*".ucfirst(htmlspecialchars($string))."*</td></tr>";

        //5
        echo "<tr><td>5.</td><td>First character of each word to uppercase</td><td>*".ucwords(htmlspecialchars($string))."*</td></tr>";

        //6
        echo "<tr><td>6.</td><td>To lower</td><td>*".strtolower(htmlspecialchars($string))."*</td></tr>";

        //7
        echo "<tr><td>7.</td><td>To upper</td><td>*".strtoupper(htmlspecialchars($string))."*</td></tr>";
        echo "<tr><td colspan=3 height=15px></td></tr>";

        //8
        echo "<tr><td>8.</td><td>Without leading spaces</td><td>*".ltrim(htmlspecialchars($string))."*</td></tr>";

        //9
        echo "<tr><td>9.</td><td>Without trailing spaces</td><td>*".rtrim(htmlspecialchars($string))."*</td></tr>";

        //10
        echo "<tr><td>10.</td><td>Without leading and trailing spaces</td><td>*".trim(htmlspecialchars($string))."*</td></tr>";
        echo "<tr><td colspan=3 height=15px></td></tr>";

        //11
        echo "<tr><td>11.</td><td>MD5 value of \$string</td><td>*".md5($string)."*</td></tr>";

        //12
        echo "<tr><td>12.</td><td>Base64 value of \$string</td><td>*".base64_encode($string)."*</td></tr>";

        //13
        echo "<tr><td>13.</td><td>First 16 characters</td><td>*".substr($string, 0, 16)."*</td></tr>";

        //14
        echo "<tr><td>14.</td><td>Last 4 characters</td><td>*".substr($string, -4)."*</td></tr>";

        //15
        echo "<tr><td>15.</td><td>4 characters starting from the 20'th Position</td><td>*".substr($string, 20, 4)."*</td></tr>";
        
        //16
        echo "<tr><td>16.</td><td>Position of the word \"guide\"</td><td>*",var_dump(strpos($string, "guide")),"*</td></tr>";

        //17
        echo "<tr><td>17.</td><td>Position of the word \"UE\"</td><td>*",var_dump(strpos($string, 'UE')),"*</td></tr>";

        //18
        echo "<tr><td>18.</td><td>\"HTML\" word in uppercase</td><td>*".str_replace("html", "HTML", htmlspecialchars($string))."*</td></tr>";

        //19
        echo "<tr><td>19.</td><td>\"".htmlspecialchars("<INPUT>")."\" word in uppercase</td><td>*".str_replace("input", "INPUT", htmlspecialchars($string))."*</td></tr>";

        //20
        echo "<tr><td>20.</td><td>Strings converted to array</td><td>";
        $stringarr = explode(" ", trim(htmlspecialchars($string)));
        foreach ($stringarr as $val){
            echo "*".$val."*<br>";
        }
        echo "</td></tr>";
        echo "</table>";
    }
    ?>
    </body>
</html>