<?php
    // Incluyendo archivos adicionales
    include_once "../../helper/conexion.php";
    require_once '../../models/usuariosModel.php';

    // Declaración de variables
    $id = $_POST['modif_id_usu'];
    $cedula = $_POST['modif_cedula'];
    $rol = $_POST['modif_rol'];

    $registros =  modificarUsuarios($db, $id, $cedula, $rol);
    
    // Devolver los registros al cliente en formato JSON
    header('Content-Type: application/json');
    echo json_encode($registros);
