<?php
include_once "../../helper/conexion.php";
require_once '../../models/carrerasModel.php';

if ($_GET['select'] == 'pensum') {
    $registros =   selectorPensum($db);
} else {
    $registros =  selectorFacultades($db);
}

// Devolver los registros al cliente en formato JSON
header('Content-Type: application/json');
echo json_encode($registros);
