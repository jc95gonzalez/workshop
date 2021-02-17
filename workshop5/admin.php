<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: matricula.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: matricula.php');
        }
    }


?>