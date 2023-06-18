<?php
include_once '../helper/conexion.php';
if(!empty($_GET['id'])){
    $id_facul = $_GET['id'];
    
    //Extraer imagen de la BD mediante GET
    $result = $db->query("SELECT img_facul FROM facultades WHERE id_facul = $id_facul");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['img_facul']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>