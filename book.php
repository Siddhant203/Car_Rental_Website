<?php

include "php/shared/connection.php";

session_start();

// mysqli_query($conn,"insert into cart(userid,pid) values($_SESSION[c_id],$pid");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="book.css">
</head>
<body>
<div>
        <div class="outer_midnav">
            <h3 class="head">Book Auto Rental</h3>
            <div class="midnav">
            
                <form method="post" >
                    <ul>
                    <!-- <li><select class="dropdown-container" name="car_type">
                        <option class="dropdown-trigger">Choose Car Type</option>
                        
                        <option class="item">SUV</option>
                        <option class="item">SEDAN</option>
                        <option class="item">HATCHBACK</option>
                        <option class="item">MPV</option>
        
                </select></li> -->    
                <!-- add in-future -->

                <li><select class="dropdown-container" name="pickup">
                    <option class="dropdown-trigger">Pickup Location</option>
                    
                        <option class="item">ARGODA</option>
                        <option class="item">BARIYATU</option>
                        <option class="item">HARMU</option>
                        <option class="item">KANKE</option>
                        <option class="item">KANTATOLI</option>
                        <option class="item">RATU ROAD</option>
                        <option class="item">SUJTA CHOWK</option>
                    
                </select></li>
                <li><label class="label">Pickup Date <br>and Time</label></li>
                <li><input name="pickup_date" class="item" type="datetime-local"></li>
                
                <li><select class="dropdown-container" name="drop">
                    <option class="dropdown-trigger">Drop Off Location</option>
                    
                    <option class="item">ARGODA</option>
                    <option class="item">BARIYATU</option>
                    <option class="item">HARMU</option>
                    <option class="item">KANKE</option>
                    <option class="item">KANTATOLI</option>
                    <option class="item">RATU ROAD</option>
                    <option class="item">SUJTA CHOWK</option>
                    
                </select></li>
                <li><label class="label">Drop Off Date <br>and time</label></li>
                <li><input class="item" name="drop_date" type="datetime-local"></li>
                
                <li><button id="click" class="click" name="book">Book Rent</button></li>
            </ul>
            </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php
if (isset($_GET['car_no'])) {
    $pid = $_GET['car_no'];
}

if (isset($_POST['book'])){
    $pickup_loc=$_POST['pickup'];
    $pickup_date=$_POST['pickup_date'];
    $drop_loc=$_POST['drop'];
    $drop_date=$_POST['drop_date'];
    $c_id = $_SESSION['u_id'];
    

    $query="insert into records(c_id,p_id,pickup_loc,pickup_date,drop_loc,drop_date) 
    values('$c_id','$pid','$pickup_loc','$pickup_date','$drop_loc','$drop_date')";
    mysqli_query($conn,$query);
    header("location:php\shared\booking_success.php");
}

?>