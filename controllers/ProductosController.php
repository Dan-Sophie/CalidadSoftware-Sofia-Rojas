<?php
namespace Controllers;

use Models\Producto;
use Models\TipoProducto;

class ProductosController {

    public function index() {
        $productoModel = new Producto();
        $productos = $productoModel->obtenerTodos();

        require "views/productos/index.php";
    }

    public function crear() {
        $tipoModel = new TipoProducto();
        $tipos = $tipoModel->obtenerTodos();

        require "views/productos/crear.php";
    }

    public function guardar() {
        $productoModel = new Producto();
        $productoModel->guardar($_POST);

        header("Location: index.php?view=productos");
        exit;
    }

    public function editar() {
        if (!isset($_GET['codigo'])) {
            header("Location: index.php?view=productos");
            exit;
        }

        $productoModel = new Producto();
        $tipoModel = new TipoProducto();

        $producto = $productoModel->obtenerPorCodigo($_GET['codigo']);
        $tipos = $tipoModel->obtenerTodos();

        require "views/productos/editar.php";
    }

    public function actualizar() {
        $productoModel = new Producto();
        $productoModel->actualizar($_POST);

        header("Location: index.php?view=productos");
        exit;
    }

    public function eliminar() {
        if (!isset($_GET['codigo'])) {
            header("Location: index.php?view=productos");
            exit;
        }

        $productoModel = new Producto();
        $productoModel->eliminar($_GET['codigo']);

        header("Location: index.php?view=productos");
        exit;
    }
}











