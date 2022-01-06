<?php
require('dbconnectl.php');

session_start();

//insert info into DB
$name="";
$address="";
$id= 0;

$db = mysqli_connect('localhost','root','','imp1');

//if save button is clicked
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
     
    //inserting code
    $query="INSERT INTO login(username, password) VALUES('$name','$address')";
    mysqli_query($db,$query);

    $_SESSION['msg']="Logged In";
    header('location:login.php'); 

//redirect to homepage after inserting
}
//retrieve records
$results = mysqli_query($db, "SELECT *FROM login");

?>
