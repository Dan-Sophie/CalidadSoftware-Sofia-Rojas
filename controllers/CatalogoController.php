<?php
require_once "models/Producto.php";

class CatalogoController {

    public function index() {
        $model = new Producto();
        $productos = $model->obtenerTodos();
        require "views/catalogo/index.php";
    }
}

