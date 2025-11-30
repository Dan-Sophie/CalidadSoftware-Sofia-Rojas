<?php
class Conexion {
    public static function conectar() {
        $db = new mysqli("localhost", "root", "AdminSofia1234", "almacenderopa");
        $db->set_charset("utf8");
        return $db;
    }
}
