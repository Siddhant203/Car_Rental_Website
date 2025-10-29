<?php
    $server="localhost";
   
    $conn=new mysqli($server,"root","","car_rental",3306);

    function generateUsername($fullName) {
        // Remove extra whitespace and convert to lowercase
        $fullName = strtolower(trim($fullName));
    
        // Remove non-alphanumeric characters except spaces
        $fullName = preg_replace("/[^a-z0-9\s]/", "", $fullName);
    
        // Split into words
        $nameParts = explode(" ", $fullName);
    
        // Use first and last parts (if available)
        $first = $nameParts[0];
        $last = isset($nameParts[1]) ? $nameParts[1] : "";
    
        // Combine for username
        $baseUsername = $first . $last;
    
        // Optionally append a random number to ensure uniqueness
        $username = $baseUsername . rand(100, 999);
    
        return $username;
    }

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = $_POST['name'] ??'';
    $dob = $_POST['birthdate'] ??'';
    $gender = $_POST['gender'] ??'';
    $usertype=$_POST['usertype'] ??'';
    $email = $_POST['email'] ??'';
    $password = $_POST['password'] ??''; // For real use, hash this!
    $username = generateUsername($name);
}

$sql="insert into user(user_name,usertype,dob,gender,email,password,u_id) values('$name','$usertype','$dob','$gender','$email','$password','$username')";
mysqli_query($conn,$sql);
header('location:../../index.php');

?>
