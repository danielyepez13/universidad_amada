<?php
    // Incluyendo archivos adicionales
    include_once "../../helper/conexion.php";
    require_once '../../models/profesorModel.php';

    // Declaración de variables
    // $id = $_POST['id_prof'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $fecha_registro = $_POST['fecha_registro'];

    $registros =  insertarProfesores($db, $nombre, $apellido, $cedula, $correo, $fecha_registro);
    // $registros = $_POST;
    // Devolver los registros al cliente en formato JSON
    header('Content-Type: application/json');
    echo json_encode($registros);
