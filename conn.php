<?php 

$servername = "remotemysql.com:3306";
$username = "EZXNDnyEd9";
$password = "U74aTVZPb2";
$database = "EZXNDnyEd9"

// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




?>