<?php
session_start();
if(!isset($_SESSION["login_status"])){
    echo "Illegal access";
    die;
}
if($_SESSION["login_status"]==false){
    echo "Unauthorise access";
    die;
}
if($_SESSION["usertype"]!="Vender"){
    echo "Forbidden access";
    die;
}
?>
