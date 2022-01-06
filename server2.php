<?php
require('dbconnectl.php');
//insert info into DB
session_start();
$address="";
$name="";
$pass="";
$id= 0;

$db = mysqli_connect('localhost','root','','imp1');

//if save button is clicked
if(isset($_POST['save'])){
    $address=$_POST['address'];
    $name=$_POST['name'];
    $pass=$_POST['text'];

    //inserting code
    $query="INSERT INTO register(e-mail, username, password) VALUES('$name','$address','$pass')";
    mysqli_query($db,$query);

    $_SESSION['msg']="registered";
    header('location:register.php'); 

//redirect to homepage after inserting
}
//retrieve records
$results = mysqli_query($db, "SELECT *FROM register");
?>
