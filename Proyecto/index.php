<?php
    require 'database.php';
    
    session_start();

    if(isset($_GET['close_session'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: crud.php');
            break;

            case 2:
            header('location: rss.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM signin WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        

        if($row){
            $rol = $row[8];
            echo $rol;
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case "admin":
                    header('location: crud.php');
                break;

                case "user":
                header('location: rss.php');
            
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Username or password incorrect";
        }
        

    }

?>
<!DOCTYPE html>
<html>
<head>
    <title> Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
    #login-form .input-group, #login-form .form-group {
        margin-top: 30px;
    }
    
    #login-form .btn-default {
        background-color: #EEE;
    }
    
    .brand {
        color: #CCC;
    }
    </style>
</head>
<body>
<div class="container" style="margin-top: 30px;">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <form id="login-form" method="post" action="#" role="form">
                    <legend>Login</legend>
                    <?php if (isset($_GET['err'])) { ?>
                    <div class="alert alert-danger text-center"><?php echo "Login failed! Invalid username or password!"; ?></div>
                    <?php } ?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="text" name="username" placeholder="Enter your Username" required class="form-control" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block" />
                    </div>
                    <div class="form-group">
                        <hr/>
                        <div class="col-sm-6" style="padding: 0;">New user? <a href="signin.php">Sign Up here</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>