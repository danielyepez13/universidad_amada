<?php
    include_once '../helper/conexion.php';
    if(!empty($_POST['cedula']) && !empty($_POST['contra'])){
        $cedula = $_POST['cedula'];
        $contra = $_POST['contra'];
        $sql = "SELECT u.cedula, r.nombre_rol FROM usuarios as u INNER JOIN roles as r ON u.rol = r.id_rol WHERE cedula = '$cedula' AND contrasena = '$contra' AND u.estatus_usuario = 1";
        $result = $db->query($sql);
        if($result->num_rows > 0){
            session_start();
            $usuario = $result->fetch_assoc();
            $_SESSION['cedula'] = $usuario['cedula'];
            $_SESSION['rol'] = $usuario['nombre_rol'];
            header("Location: ../views/dashboard.php");
        }else{
            // echo 'error no encuentra';
            header("Location: ../index.php");
        }
        
    }else{
        // echo 'error vacio';
        header("Location: ../index.php");
    }
?>