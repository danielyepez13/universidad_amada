<?php
//Credenciales de conexion
$Host = 'localhost';
$Username = 'root';
$Password = '';
$dbName = 'universidad';

//Crear conexion mysql
$db = new mysqli($Host, $Username, $Password, $dbName);
$db->set_charset("utf8mb4");
//revisar conexion
if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}
?>