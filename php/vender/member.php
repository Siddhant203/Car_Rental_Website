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

    $firstname=$_POST['uname1'];
    $lastname=$_POST['uname2'];
    $name = $firstname." ".$lastname;//Take inpupt as two part and combined them


    $usertype=$_POST['usertype'] ??'';
    $dob = $_POST['dob'] ??'';
    $gender = $_POST['gender'] ??'';
    $father_name=$_POST['father_name'];
    $email = $_POST['email'] ??'';
    $phone_no= $_POST['phone_no'];
    $aadhar_no=$_POST['aadhar_no'];
    $driving_lic= $_POST['driving_lic'];
    $address=$_POST['address'];
    $password = $_POST['password'] ??''; // For real use, hash this!
    $username = generateUsername($name);
}

$sql="insert into `vender`(user_name,u_id,usertype,dob,gender,father_name,email,phone_no,aadhar_no,driving_lic,address,password) values('$name','$username','$usertype','$dob','$gender','$father_name','$email','$phone_no','$aadhar_no','$driving_lic','$address','$password')";
mysqli_query($conn,$sql);
header('location:venderHome.php');

?>
