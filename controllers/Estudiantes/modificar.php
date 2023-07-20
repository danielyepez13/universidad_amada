<?php
    // Incluyendo archivos adicionales
    include_once "../../helper/conexion.php";
    require_once '../../models/estudiantesModel.php';

    // Declaración de variables
    // $id = $_POST['id_prof'];
    $id = $_POST['modif_id_est'];
    $nombre_est = $_POST['modif_nombre_est'];
    $apellido_est = $_POST['modif_apellido_est'];
    $cedula = $_POST['modif_cedula'];
    $semestre = $_POST['modif_semestre'];
    $seccion = $_POST['modif_seccion'];
    $carrera = !empty($_POST['modif_carrera']) ? $_POST['modif_carrera'] : 0;

    $registros =  modificarEstudiantes($db, $id, $nombre_est, $apellido_est, $cedula, $semestre, $seccion, $carrera);
    // $registros = $_POST;
    // Devolver los registros al cliente en formato JSON
    header('Content-Type: application/json');
    echo json_encode($registros);
