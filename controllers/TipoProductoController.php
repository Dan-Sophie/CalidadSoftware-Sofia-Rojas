<?php
require_once "models/TipoProducto.php";

class TipoProductoController {

    public function index() {
        $model = new TipoProducto();
        $tipos = $model->obtenerTodos();
        require "views/tipos/index.php";
    }

    public function crear() {
        require "views/tipos/crear.php";
    }

    public function guardar() {
        $model = new TipoProducto();
        $model->guardar($_POST);
        header("Location: index.php?view=tipos");
    }

    public function editar() {
        $model = new TipoProducto();
        $tipo = $model->buscar($_GET['id']);
        require "views/tipos/editar.php";
    }

    public function actualizar() {
        $model = new TipoProducto();
        $model->actualizar($_POST);
        header("Location: index.php?view=tipos");
    }

    public function eliminar() {
        $model = new TipoProducto();
        $model->eliminar($_GET['id']);
        header("Location: index.php?view=tipos");
    }
}



