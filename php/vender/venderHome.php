<?php
include "../shared/connection.php";

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>venderHome</title>
    <link rel="stylesheet" href="venderhome.css">
</head>

<body>
    <div class="outerbody">

        <form class="form" method="post" enctype="multipart/form-data">
            <b> Car Name</b> <br> <input type="text" class="input" name="car_name" required id="name"><br><br>
            <b> Car No. Plate</b> <br> <input type="text" class="input" name="car_nameplate" required id=""><br>
            <select class="input" name="cartype" required>
                <option>Luxury</option>
                <option>Premium</option>
                <option>Normal</option>
            </select>
            <input type="file" name="image"><br>
            <input type="number" class="input" name="price" required placeholder="Price" id="">
            <input type="number" class="input" name="price_per_day" required placeholder="Price per day" id=""><br>
            <select class="in_select" name="available" required>
                <option>Car Availability</option>
                <option>Yes</option>
                <option>No</option>
            </select><br>
            <button id="addbtn" onclick="addcar()" name="add" type="submit">Add car</button>
            <div id="editbtn">
                <button onclick="savecar()">Save movie</button>
                <button onclick="canceledit()">Cancel</button>
            </div>
        </form>
    </div>
    <div class="outerbody1">
           <?php
           $c_id = $_SESSION['u_id'];
           $sql_result=mysqli_query($conn,"select * from cars where c_id ='$c_id'");

            while($ptdRow = mysqli_fetch_assoc($sql_result)){
            ?>
            <div class="card">
                 <img class="p_image" src="<?php echo "$ptdRow[car_img]"?>">
                 <h4><?php echo" $ptdRow[car_name] " ?></h4>
                 <p>Car No:<?php echo" $ptdRow[car_nameplate] " ?></p>
                 <p>Car Type:<?php echo" $ptdRow[car_type] " ?></p>
                 <p>Price per hour:<?php echo" $ptdRow[price] " ?></p>
                 <p>Price per day:<?php echo" $ptdRow[price_per_day] " ?></p>
                 <button class="btn">Edit</button>
                 <a class="btn" type="submit" name="delete" href="venderHome.php?car_no=<?php echo $ptdRow['car_no'];?>"onclick="return confirmDelete()">Delete</a>
            </div>
            <?php
            }
           ?> 
    </div>
</body>

<script>
    function confirmDelete() {
    return confirm("Are you sure you want to delete this car?");
}
</script>

</html>

<?php

if (isset($_POST['add'])) {

    $source=$_FILES['image']['tmp_name'];
    $target="../../image/".$_FILES['image']['name'];
    move_uploaded_file($source,$target);

    $carName = $_POST['car_name'];
    $cartype = $_POST['cartype'];
    $car_nameplate = $_POST['car_nameplate'];
    $price = $_POST['price'];
    $price_per_day = $_POST['price_per_day'];
    $available = $_POST['available'];
    $c_id = $_SESSION['u_id'];


    $query = " insert into cars(car_name,car_nameplate,car_type,car_img,price,price_per_day,car_availability,c_id)
    value('$carName','$car_nameplate','$cartype','$target','$price','$price_per_day','$available','$c_id')";
    mysqli_query($conn, $query);
}

if (isset($_GET['car_no'])) {
    $car_id=$_GET['car_no'];
    
    $del_query="DELETE FROM cars WHERE car_no = '$car_id'";
    mysqli_query($conn,$del_query);
}

?>