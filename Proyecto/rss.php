<?php
  session_start();
  $role = $_SESSION['rol'];
  if(!isset($_SESSION['username']) || $role!="user"){
    //header('Location: index.php?err=2');
  }
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
<?php
echo "<hr>";
$tm=date('Y-m-d');
//echo $tm;
?>
 <form class="needs-validation" method=post action=newrss.php>
Title<input class="form-control" type=text name=title size='80'><br>
Link<input class="form-control" type=text name=link size=100><br>
Category<textarea class="form-control" name=category cols=60 rows=5></textarea><br>
Publication Date<input class="form-control" type=text name=pubdate  value='<?php echo $tm?>'>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>




    <a href="logout.php">Close</a>
</body>
</html>