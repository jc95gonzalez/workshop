<?php
  include('database.php');
  session_start();
  $role = $_SESSION['rol'];
  if(!isset($_SESSION['username']) || $role!="admin"){
    //header('Location: index.php?err=2');
  }
  $result = mysqli_query($coon,'SELECT * FROM category');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg8">
            <table class="table table-dark table-striped">
            <thead class="thead-dark">
            <tr>
            <th scope="col">Actions</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($result as $row){ ?>
            <tr>
            <th><?php echo $row['category']; ?></th>
            <th><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"></a>Delete</th>
            <th><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"></a>Delete</th>
            </tr>
            <?php }?>
            </tbody>
            </table>
            </div>
        </div>
    </div>
    <a href="newcategory.php">
    <button class="btn btn-primary">Add new</button>
    </a>
    <a href="logout.php">Close</a>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>