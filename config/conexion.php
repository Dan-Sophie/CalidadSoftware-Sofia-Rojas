<?php
class Conexion {
    public static function conectar() {
        $db = new mysqli("localhost", "root", "yA7*JmP$42fz!Q", "almacenderopa");
        $db->set_charset("utf8");
        return $db;
    }
}
