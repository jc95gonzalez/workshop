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
    require 'database.php';
    $title=$_POST['title'];
    $link=$_POST['link'];
    $category=$_POST['category'];
    $pubdate=$_POST['pubdate'];
    
    echo "<hr>";
    
    $sql=$pdo->prepare("insert into rss(title,link,category,pubdate) values(:title,:link,:category,:pubdate)");
    $sql->bindParam(':title',$title,PDO::PARAM_STR, 250);
    $sql->bindParam(':link',$link,PDO::PARAM_STR, 250);
    $sql->bindParam(':category',$category,PDO::PARAM_STR,250);
    $sql->bindParam(':pubdate',$pubdate,uDO::uARAM_STR);
    if($sql->execute()){
    $rss_id=$pdo->lastInsertId(); 
    echo " Thanks .. Your Rss Id = $rss_id ";
    }
    else{
    echo " Not able to add data please contact Admin ";
    print_r($sql->errorInfo()); 
    
    }
    
    ?>
</body>
</html>