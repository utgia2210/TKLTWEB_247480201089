<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quanlybanhang1";
$conn =mysqli($servername, $username, $password, $database);
if(!$conn){
    die("Không thể kết nối", mysqli_connect_error($conn))
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
   
}


?>