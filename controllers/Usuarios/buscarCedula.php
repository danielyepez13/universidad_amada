<?php
  include_once "../../helper/conexion.php";
  require_once '../../models/usuariosModel.php';
  $ced = $_GET['ced'];
  $registros =  buscarCedula($db, $ced);

  // Devolver los registros al cliente en formato JSON
  header('Content-Type: application/json');
  echo json_encode($registros);
?>