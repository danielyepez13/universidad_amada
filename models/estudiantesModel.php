<?php
    function selectEstudiantes($db){
        $query = "SELECT e.id_est, e.nombre_est, e.apellido_est, e.cedula_est, e.semestre_est, e.seccion_est, e.carrera_est, e.fecha_registro_est, e.estatus_est, c.id_car, c.nombre_carrera FROM estudiantes as e INNER JOIN carreras as c ON e.carrera_est = c.id_car ORDER BY e.estatus_est DESC, e.id_est DESC";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }

    function selectEstudiante($db, $id){
        $query = "SELECT e.id_est, e.nombre_est, e.apellido_est, e.cedula_est, e.semestre_est, e.seccion_est, e.carrera_est, e.fecha_registro_est, e.estatus_est, c.id_car, c.nombre_carrera FROM estudiantes as e INNER JOIN carreras as c ON e.carrera_est = c.id_car WHERE e.id_est = $id ORDER BY e.estatus_est DESC, e.id_est DESC";
        $resultado = $db->query($query);
        $registros = '';
        while($fila = $resultado->fetch_assoc()){
            $registros=$fila;
        }
        return $registros;
    }

    function selectorCarreras($db){
        $query = "SELECT id_car, nombre_carrera FROM carreras WHERE estatus_carre = 1 ORDER BY nombre_carrera ASC";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }
    
    function insertarEstudiantes($db, $nombre, $apellido, $cedula, $semestre, $seccion, $carrera, $date){
        $query = "INSERT INTO estudiantes (nombre_est, apellido_est, cedula_est, semestre_est, seccion_est, carrera_est, fecha_registro_est) VALUES ('$nombre','$apellido', '$cedula', $semestre, $seccion, $carrera,'$date')";
        $resultado = $db->query($query);
        $id = $db->insert_id;
        $registro = selectEstudiante($db, $id);
        return $registro;
    }

    function modificarEstudiantes($db, $id, $nombre, $apellido, $cedula, $semestre, $seccion, $carrera){
        if($carrera !== 0){
            $query = "UPDATE estudiantes SET nombre_est = '$nombre', apellido_est = '$apellido', cedula_est = '$cedula', semestre_est = $semestre, seccion_est = $seccion, carrera_est = $carrera WHERE id_est = $id";
        }else{
            $query = "UPDATE estudiantes SET nombre_est = '$nombre', apellido_est = '$apellido', cedula_est = '$cedula', semestre_est = $semestre, seccion_est = $seccion WHERE id_est = $id";
        }
        $resultado = $db->query($query);
        $registro = selectEstudiante($db, $id);
        return $registro;
    }

    function deshabilitarEstudiantes($db, $id){
        $query = "UPDATE estudiantes SET estatus_est = 0 WHERE id_est = $id";
        $resultado = $db->query($query);
        $registro = selectEstudiantes($db);
        return $registro;
    }

    function habilitarEstudiantes($db, $id){
        $query = "UPDATE estudiantes SET estatus_est = 1 WHERE id_est = $id";
        $resultado = $db->query($query);
        $registro = selectEstudiantes($db);
        return $registro;
    }

    function buscarEstudiantes($db, $buscar){
        $query = "SELECT e.id_est, e.nombre_est, e.apellido_est, e.cedula_est, e.semestre_est, e.seccion_est, e.fecha_registro_est, e.estatus_est, c.id_car, c.nombre_carrera FROM estudiantes as e INNER JOIN carreras as c ON e.carrera_est = c.id_car WHERE e.nombre_est LIKE '%$buscar%' OR e.apellido_est LIKE '%$buscar%' OR e.cedula_est LIKE '%$buscar%' OR e.semestre_est LIKE '%$buscar%' OR e.seccion_est LIKE '%$buscar%' OR e.fecha_registro_est LIKE '%$buscar%' OR c.nombre_carrera LIKE '%$buscar%' ";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }
?>