<!DOCTYPE html>
<html>
    <head>
        <title>Student Resume</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body bgcolor="#F2F0DF">
    <ul>
        <li><a href ="montharray.php">Calendar</a></li>
        <li><a href="fruit-directory.php">Fruit Directory</a></li>
        <li><a href="shapevolume.php">Volume of Shapes</a></li>
        <li><a class="active" href="studresume.php"><i>Student Resume</i></a></li>
        <li><a href="stringfunc.php">String Functions</a></li>
        <li style="float:right"><a>By Dana Huang</a>
    </ul>
    <table>
        <tr>
            <td><img src="picture.jpg" title="Dana Faye Huang" height="200" width="200"></td>
            <td><?php include 'personalinfo.php';?></td>
        </tr>
    </table>
    <hr style="background-color: #968477; height: 2px">

    
    <div class ="column", style="background-color:#97A69A;">
    <table>
        <tr><td style="text-align: center;"><?php require 'careerobj.php'; ?><br></td></tr>
    </table>
    </div>


    <div class ="column", style="background-color:#C8D2BF;">
    <table>
        <tr>
            <td style="width:20%;"></td><td><?php include 'educ.php'; ?></td><td></td>
        </tr>
    </table>
    </div>


    <div class ="column", style="background-color:#97A69A;">
    <table>
        <tr>
            <td style="width:20%;"></td><td><?php require 'skills.php'; ?></td><td style="width:20%;"></td>
        </tr>
    </table>
    </div>


    <div class ="column", style="background-color:#C8D2BF;">
    <table>
        <tr>
            <td style="width:20%;"></td><td><?php include 'affil.php'; ?></td><td style="width: 20%;"></td>
        </tr>
    </table>
    </div>

    <div class ="column", style="background-color:#97A69A;">
    <table>
        <tr>
            <td style="width:20%;"></td><td><?php include 'exp.php'; ?></td><td></td>
        </tr>
    </table>
    </div>

    </body>
</html>