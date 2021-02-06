<?php
include('db.php');

/*$id = $_GET['id'];
$query = "DELETE FROM user where (id = '$id')";
$result = mysqli_query($conn,$query);
if($query){
    header('location:index.php');
}*/
$sql = "DELETE FROM user WHERE id='" . $_GET["id"] . "'";
if(mysqli_query($coon, $sql)){
    header('location:index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($coon);
}
?>