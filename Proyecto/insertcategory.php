<?php
include('database.php');
include('newcategory.php');
//Insert the admin category
$category = mysqli_real_escape_string($coon, $_REQUEST['category']);
$sql = "INSERT INTO category VALUES (category) 
VALUES ('$category')";
if(mysqli_query($coon, $sql)){
    header('location: newcategory.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($coon);
}