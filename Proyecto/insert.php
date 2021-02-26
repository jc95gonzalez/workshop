<?php
//Insert para el registro
include('database.php');
include('signin.php');
$first_name = mysqli_real_escape_string($coon, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($coon, $_REQUEST['last_name']);
$username = mysqli_real_escape_string($coon, $_REQUEST['username']);
$password = mysqli_real_escape_string($coon, $_REQUEST['password']);
$country = mysqli_real_escape_string($coon, $_REQUEST['country']);
$city = mysqli_real_escape_string($coon, $_REQUEST['city']);
$sex = mysqli_real_escape_string($coon, $_REQUEST['sex']);
$rol = mysqli_real_escape_string($coon, $_REQUEST['rol']);

$sql = "INSERT INTO signin (first_name, last_name, username, password, country, city, sex, rol) 
VALUES ('$first_name', '$last_name','$username', '$password', '$country','$city','$sex','$rol')";
if(mysqli_query($coon, $sql)){
    //header('location: login.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($coon);
}
