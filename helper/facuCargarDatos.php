<?php
    
    include_once "../helper/conexion.php";
    function listarFacultades($db){
        $query = "SELECT id_facul, nombre_facul FROM facultades";
        $result = $db->query($query);
        while($facul = $result->fetch_assoc()){
            $data[]=$facul;
        }
        return $data;
    }

?>
    
