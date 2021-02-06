<?php 

include('db.php');
$result = mysqli_query($coon,'SELECT * FROM user');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Crud</title>
    <style>    
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg3">
                <form action="add.php" method="POST">
                  <h1>Sing Up</h1> 
                  <br>
                  <input type="text" class="form-control" placeholder="Full Name" require name="fullname"> 
                  <br>
                  <br>
                  <input type="text" class="form-control" placeholder="Full Description" require name="fulldescription"> 
                  <br>
                  <input type="submit" value="Add" class="btn btn-primary btn-block">
                </form>
            </div>
            <div class="col-lg8">
            <table class="table table-dark table-striped">
            <thead class="thead-dark">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($result as $row){ ?>
            <tr>
            <th><?php echo $row['fullname']; ?></th>
            <th><?php echo $row['fulldescription']; ?></th>
            <th><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"></a>Delete</th>
            </tr>
            <?php }?>
            </tbody>
            </table>
            </div>
        </div>
    </div>
    
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>