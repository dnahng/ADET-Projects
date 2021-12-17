<!DOCTYPE html>
<html>
    <head><title>Fibonacci Sequence</title></head>
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
    <?php
    $num = "";
    ?>
    <body>

    <ul>
        <li><a href ="http://localhost/adet/huangschoolform.php"><p>Student Registration Form</p></a></li>
        <li><a href="http://localhost/adet/huang-multiplication.php"><p>Multiplication Table</p></a></li>
        <li><a class = "active" href="http://localhost/adet/huang-fibonacci.php"><p><i>Fibonacci</i></p></a></li>
        <li><a href="http://localhost/adet/huang-factorial.php"><p>Factorial</p></a></li>
        <li style="float:right"><a><p>By Dana Huang</p></a>
    </ul>

    <br>

    <h2><p style="text-align: center;">Fibonacci Sequence</p></h2>
    
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

    
    if($num == TRUE){
        echo "<h3><p>Fibonacci Sequence: </p></h3><br>";
        //loop for fibonacci
        $n1 = 0;
        $n2 = 1;
        echo $n1.", ".$n2;
        for($i = 1; $i<=$num-1;$i++){
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;
            echo ", ".$n3;
        }
    }
    else{
        echo " ";
    }
    

    ?>


    </body>
</html>