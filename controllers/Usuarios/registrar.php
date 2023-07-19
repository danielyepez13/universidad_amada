<?php
    // Incluyendo archivos adicionales
    include_once "../../helper/conexion.php";
    require_once '../../models/usuariosModel.php';

    // Declaración de variables
    $cedula = $_POST['cedula'];
    $rol = $_POST['rol'];
    $fecha_registro = $_POST['fecha_registro'];

    // Se guarda el resultado de la función del modelo en una variable
    $registros =  insertarUsuarios($db, $cedula, $rol, $fecha_registro);

    // Devolver los registros al cliente en formato JSON
    header('Content-Type: application/json');
    echo json_encode($registros);
