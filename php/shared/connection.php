<?php
$conn=new mysqli("localhost","root","","car_rental",3306);

if($conn == false){
    die("Connection Error:".mysqli_connect_error());
}
?>