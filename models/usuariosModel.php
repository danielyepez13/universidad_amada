<?php
    function selectUsuarios($db){
        $query = "SELECT u.id_usuario, u.cedula, u.rol, u.fecha_registro_usu, u.estatus_usuario, r.id_rol, r.nombre_rol FROM usuarios as u INNER JOIN roles as r ON u.rol = r.id_rol ORDER BY u.estatus_usuario DESC, u.id_usuario DESC";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }

    function selectUsuario($db, $id){
        $query = "SELECT u.id_usuario, u.cedula, u.rol, u.fecha_registro_usu, u.estatus_usuario, r.id_rol, r.nombre_rol FROM usuarios as u INNER JOIN roles as r ON u.rol = r.id_rol WHERE u.id_usuario = $id";
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
        $registro = selectUsuario($db, $id);
        return $registro;
    }

    function modificarUsuarios($db, $id, $cedula, $rol){
        $query = "UPDATE usuarios SET cedula = '$cedula', rol = $rol WHERE id_usuario = $id";
        $resultado = $db->query($query);
        $registro = selectUsuario($db, $id);
        return $registro;
    }

    function deshabilitarUsuarios($db, $id){
        $query = "UPDATE usuarios SET estatus_usuario = 0 WHERE id_usuario = $id";
        $resultado = $db->query($query);
        $registro = selectUsuarios($db);
        return $registro;
    }

    function habilitarUsuarios($db, $id){
        $query = "UPDATE usuarios SET estatus_usuario = 1 WHERE id_usuario = $id";
        $resultado = $db->query($query);
        $registro = selectUsuarios($db);
        return $registro;
    }

    function buscarUsuarios($db, $buscar){
        $query = "SELECT u.id_usuario, u.cedula, u.rol, u.fecha_registro_usu, u.estatus_usuario, r.id_rol, r.nombre_rol FROM usuarios as u INNER JOIN roles as r ON u.rol = r.id_rol WHERE u.cedula LIKE '%$buscar%' OR u.fecha_registro_usu LIKE '%$buscar%' OR r.nombre_rol LIKE '%$buscar%'";
        $resultado = $db->query($query);
        $registros = array();
        while($fila = $resultado->fetch_assoc()){
            $registros[]=$fila;
        }
        return $registros;
    }
?>