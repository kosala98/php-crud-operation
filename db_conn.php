<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connect failed " . mysqli_connect_error());
}
// echo "Connected Successfully !";