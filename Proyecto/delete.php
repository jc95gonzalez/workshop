<?php
//Erase the category
require_once('database.php');
$sql = "DELETE FROM category WHERE id='" . $_GET["id"] . "'";
if(mysqli_query($coon, $sql)){
    header('location:crud.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($coon);
}