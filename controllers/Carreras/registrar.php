<?php
    // Incluyendo archivos adicionales
    include_once "../../helper/conexion.php";
    require_once '../../models/carrerasModel.php';

    // Declaración de variables
    $nombre_carrera = $_POST['nombre_carrera'];
    $facultad = $_POST['facultad'];
    $pensum = $_POST['pensum'];
    $fecha_registro = $_POST['fecha_registro'];

    // Se guarda el resultado de la función del modelo en una variable
    $registros =  insertarCarreras($db, $nombre_carrera, $facultad, $pensum, $fecha_registro);

    // Devolver los registros al cliente en formato JSON
    header('Content-Type: application/json');
    echo json_encode($registros);
