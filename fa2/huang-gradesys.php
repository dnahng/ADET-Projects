<!DOCTYPE html>
<html>
    <body>
        <head>
            <style>
                .item1 { grid-area: header; }
                .item2 { grid-area: grd; }
                .item3 { grid-area: rnk; }
                .item4 { grid-area: pic; }

                .grid-container {
                    display: grid;
                    grid-template-areas:
                    'header header header header pic pic'
                    'header header header header pic pic'
                    'rnk rnk grd grd pic pic'
                    'rnk rnk grd grd pic pic'
                    'rnk rnk grd grd pic pic';
                    grid-gap: 10px;
                    background-color: #7CB69D;
                    padding: 10px;
                }

                .grid-container > div {
                    background-color: #C0DFD8;
                    text-align: center;
                    padding: 20px 0;
                    font-size: 30px;
                }

                .error {color:red;}
                
            </style>
        </head>
        <?php
        $lname = $fname = $minitial = $grade = "";
        $lnameErr = $fnameErr = $gradeErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["last_name"])) {
              $lnameErr = "Last Name is required";
            }
            else{
                $lname = test_input($_POST["last_name"]);
            }
            
            if (empty($_POST["first_name"])) {
              $fnameErr = "First Name is required";
            }
            else{
                $fname = test_input($_POST["first_name"]);
            }
          
            if (empty($_POST["middle_initial"])) {
              $minitial = "";
            } else {
              $minitial = test_input($_POST["middle_initial"]);
            }
          
            if (empty($_POST["grade"])) {
              $gradeErr = "Grade input is required";
            }
            else{
                $grade = test_input($_POST["grade"]);
            }
          } //end main if

          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

        ?>
        <h2>Grade Ranking System</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Last Name: <input type="text" name="last_name" value="<?php echo $lname;?>">
        <span class="error">* <?php echo $lnameErr;?></span>
        <br><br>
        First Name: <input type="text" name="first_name" value="<?php echo $fname;?>">
        <span class="error">* <?php echo $fnameErr;?></span>
        <br><br>
        Middle Initial: <input type="text" name="middle_initial" value="<?php echo $minitial;?>">
        <br><br>
        Grade: <input type="text" name="grade" value="<?php echo $grade;?>">
        <span class="error">* <?php echo $gradeErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        echo "<h2>Your Grade and Rank: </h2>";
        ?>
        <div class="grid-container">
        <div class="item1"><?php echo "Name: $fname $minitial $lname"?></div>
        <div class="item2"><?php echo "Grade: $grade"?></div>
        <div class="item3"><?php echo "Rank: ";
            if($grade>=93 && $grade<=100){
                echo "A";
            }
            elseif($grade>=90 && $grade<=92){
                echo "A-";
            }
            elseif($grade>=87 && $grade<=89){
                echo "B+";
            }
            elseif($grade>=83 && $grade<=86){
                echo "B";
            }
            elseif($grade>=80 && $grade<=82){
                echo "B-";
            }
            elseif($grade>=77 && $grade<=79){
                echo "C+";
            }
            elseif($grade>=73 && $grade<=76){
                echo "C";
            }
            elseif($grade>=70 && $grade<=72){
                echo "C-";
            }
            elseif($grade>=67 && $grade<=69){
                echo "D+";
            }
            elseif($grade>=63 && $grade<=66){
                echo "D";
            }
            elseif($grade>=60 && $grade<=62){
                echo "D-";
            }
            elseif($grade<60 && $grade!=NULL){
                echo "F";
            }
            elseif($grade!=null){
                echo "Invalid Grade Input.";
            }
        ?></div>
        <div class="item4"><?php 
           if($lname == "Lee"){
                $imgUrl = "lee.png";
            }
            elseif($lname == "Chou"){
                $imgUrl = "chou.png";
            }
            elseif($lname != null){
                $imgUrl = "blank.png";
            }
            else{
                $imgUrl ="";
            }
        ?>
        <img src="<?= $imgUrl;?>" height="200"></div>
            
        </div>
    </body>
</html>