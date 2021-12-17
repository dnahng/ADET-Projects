<?php
$connect = mysqli_connect('localhost', 'root', '', 'testdb_info');
if($connect->connect_error){
    echo "$connect->connect_error";
    die("Connection Failed : ".$connect->connect_error);
}
?>