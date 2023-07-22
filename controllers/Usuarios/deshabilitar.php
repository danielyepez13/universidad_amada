<?php
  include_once "../../helper/conexion.php";
  require_once '../../models/usuariosModel.php';
  $id = $_GET['id'];
  $registros =  deshabilitarUsuarios($db, $id);

  // Devolver los registros al cliente en formato JSON
  header('Content-Type: application/json');
  echo json_encode($registros);
?>