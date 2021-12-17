<!DOCTYPE html>
<html>
    <head>
        <title>Personal Information Webpage (COOKIES)</title>
        <style>
            *{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            form{
                display: table;
                margin:auto;
            }
            p{
                display: table-row;  
            }
            label {
                display: table-cell; 
            }
            input{ 
                display: table-cell; 
            }
            div{
                border: 5px solid white;
                background-color: #F5D8CB;
                width: 500px;
                border-radius: 20px;
                padding: 20px;
                margin: auto;
            }
            hr{
                border: 3px solid white;
            }
            .button{
                background-color: #BFA2CA;
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                cursor: pointer;
                width: 100%;
            }
            .button:hover{
                background-color: #DBBFD5;
            }
        </style>
    </head>
    <body bgcolor="#DBBFD5">
        <div>
        <h2 style="text-align: center;">Personal Information Webpage (COOKIES)</h2>
        <h4 style="text-align:center;">by: Dana Huang</h4>
        <br>
        <?php
            $fname = "Dana Faye";
            $mname = "Domingo";
            $lname = "Huang";

            echo "<h3>Personal Information</h3>";
            echo "First Name: ".$fname;
            echo "<br><br>";
            echo "Middle Name: ".$mname;
            echo "<br><br>";
            echo "Last Name: ".$lname;
            echo "<br><br>";

            $cookie1 = "fcookie";
            $cookie2 = "mcookie";
            $cookie3 = "lcookie";

            setcookie($cookie1, $fname);
            setcookie($cookie2, $mname);
            setcookie($cookie3, $lname);

            echo "<hr>";

            ob_implicit_flush(true);
            ob_end_flush();

            echo "<h3>Cookies</h3>";
            sleep(10);
            echo "First Name: ".$_COOKIE[$cookie1];
            echo "<br><br>";
            sleep(10);
            echo "Middle Name: ".$_COOKIE[$cookie2];
            echo "<br><br>";
            sleep(10);
            echo "Last Name: ".$_COOKIE[$cookie3];
            echo "<br><br>";

        ?>
        </div>
    </body>
</html>