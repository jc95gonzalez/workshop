<?php 
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Informacion</title>
</head>
<body>
<div class="col-lg8">
<table class="table table-dark table-striped">
    <tr>
    <th scope="col">Cedula</th>
    <th scope="col">Nombre</th>
    <th scope="col">Apellido</th>
    <th scope="col">Correo</th>
    <th scope="col">Carrera</th>
    <th scope="col">Fecha de matriculada</th>
    </tr>
    <?php 
    if ($coon-> connect_error){
        die("Conección fallida:" . $coon-> connect_error);
    }
    $sql = "SELECT id, cedula, nombre, apellido, email, carreras, fechaMatricula from user";
    $result = $coon-> query($sql);  

    if ($result-> num_rows > 0) {
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>". $row["cedula"] . "</td><td>", $row["nombre"] . "</td><td>", $row["apellido"] . "</td><td>", $row["email"] . "</td><td>",
            $row["carreras"] . "</td><td>", $row["fechaMatricula"] . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo"0 resultados";
    }
    $coon-> close();
    ?>
</table>
</div>
<a href="index.php">
    <button type="submit" class="btn btn-primary" > Regresar </button>
    </a>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</html>
