<?php
namespace Models;

use config\conexion;

require_once __DIR__ . '/../config/conexion.php';

class Producto {

    /* ----------------------------------
       SELECT base para reutilizar
    ---------------------------------- */
    private function baseSelect() {
        return "
            SELECT 
                p.codigo,
                p.nombre,
                p.descripcion,
                p.precio,
                p.tipo_producto_id,
                p.color,
                p.talla,
                p.material,
                p.estilo,
                p.genero,
                p.cantidad_stock,
                p.proveedor,
                p.fecha_ingreso,
                t.nombre AS tipo_nombre
            FROM productos p
            INNER JOIN tipos_de_productos t
                ON p.tipo_producto_id = t.id
        ";
    }

    /* ----------------------------------
       OBTENER TODOS
    ---------------------------------- */
    public function obtenerTodos() {
        $db = Conexion::conectar();

        $sql = $this->baseSelect();
        $result = $db->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /* ----------------------------------
       OBTENER POR CÓDIGO
    ---------------------------------- */
    public function obtenerPorCodigo($codigo) {
        $db = Conexion::conectar();
        $codigo = $db->real_escape_string($codigo);

        $sql = $this->baseSelect() . "
            WHERE p.codigo = '$codigo'
            LIMIT 1
        ";

        $result = $db->query($sql);
        return $result->fetch_assoc();
    }

    /* ----------------------------------
       GUARDAR
    ---------------------------------- */
    public function guardar($data) {
        $db = Conexion::conectar();

        $codigo = $db->real_escape_string($data['codigo']);
        $nombre = $db->real_escape_string($data['nombre']);
        $descripcion = $db->real_escape_string($data['descripcion']);
        $precio = (int)$data['precio'];
        $tipo = (int)$data['tipo_producto_id'];

        $db->query("
            INSERT INTO productos(codigo, nombre, descripcion, precio, tipo_producto_id)
            VALUES ('$codigo', '$nombre', '$descripcion', $precio, $tipo)
        ");
    }

    /* ----------------------------------
       BUSCAR (simple)
    ---------------------------------- */
    public function buscar($codigo) {
        $db = Conexion::conectar();
        $codigo = $db->real_escape_string($codigo);

        $sql = $db->query("SELECT * FROM productos WHERE codigo = '$codigo'");
        return $sql->fetch_assoc();
    }

    /* ----------------------------------
       ACTUALIZAR
    ---------------------------------- */
    public function actualizar($data) {
        $db = Conexion::conectar();

        $codigo = $db->real_escape_string($data['codigo']);
        $nombre = $db->real_escape_string($data['nombre']);
        $descripcion = $db->real_escape_string($data['descripcion']);
        $precio = (int)$data['precio'];
        $tipo = (int)$data['tipo_producto_id'];

        $db->query("
            UPDATE productos
            SET nombre='$nombre',
                descripcion='$descripcion',
                precio=$precio,
                tipo_producto_id=$tipo
            WHERE codigo='$codigo'
        ");
    }

    /* ----------------------------------
       ELIMINAR
    ---------------------------------- */
    public function eliminar($codigo) {
        $db = Conexion::conectar();
        $codigo = $db->real_escape_string($codigo);

        $db->query("DELETE FROM productos WHERE codigo='$codigo'");
    }
}









