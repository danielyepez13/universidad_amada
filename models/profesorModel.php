<?php
    function selectProfesores($db){
        $query = "SELECT * FROM profesores ORDER BY estatus_prof DESC, id_prof DESC";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }

    function selectProfe($db, $id){
        $query = "SELECT * FROM profesores WHERE id_prof = $id";
        $resultado = $db->query($query);
        $registros = '';
        while($fila = $resultado->fetch_assoc()){
            $registros=$fila;
        }
        return $registros;
    }

    function insertarProfesores($db, $nombre, $apellido, $cedula, $correo, $date){
        $query = "INSERT INTO profesores (nombre_prof, apellido_prof, cedula_prof, correo_prof, fecha_registro_prof) VALUES ('$nombre','$apellido',$cedula,'$correo','$date')";
        $resultado = $db->query($query);
        $id = $db->insert_id;
        $registro = selectProfe($db, $id);
        return $registro;
    }

    function modificarProfesores($db, $id, $nombre, $apellido, $cedula, $correo){
        $query = "UPDATE profesores SET nombre_prof ='$nombre', apellido_prof = '$apellido',cedula_prof = '$cedula', correo_prof = '$correo' WHERE id_prof = $id";
        $resultado = $db->query($query);
        $registro = selectProfe($db, $id);
        return $registro;
    }

    function deshabilitarProfesores($db, $id){
        $query = "UPDATE profesores SET estatus_prof = 0 WHERE id_prof = $id";
        $resultado = $db->query($query);
        $registro = selectProfesores($db);
        return $registro;
    }

    function habilitarProfesores($db, $id){
        $query = "UPDATE profesores SET estatus_prof = 1 WHERE id_prof = $id";
        $resultado = $db->query($query);
        $registro = selectProfesores($db);
        return $registro;
    }

    function buscarProfesores($db, $buscar){
        $query = "SELECT * FROM profesores WHERE nombre_prof LIKE '%$buscar%' OR apellido_prof LIKE '%$buscar%' OR cedula_prof LIKE '%$buscar%' OR correo_prof LIKE '%$buscar%' OR fecha_registro_prof LIKE '%$buscar%'";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }
?>