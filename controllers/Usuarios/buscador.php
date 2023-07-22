<?php
  include_once "../../helper/conexion.php";
  require_once '../../models/usuariosModel.php';
  $buscar = $_GET['buscar'];
  $registros =  buscarUsuarios($db, $buscar);

  // Devolver los registros al cliente en formato JSON
  header('Content-Type: application/json');
  echo json_encode($registros);
?>