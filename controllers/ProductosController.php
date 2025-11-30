<?php
require_once "models/Producto.php";
require_once "models/TipoProducto.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class ProductosController {

    /* ----------------------------------
       Protección
    ---------------------------------- */
    private function proteger() {
        if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
            header("Location: index.php?view=login");
            exit;
        }
    }

    /* ----------------------------------
       LISTAR
    ---------------------------------- */
    public function index() {
        $this->proteger();

        $productoModel = new Producto();
        $productos = $productoModel->obtenerTodos();

        require_once "views/productos/listado.php";
    }

    /* ----------------------------------
       CREAR
    ---------------------------------- */
    public function crear() {
        $this->proteger();

        $tipoModel = new TipoProducto();
        $tipos = $tipoModel->obtenerTodos();

        require_once "views/productos/crear.php";
    }

    public function guardar() {
        $this->proteger();

        $producto = new Producto();
        $producto->codigo = $_POST['codigo'];
        $producto->nombre = $_POST['nombre'];
        $producto->precio = $_POST['precio'];
        $producto->tipo_producto_id = $_POST['tipo_producto_id'];

        $producto->guardar();

        header("Location: index.php?view=productos");
        exit;
    }

    /* ----------------------------------
       EDITAR
    ---------------------------------- */
    public function editar() {
        $this->proteger();

        $codigo = $_GET['codigo'] ?? null;

        if (!$codigo) {
            header("Location: index.php?view=productos");
            exit;
        }

        $productoModel = new Producto();
        $producto = $productoModel->obtenerPorCodigo($codigo);

        if (!$producto) {
            header("Location: index.php?view=productos");
            exit;
        }

        $tipoModel = new TipoProducto();
        $tipos = $tipoModel->obtenerTodos();

        require_once "views/productos/editar.php";
    }

    public function actualizar() {
        $this->proteger();

        $data = [
            "codigo"            => $_POST['codigo'],
            "nombre"            => $_POST['nombre'],
            "descripcion"       => $_POST['descripcion'],
            "precio"            => $_POST['precio'],
            "tipo_producto_id"  => $_POST['tipo_producto_id']
        ];

        $producto = new Producto();
        $producto->actualizar($data);

        header("Location: index.php?view=productos");
        exit;
    }

    /* ----------------------------------
       ELIMINAR
    ---------------------------------- */
    public function eliminar() {
        $this->proteger();

        $codigo = $_GET['codigo'] ?? null;

        if ($codigo) {
            $producto = new Producto();
            $producto->eliminar($codigo);
        }

        header("Location: index.php?view=productos");
        exit;
    }
}







