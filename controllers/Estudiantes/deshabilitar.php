<?php
  include_once "../../helper/conexion.php";
  require_once '../../models/estudiantesModel.php';
  $id = $_GET['id'];
  $registros =  deshabilitarEstudiantes($db, $id);

  // Devolver los registros al cliente en formato JSON
  header('Content-Type: application/json');
  echo json_encode($registros);
?>