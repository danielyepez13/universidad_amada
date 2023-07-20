<?php
    // Incluyendo archivos adicionales
    include_once "../../helper/conexion.php";
    require_once '../../models/estudiantesModel.php';

    // Declaración de variables
    $nombre_est = $_POST['nombre_est'];
    $apellido_est = $_POST['apellido_est'];
    $cedula = $_POST['cedula'];
    $semestre = $_POST['semestre'];
    $seccion = $_POST['seccion'];
    $carrera = $_POST['carrera'];
    $fecha_registro = $_POST['fecha_registro'];

    // Se guarda el resultado de la función del modelo en una variable
    $registros =  insertarEstudiantes($db, $nombre_est, $apellido_est, $cedula, $semestre, $seccion, $carrera,$fecha_registro);

    // Devolver los registros al cliente en formato JSON
    header('Content-Type: application/json');
    echo json_encode($registros);
