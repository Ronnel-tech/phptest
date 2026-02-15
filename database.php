<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "businessdb";
$conn = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // if ($conn) {
    //     echo "Connection successful!";
    // } else {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
?>