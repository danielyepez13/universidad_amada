<?php
    
    include_once "conexion.php";
    
    $query = "SELECT id_facul, nombre_facul FROM facultades";
    $result = $db->query($query);
    while($facul = $result->fetch_assoc()){
        $data[]=$facul;
    }

?>
    
