<!DOCTYPE html>
<html>
    <head>
      <title>Student Registration Form</title>
        <style>
            table{
                width: 90%;
                background-color: white;
                padding: 15px;
                margin-left: auto;
                margin-right: auto;
                border: 1px solid black;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            p{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            p.upper{
                text-transform: uppercase;
                
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
                padding: 16px 20px;
                border-radius: 10px;
                cursor: pointer;
                width: 80%;
            }

            .button:hover{
              background-color: #d9d2e9;
              color:black;
            }
            </style>
        </head>
        <?php
        $lname = $fname = $minitial = $contactnum = $email = $gender = $dob = $prevSchoolName = 
        $prevSchoolAdd = $prevGrade = $parentName = $parentWork = $relation =
        $parentContact = $medical = $birthCountry = $citizenship = $address= "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["lname"])) {
            $lname = "";
          } else {
            $lname = test_input($_POST["lname"]);
          }
        
        if (empty($_POST["fname"])) {
          $fname = "";
        }
        else{
            $fname = test_input($_POST["fname"]);
        }
      
        if (empty($_POST["minitial"])) {
          $minitial = "";
        } else {
          $minitial = test_input($_POST["minitial"]);
        }
      
        if (empty($_POST["contactnum"])) {
            $contactnum = "";
          } else {
            $contactnum = test_input($_POST["contactnum"]);
          }
        
        if (empty($_POST["email"])) {
          $email = "";
        } else {
          $email = test_input($_POST["email"]);
        }

        if (empty($_POST["gender"])) {
          $gender = "";
        } else {
          $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["dob"])) {
            $dob = "";
          } else {
            $dob = test_input($_POST["dob"]);
          }
        
        if (empty($_POST["prevSchool"])) {
          $prevSchoolName = "";
        } else {
          $prevSchoolName = test_input($_POST["prevSchool"]);
        }
        
        if (empty($_POST["prevSchoolAdd"])) {
            $prevSchoolAdd = "";
          } else {
            $prevSchoolAdd = test_input($_POST["prevSchoolAdd"]);
          }
        

        if (empty($_POST["prevGrade"])) {
            $prevGrade = "";
          } else {
            $prevGrade = test_input($_POST["prevGrade"]);
          }

        if (empty($_POST["parentname"])) {
          $parentName = "";
        } else {
          $parentName = test_input($_POST["parentname"]);
        }

        if (empty($_POST["parentContact"])) {
          $parentContact = "";
        } else {
          $parentContact = test_input($_POST["parentContact"]);
        }

        if (empty($_POST["parentwork"])) {
            $parentWork = "";
          } else {
            $parentWork = test_input($_POST["parentwork"]);
          }
        
        if (empty($_POST["relationship"])) {
          $relation = "";
        } else {
          $relation = test_input($_POST["relationship"]);
        }

        if (empty($_POST["medical"])) {
          $medical = "";
        } else {
          $medical = test_input($_POST["medical"]);
        }

        if (empty($_POST["birthcountry"])) {
          $birthCountry = "";
        } else {
          $birthCountry = test_input($_POST["birthcountry"]);
        }

        if (empty($_POST["citizenship"])) {
          $citizenship = "";
        } else {
          $citizenship = test_input($_POST["citizenship"]);
        }

        if (empty($_POST["address"])) {
          $address = "";
        } else {
          $address = test_input($_POST["address"]);
        }

      } //end main if

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    ?>
        
    <body>

        <ul>
            <li><a class = "active" href ="http://localhost/adet/huangschoolform.php"><p><i>Student Registration Form</i></p></a></li>
            <li><a href="http://localhost/adet/huang-multiplication.php"><p>Multiplication Table</p></a></li>
            <li><a href="http://localhost/adet/huang-fibonacci.php"><p>Fibonacci</p></a></li>
            <li><a href="http://localhost/adet/huang-factorial.php"><p>Factorial</p></a></li>
            <li style="float:right"><a><p>By Dana Huang</p></a>
        </ul>

        <br><br>
        <table>
                <tr><td><h2>Student Registration Form</h2></td></tr>

                <tr><td><h4>Personal Information</h4></td></tr>
                <tr><td>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                First Name: <input style="text-transform: uppercase;" type="text" name="fname" required value="<?php echo $fname;?>">
                <br><br></td>
                <td>
                Middle Initial: <input style="text-transform: uppercase;" type="text" name="minitial" required value="<?php echo $minitial;?>">
                <br><br></td><td>
                Last Name: <input style="text-transform: uppercase;" type="text" name="lname" required value="<?php echo $lname;?>">

                <br><br></td></tr><tr><td>
                Contact Number: <input type="number" name="contactnum" required value="<?php echo $contactnum;?>">
                <br><br></td><td>
                Email: <input style="text-transform: uppercase;" type="text" name="email" value="<?php echo $email;?>">
                <br><br></td><td>
                Gender:
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
                <br><br></td></tr>
                <tr><td>
                Date of Birth: <input type="date" name="dob" required value="<?php echo $dob;?>">
                <br><br></td><td>
                Country of Birth: <input style="text-transform: uppercase;" type="text" name="birthcountry" required value="<?php echo $birthCountry;?>">
                <br><br></td><td>
                Citizenship: <input style="text-transform: uppercase;" type="text" name="citizenship" required value="<?php echo $citizenship;?>">
                <br><br></td></tr>
                <tr><td>
                Address: <input style="text-transform: uppercase;" type="text" name="address" required value="<?php echo $address;?>">
                <br><br></td></tr>

                <tr><td>
                <h4>Parent's Information</h4></td></tr>
                <tr><td>
                Parent/Guardian Name: <input style="text-transform: uppercase;" type="text" name="parentname" required value="<?php echo $parentName;?>">
                <br><br></td><td>
                Contact Number: <input type="number" name="parentContact" required value="<?php echo $parentContact;?>">
                <br><br></td><td>
                Occupation: <input style="text-transform: uppercase;" type="text" name="parentwork" value="<?php echo $parentWork;?>">
                <br><br></td></tr>
                <tr><td>
                Relationship to Student: <input style="text-transform: uppercase;" type="text" name="relationship" required value="<?php echo $relation;?>">
                <br><br></td></tr>

                <tr><td>
                <h4>Previous School Attended</h4></td></tr>
                <tr><td>
                Name of Previous School Attended: <input style="text-transform: uppercase;" type="text" name="prevSchool" value="<?php echo $prevSchoolName;?>">
                <br><br></td><td>
                Address of Previous School Attended: <input style="text-transform: uppercase;" type="text" name="prevSchoolAdd" value="<?php echo $prevSchoolAdd;?>">
                <br><br></td>
                <td>
                Student's Grade in Previous School: <input type="number" name="prevGrade" value="<?php echo $prevGrade;?>">
                <br><br></td></tr>

                <tr><td>
                <h4>Medical Information</h4></td></tr>
                <tr><td>
                List all Medical Conditions (If not applicable, put N/A): <input style="text-transform: uppercase;" type="text" name="medical" value="<?php echo $medical;?>">
                <br><br></td></tr>

                <tr><br><td></td><td>
                <input type="submit" name="submit" value="Submit" class="button"></td>
                <td></td>
                </form>
        </tr>
        </table>
       
        <br><br>
        <?php
        if($lname){
            echo "<h2><p>Student Information:</p></h2>";
            echo "<h3><p>Personal Information</p></h3>";
            echo "<p class = upper>Name: $fname $minitial $lname <br>";
            echo "Contact Number: $contactnum <br>";
            echo "Email: $email <br>";
            echo "Gender: $gender <br>";
            echo "Date of Birth: $dob <br>";
            echo "Country of Birth: $birthCountry <br>";
            echo "Citizenship: $citizenship <br>";
            echo "Address: $address <br><br></p>";

            echo "<h3><p>Parent's Information</p></h3>";
            echo "<p class = upper>Parent/Guardian Name: $parentName <br>";
            echo "Contact Number: $parentContact <br>";
            echo "Occupation: $parentWork <br>";
            echo "Relationship to Student: $relation </p>";
            
            echo "<h3><p>Previous School Attended</p></h3>";
            echo "<p class = upper>Name of Previous School Attended: $prevSchoolName <br>";
            echo "Address of Previous School Attended: $prevSchoolAdd <br>";
            echo "Student's Grade in Previous School: $prevGrade <br></p>";

            echo "<h3><p>Medical Information</p></h3>";
            echo "<p class = upper>Medical Conditions: $medical </p>";
        }
        ?>
        
    </body>
</html>