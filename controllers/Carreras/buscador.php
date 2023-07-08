<?php
  include_once "../../helper/conexion.php";
  require_once '../../models/carrerasModel.php';
  $buscar = $_GET['buscar'];
  $registros =  buscarCarreras($db, $buscar);

  // Devolver los registros al cliente en formato JSON
  header('Content-Type: application/json');
  echo json_encode($registros);
?>