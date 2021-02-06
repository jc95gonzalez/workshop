<?php 

include('db.php');

/*if (!empty($_POST['fullname'])) {
    # code...
    $fullname = $_POST['fullname'];
    $fulldescription = $_POST['fulldescription'];
    $query = mysqli_query($coon,"INSERT INTO user(fullname), user(fulldescription) values('$fullname','$fulldescription')");
}
/*if (!empty($_POST['fulldescription'])) {
    # code...
    $fulldescription = $_POST['fulldescription'];
    $query = mysqli_query($coon,"INSERT INTO user(fulldescription) values('$fulldescription')");
}
if ($query) {
    # code...
    header('location: index.php');
}*/
$fullname = mysqli_real_escape_string($coon, $_REQUEST['fullname']);
$fulldescription = mysqli_real_escape_string($coon, $_REQUEST['fulldescription']);

$sql = "INSERT INTO user (fullname, fulldescription) VALUES ('$fullname', '$fulldescription')";
if(mysqli_query($coon, $sql)){
    header('location: index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($coon);
}
?>