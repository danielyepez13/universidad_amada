<?php 
    session_start();
    if(empty($_SESSION['cedula'])){
        header("Location: ../index.php");
    }else{
        session_destroy();
        header("Location: ../index.php");
    }
?>