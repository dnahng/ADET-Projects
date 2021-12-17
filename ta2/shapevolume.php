<!DOCTYPE html>
<html>
    <head>
        <title>Volume of Shapes</title>
        <link rel="stylesheet" href="styling.css">
        <style>
            td{
                width: 15%;
            }
        </style>
    </head>
    <body bgcolor="#F2F0DF">
    <ul>
        <li><a href ="montharray.php">Calendar</a></li>
        <li><a href="fruit-directory.php">Fruit Directory</a></li>
        <li><a class="active" href="shapevolume.php"><i>Volume of Shapes</i></a></li>
        <li><a href="studresume.php">Student Resume</a></li>
        <li><a href="stringfunc.php">String Functions</a></li>
        <li style="float:right"><a>By Dana Huang</a>
    </ul>

    <?php
    //function definition
    function cube($a){
        $ans = pow($a, 3);
        return $ans;
    }
    function rrprism($w, $h, $l){
        $ans = $w*$h*$l;
        return $ans;
    }
    function prism($b, $h){
        $ans = $b*$h;
        return $ans;
    }
    function cyl($r, $h){
        $ans = 3.14159*(pow($r, 2))*$h;
        return $ans;
    }
    function coneform($r, $h){
        $ans = 3.14159*(pow($r,2))*($h/3);
        return $ans;
    }
    function pyramid($w, $h, $l){
        $ans = ($w*$h*$l)/3;
        return $ans;
    }
    function sphere($r){
        $ans = (4/3)*3.14159*pow($r,3);
        return $ans;
    }

    
    ?>
    <h2><p style="text-align: center;">Volume of Shapes</p></h2>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <p style="text-align: center;">
    Enter Sides of Cube: <input type="side" name="side" required>&nbsp; <br><br>
    Enter Width: <input type="width" name="width" required>&nbsp;&nbsp;<br><br>
    Enter Height: <input type="height" name="height" required>&nbsp;&nbsp;<br><br>
    Enter Length: <input type="length" name="length" required>&nbsp;&nbsp;<br><br>
    Enter Base: <input type="base" name="base" required>&nbsp;&nbsp;<br><br>
    Enter Radius: <input type="rad" name="rad" required>&nbsp;&nbsp;<br><br>
    <input type="submit" name="submit" value="Submit" class="button"></td></p>
    </form>

    <br><hr>
    <?php
    $a = 0;
    $w;
    $h;
    $l;
    $b;
    $r;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['side'];
        $w = $_POST['width'];
        $h = $_POST['height'];
        $l = $_POST['length'];
        $b = $_POST['base'];
        $r = $_POST['rad'];
    }
    if($a){
        $cubeans = cube($a);
        $recpris = rrprism($w, $h, $l);
        $pris = prism($b, $h);
        $cylinder = cyl($r, $h);
        $pyrans = pyramid($w, $h, $l); 
        $cone = coneform($r, $h);
        $sphereans = sphere($r);

        echo "<table><th colspan=4><h3>Volume of Shapes</h3></th>";

        echo "<tr><td><b>Shape</br></td><td><b>Values</b></td><td><b>Formula</b></td><td><b>Answer</b></td></tr>";

        echo "<tr><td>Cube<br></td><td>S = $a </td><td>V = S^3</td><td>$cubeans</td></tr>";
        echo "<tr><td>Right Rectangular Prism</td><td>w = $w<br>h = $h<br>l = $l</td><td>V = lwh</td><td>$recpris</td></tr>";
        echo "<tr><td>Prism</td><td>B = $b<br>h = $h</td><td>V = Bh</td><td>$pris</td></tr>";
        echo "<tr><td>Cylinder</td><td>r = $r<br>h = $h</td><td>V=πr^2h</td><td>$cylinder</td></tr>";
        echo "<tr><td>Pyramid</td><td>w = $w<br>h = $h<br>l = $l</td><td>V = lwh/3</td><td>$pyrans</td></tr>";
        echo "<tr><td>Cone</td><td>r = $r<br>h = $h</td><td>V=πr^2(h/3)</td><td>$cone</td></tr>";
        echo "<tr><td>Sphere</td><td>r = $r</td><td>V = (4/3)πr^3</td><td>$sphereans</td></tr>";

        
        echo "</table>";
    }
    ?>
    </body>
</html>