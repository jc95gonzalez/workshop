<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matricula</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?php
  include('functions.php');

  $carreras = getCarreras();
  
  session_start();

    if(!isset($_SESSION['rol'])){
        header('location: matricula.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: matricula.php');
        }
    }


?>
<body>
  <div class="container-fluid">
    <div class="jumbotron">
      <h1 class="display-4">Matrícula</h1>
      <p class="lead">Proceso de matrícula</p>
      <hr class="my-4">
    </div>
    <form method="post" action="save.php">
      <div class="form-group">
        <label for="first-name">Cedula</label>
        <input id="first-name" class="form-control" type="text" name="cedula">
      </div>
      <div class="form-group">
        <label for="last-name">Nombre</label>
        <input id="last-name" class="form-control" type="text" name="nombre">
      </div>
      <div class="form-group">
        <label for="last-name">Apellido</label>
        <input id="last-name" class="form-control" type="text" name="apellido">
      </div>
      <div class="form-group">
        <label for="email">Correo</label>
        <input id="email" class="form-control" type="text" name="email">
      </div>
      <div class="form-group">
        <label for="carreras">Carrera</label>
        <select id="carreras" class="form-control" name="carreras">
          <?php
          foreach($carreras as $id => $carreras) {
            echo "<option value=\"$id\">$carreras</option>";
          }
          ?>
        </select>
      </div>
      <!--<div class="form-group">
        <label for="password">Password</label>
        <input id="password" class="form-control" type="password" name="password">
      </div>-->
      <button type="submit" class="btn btn-primary" >  Matricule </button>
      
      <!-- <input type="submit" class="btn btn-primary" value="Sign up"></input> -->
    </form>
    <br>
    <a href="show.php">
    <button type="submit" class="btn btn-primary" >  Estado de Matricula </button>
    </a>
    <a href="logout.php">
    <button type="submit" class="btn btn-primary" >  Logout </button>
    </a>
    
  </div>

</body>
</html>