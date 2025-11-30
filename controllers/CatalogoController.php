<?php
namespace Controllers;

use Models\Producto;
use Core\View;

class CatalogoController {

    public function index() {
        $model = new Producto();
        $productos = $model->obtenerTodos();

        View::load("catalogo/index", [
            "productos" => $productos
        ]);
    }
}


