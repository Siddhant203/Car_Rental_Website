<?php
    session_start();

    $_SESSION["login_status"]=false;

    $conn=new mysqli("localhost","root","","car_rental",3306);
    

    $query= "SELECT user_name, u_id, usertype, password, 'user' AS source FROM user WHERE (user_name = '$_POST[uname]' OR u_id = '$_POST[uname]') AND password='$_POST[password]' 
    UNION 
    SELECT user_name, u_id, usertype, password,'vender' AS source FROM vender WHERE (user_name = '$_POST[uname]' OR u_id = '$_POST[uname]') AND password='$_POST[password]'AND usertype='vender'";
    echo $query;
    $sql_result= mysqli_query($conn,$query);

        
        echo"<br>";
        
    print_r($sql_result);

    if($sql_result->num_rows>0){
        echo"login successfull";
        $dbrow=mysqli_fetch_assoc($sql_result);
        $_SESSION["login_status"]=true;
        $_SESSION['u_id']= $dbrow['u_id'];
        
        echo"<br>";

        if($dbrow['source']=='user'){
            $_SESSION['u_id']= $dbrow['u_id'];
            header("location:../../index.php");
            exit;
        }
        elseif($dbrow['source']=='vender'){
            $_SESSION['u_id']= $dbrow['u_id'];
            header("location:../vender/venderHome.php");
            exit;
        }
        else{

            echo "login failed";
        }
        
    }

    ?>