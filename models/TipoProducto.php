<?php
require_once "config/conexion.php";

class TipoProducto {

    public function obtenerTodos() {
        $db = Conexion::conectar();
        $sql = $db->query("SELECT * FROM tipos_de_productos ORDER BY nombre ASC");
        return $sql->fetch_all(MYSQLI_ASSOC);
    }

    public function guardar($data) {
        $db = Conexion::conectar();
        $nombre = $db->real_escape_string($data['nombre']);
        $db->query("INSERT INTO tipos_de_productos(nombre) VALUES ('$nombre')");
    }

    public function buscar($id) {
        $db = Conexion::conectar();
        $id = (int)$id;
        $sql = $db->query("SELECT * FROM tipos_de_productos WHERE id = $id");
        return $sql->fetch_assoc();
    }

    public function actualizar($data) {
        $db = Conexion::conectar();
        $id = (int)$data['id'];
        $nombre = $db->real_escape_string($data['nombre']);

        $db->query("UPDATE tipos_de_productos SET nombre='$nombre' WHERE id=$id");
    }

    public function eliminar($id) {
        $db = Conexion::conectar();
        $id = (int)$id;
        $db->query("DELETE FROM tipos_de_producto WHERE id=$id");
    }
}


