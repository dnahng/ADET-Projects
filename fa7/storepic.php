<?php
$username = $_SESSION['p_un'];
require_once "setdb.php";
if (isset($_POST['upload'])) {

    $image = $_FILES['pic']['name'];
    // image file directory
    $target = "/Applications/XAMPP/xamppfiles/htdocs/adet/fa7/uploads/".basename($image);

    //$setpic = "UPDATE record_info SET image='$image' WHERE username = '$username";
    // execute query
    mysqli_query($connect, "UPDATE record_info SET image='$image' WHERE username = '$username");

    if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}

?>