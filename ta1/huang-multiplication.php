<!DOCTYPE html>
<html>
    <head>
        <title>Multiplication Table</title>
    </head>
    <style>
        table, th, td{
            color:black;
            margin-left: auto;
            margin-right: auto;
            border:1px solid black;
            
        }
        table{
            background-color: white;
            width: 300px;
            height: 300px;
        }
        td, th{
            background-color: #f4cccc;
        }

        tr:nth-child(even) td:nth-child(odd),
        tr:nth-child(odd) td:nth-child(even){
            background-color: 	#cfe2f3;
        }

        p{
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #f4cccc;
        }

        li{
            float: left;
        }

         li a{
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active){
            background-color: #d9d2e9;
        }
        
        .active {
            background-color: #cfe2f3;
        }
    </style>
    <body>
        <ul>
            <li><a href ="http://localhost/adet/huangschoolform.php"><p>Student Registration Form</p></a></li>
            <li><a class = "active" href="http://localhost/adet/huang-multiplication.php"><p><i>Multiplication Table</i></p></a></li>
            <li><a href="http://localhost/adet/huang-fibonacci.php"><p>Fibonacci</p></a></li>
            <li><a href="http://localhost/adet/huang-factorial.php"><p>Factorial</p></a></li>
            <li style="float:right"><a><p>By Dana Huang</p></a>
        </ul>

        <br>
        <h2><p style="text-align:center">Multiplication Table</p></h2>
        <?php
        $row = 10;
        $col = 10;
        echo "<table>";

        for ($r =0; $r <= $row; $r++){
            echo'<tr>';
            for ($c = 0; $c <= $col; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>';
        }
        
        echo"</table>";
        ?>
    </body>
</html>