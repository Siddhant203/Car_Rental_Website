<?php
include "../shared/connection.php";

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cars.css">
</head>
<body>
<div class="outerbody1">
           <?php
           
           $sql_result=mysqli_query($conn,"select * from cars ");

            while($ptdRow = mysqli_fetch_assoc($sql_result)){
            ?>
            <div class="card">
                 <img class="p_image" src="<?php echo $ptdRow['car_img']?>">
                 <h4><?php echo $ptdRow['car_name'] ?></h4>
                 <p>Car No:<?php echo $ptdRow['car_nameplate'] ?></p>
                 <p>Car Type:<?php echo $ptdRow['car_type'] ?></p>
                 <p>Price per hour:<?php echo $ptdRow['price'] ?></p>
                 <p>Price per day:<?php echo $ptdRow['price_per_day']  ?></p>
                 <a class="btn" href="../../book.php?car_no=<?php echo $ptdRow['car_no'];?>">Book</a>
            </div>
            <?php
            }
           ?> 
    </div>
</body>
</html>