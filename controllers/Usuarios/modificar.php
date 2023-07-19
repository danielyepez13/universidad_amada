<?php
    // Incluyendo archivos adicionales
    include_once "../../helper/conexion.php";
    require_once '../../models/carrerasModel.php';

    // Declaración de variables
    // $id = $_POST['id_prof'];
    $id = $_POST['modif_id_car'];
    $nombre = $_POST['modif_nombre'];
    $facultad = !empty($_POST['modif_facultad']) ? $_POST['modif_facultad'] : '';
    $pensum = !empty($_POST['modif_pensum']) ? $_POST['modif_pensum'] : '';

    $registros =  modificarCarreras($db, $id, $nombre, $facultad, $pensum);
    // $registros = $_POST;
    // Devolver los registros al cliente en formato JSON
    header('Content-Type: application/json');
    echo json_encode($registros);
