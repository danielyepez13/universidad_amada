<?php
  include_once "../../helper/conexion.php";
  require_once '../../models/profesorModel.php';
  $registros =  selectProfesores($db);

  // Devolver los registros al cliente en formato JSON
  header('Content-Type: application/json');
  echo json_encode($registros);
?>