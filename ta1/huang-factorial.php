<!DOCTYPE html>
<html>
    <head><title>Factorial</title></head>
    <style>
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

        .button{
            background-color: #6fa8dc;
            color: white;
            padding: 3px 10px;
            border-radius: 10px;
            cursor: pointer;
        }

        .button:hover{
          background-color: #d9d2e9;
          color:black;
        }
    </style>
    <? $num = ""; ?>
    <body>
    <ul>
        <li><a href ="http://localhost/adet/huangschoolform.php"><p>Student Registration Form</p></a></li>
        <li><a href="http://localhost/adet/huang-multiplication.php"><p>Multiplication Table</p></a></li>
        <li><a href="http://localhost/adet/huang-fibonacci.php"><p>Fibonacci</p></a></li>
        <li><a class = "active" href="http://localhost/adet/huang-factorial.php"><p><i>Factorial</i></p></a></li>
        <li style="float:right"><a><p>By Dana Huang</p></a>
    </ul>

    <br>

    <h2><p style="text-align: center;">Factorial</p></h2>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <p style="text-align: center;">
    Enter Number: <input type="number" name="num" required>&nbsp;&nbsp;
    <input type="submit" name="submit" value="Submit" class="button"></td></p>
    </form>

    <br><hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];
    }
    if($num){
        echo "<h3><p>Factorial Computation</p></h3>";
        $x = 1;
        //displays the simulation of factorial
        for($j=$num; $j>=1; $j--){
            if($j==1){
                echo $j;
            }
            else{
                echo $j." x ";
            }
        }
    
        //loop for the computation
        for($i=1; $i<=$num-1; $i++){
            $x*=($i+1);
        }
        echo " = $x <br>";
        echo "<br> The factorial of $num is $x"; 
    }
    else{
        echo "";
    }
    ?>
    </body>
</html>