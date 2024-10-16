<?php

$databasehost = "localhost";
$databaseusername = "root";
$databasepassword = "";
$databasename = "practical_db";

$conn = mysqli_connect($databasehost,$databaseusername,$databasepassword,$databasename);

if($conn->connect_error){
    die ("Error while connecting database". $conn->connect_error);
}
?>
