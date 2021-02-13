<?php

include('db.php');
include('index.php');

/*if($_POST['firstName']) {

  var_dump($_REQUEST);

  //get each field and insert to the database

  saveUser($_REQUEST);

}*/
$cedula = mysqli_real_escape_string($coon, $_REQUEST['cedula']);
$nombre = mysqli_real_escape_string($coon, $_REQUEST['nombre']);
$apellido = mysqli_real_escape_string($coon, $_REQUEST['apellido']);
$email = mysqli_real_escape_string($coon, $_REQUEST['email']);
$carreras = mysqli_real_escape_string($coon, $_REQUEST['carreras']);
//$fechaMatricula = mysqli_real_escape_string($coon, $_REQUEST['fechaMatricula']);

$sql = "INSERT INTO user (cedula, nombre, apellido, email, carreras ) VALUES ('$cedula', '$nombre', '$apellido', '$email', '$carreras')";
if(mysqli_query($coon, $sql)){
    //header('location: display.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($coon);
}


