<?php
include('functions.php');
session_start();

    if(!isset($_SESSION['rol'])){
        header('location: rss.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: login.php');
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<hr>";
$tm=date('Y-m-d');
//echo $tm;
?>
 <form method=post action=rss.php>
Title<input type=text name=title size='80'><br>
Link<input type=text name=link size=100><br>
Category<textarea name=category cols=60 rows=5></textarea><br>
Publication Date<input type=text name=pubdate  value='<?php echo $tm?>'>
<input type=submit value='Add'></form>




    <a href="logout.php">Close</a>
</body>
</html>