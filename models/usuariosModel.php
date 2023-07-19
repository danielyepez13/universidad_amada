<?php
    function selectUsuarios($db){
        $query = "SELECT u.id_usuario, u.cedula, u.fecha_registro_usu, u.estatus_usuario, r.id_rol, r.nombre_rol FROM usuarios as u INNER JOIN roles as r ON u.rol = r.id_rol ORDER BY u.estatus_usuario DESC, u.id_usuario DESC";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }

    function selectUsuario($db, $id){
        $query = "SELECT u.id_usuario, u.cedula, u.fecha_registro_usu, u.estatus_usuario, r.id_rol, r.nombre_rol FROM usuarios as u INNER JOIN roles as r ON u.rol = r.id_rol ORDER BY u.estatus_usuario DESC, u.id_usuario DESC WHERE u.id_usuario = $id";
        $resultado = $db->query($query);
        $registros = '';
        while($fila = $resultado->fetch_assoc()){
            $registros=$fila;
        }
        return $registros;
    }

    function selectorRoles($db){
        $query = "SELECT id_rol, nombre_rol FROM roles ORDER BY nombre_rol ASC";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }
    
    function insertarUsuarios($db, $cedula, $rol, $date){
        $query = "INSERT INTO usuarios (cedula, rol, fecha_registro_usu) VALUES ('$cedula',$rol,'$date')";
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