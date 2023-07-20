<?php
  include_once "../../helper/conexion.php";
  require_once '../../models/estudiantesModel.php';
  $registros =  selectEstudiantes($db);

  // Devolver los registros al cliente en formato JSON
  header('Content-Type: application/json');
  echo json_encode($registros);
?>