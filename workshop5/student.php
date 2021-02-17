<?php
include('db.php');

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: student.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: student.php');
        }
    }

    if (isset($_SESSION['username'])) {
        echo "Bienvenido {$_SESSION['username']}";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiante</title>
</head>
<body>

<?php 
    if ($coon-> connect_error){
        die("Conección fallida:" . $coon-> connect_error);
    }
    $sql = "SELECT id, username from usuario WHERE id=2";
    $result = $coon-> query($sql);  

    if ($result-> num_rows > 0) {
        while($row = $result-> fetch_assoc()){
            echo " Bienvenido ". $row["username"];
        }
        echo "</table>";
    }
    else{
        echo"0 resultados";
    }
    $coon-> close();
    ?>
    <br>
    <br>
    <br>
    <a href="logout.php">
    <button type="submit" class="btn btn-primary" >  Logout </button>
    </a>

</body>
</html>