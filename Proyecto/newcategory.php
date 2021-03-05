<?php 
require 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="post" action="insertcategory.php">
<p class="fs-1">Category</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"></span>
  <input type="text" class="form-control" placeholder="Category" aria-label="Category" aria-describedby="basic-addon1" name="category">
  <button class="btn btn-primary" type="submit">Add</button>
</form>
</div>
</body>
</html>