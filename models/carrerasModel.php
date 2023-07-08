<?php
    function selectCarreras($db){
        $query = "SELECT c.id_car, c.nombre_carrera, c.id_facultad, c.id_pensum, c.estatus_carre, c.fecha_registro_carre, f.nombre_facul, p.nombre_pens FROM carreras as c INNER JOIN facultades as f ON c.id_facultad = f.id_facul INNER JOIN pensum as p ON c.id_pensum = p.id_pensum ORDER BY c.estatus_carre DESC, c.id_car DESC";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }

    function selectCarrera($db, $id){
        $query = "SELECT c.id_car, c.nombre_carrera, c.id_facultad, c.id_pensum, c.estatus_carre, c.fecha_registro_carre, f.nombre_facul, p.nombre_pens FROM carreras as c INNER JOIN facultades as f ON c.id_facultad = f.id_facul INNER JOIN pensum as p ON c.id_pensum = p.id_pensum WHERE c.id_car = $id";
        $resultado = $db->query($query);
        $registros = '';
        while($fila = $resultado->fetch_assoc()){
            $registros=$fila;
        }
        return $registros;
    }

    function selectorPensum($db){
        $query = "SELECT id_pensum, nombre_pens FROM pensum WHERE estatus_pensum = 1 ORDER BY nombre_pens ASC";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }

    function selectorFacultades($db){
        $query = "SELECT id_facul, nombre_facul FROM facultades WHERE estatus_facul = 1 ORDER BY nombre_facul ASC";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }
    
    function insertarCarreras($db, $nombre, $facultad, $pensum, $date){
        $query = "INSERT INTO carreras (nombre_carrera, id_facultad, id_pensum, fecha_registro_carre) VALUES ('$nombre',$facultad,$pensum,'$date')";
        $resultado = $db->query($query);
        $id = $db->insert_id;
        $registro = selectCarrera($db, $id);
        return $registro;
    }

    function modificarCarreras($db, $id, $nombre, $facultad, $pensum){
        $añadido = '';
        if($facultad != ''){
            $añadido .= ", id_facultad = $facultad";
        }else if($pensum != ''){
            $añadido .= ", id_pensum = $pensum";
        }
        $query = "UPDATE carreras SET nombre_carrera = '$nombre' $añadido WHERE id_car = $id";
        $resultado = $db->query($query);
        $registro = selectCarrera($db, $id);
        return $registro;
    }

    function deshabilitarCarreras($db, $id){
        $query = "UPDATE carreras SET estatus_carre = 0 WHERE id_car = $id";
        $resultado = $db->query($query);
        $registro = selectCarreras($db);
        return $registro;
    }

    function habilitarCarreras($db, $id){
        $query = "UPDATE carreras SET estatus_carre = 1 WHERE id_car = $id";
        $resultado = $db->query($query);
        $registro = selectCarreras($db);
        return $registro;
    }

    function buscarCarreras($db, $buscar){
        $query = "SELECT c.nombre_carrera, c.fecha_registro_carre, f.nombre_facul, p.nombre_pens FROM carreras as c INNER JOIN facultades as f ON c.id_facultad = f.id_facul INNER JOIN pensum as p ON c.id_pensum = p.id_pensum WHERE c.nombre_carrera LIKE '%$buscar%' OR c.fecha_registro_carre LIKE '%$buscar%' OR f.nombre_facul LIKE '%$buscar%' OR p.nombre_pens LIKE '%$buscar%' ";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }
?>