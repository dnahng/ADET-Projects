<html>
    <body>
        <?php
        echo "<h3>Two-digit decimal combinations </h3>";
        $ctr = 0;
        while($ctr<10){
            echo "0$ctr, ";
            $ctr++;
        }
        while($ctr<=99){
            echo "$ctr, ";  
            $ctr++;
        }
        ?>
    </body>
</html>