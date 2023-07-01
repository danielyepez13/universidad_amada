<?php
    // Incluyendo archivos adicionales
    include_once "../../helper/conexion.php";
    require_once '../../models/profesorModel.php';

    // Declaración de variables
    // $id = $_POST['id_prof'];
    $id = $_POST['modif_id_prof'];
    $nombre = $_POST['modif_nombre'];
    $apellido = $_POST['modif_apellido'];
    $cedula = $_POST['modif_cedula'];
    $correo = $_POST['modif_correo'];

    $registros =  modificarProfesores($db, $id, $nombre, $apellido, $cedula, $correo);
    // $registros = $_POST;
    // Devolver los registros al cliente en formato JSON
    header('Content-Type: application/json');
    echo json_encode($registros);
