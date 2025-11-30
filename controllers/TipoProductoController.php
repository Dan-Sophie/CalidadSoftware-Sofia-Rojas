<?php
namespace Controllers;

use Models\TipoProducto;
use Core\View;

class TipoProductoController {

    /* ----------------------------------
       LISTAR
    ---------------------------------- */
    public function index() {
        $model = new TipoProducto();
        $tipos = $model->obtenerTodos();

        View::load("tipos/index", [
            "tipos" => $tipos
        ]);
    }

    /* ----------------------------------
       FORMULARIO CREAR
    ---------------------------------- */
    public function crear() {
        View::load("tipos/crear");
    }

    /* ----------------------------------
       GUARDAR NUEVO REGISTRO
    ---------------------------------- */
    public function guardar() {
        $model = new TipoProducto();
        $model->guardar($_POST);

        header("Location: index.php?view=tipos");
        exit;
    }

    /* ----------------------------------
       EDITAR
    ---------------------------------- */
    public function editar() {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            header("Location: index.php?view=tipos");
            exit;
        }

        $model = new TipoProducto();
        $tipo = $model->buscar($id);

        if (!$tipo) {
            header("Location: index.php?view=tipos");
            exit;
        }

        View::load("tipos/editar", [
            "tipo" => $tipo
        ]);
    }

    /* ----------------------------------
       ACTUALIZAR
    ---------------------------------- */
    public function actualizar() {
        $model = new TipoProducto();
        $model->actualizar($_POST);

        header("Location: index.php?view=tipos");
        exit;
    }

    /* ----------------------------------
       ELIMINAR
    ---------------------------------- */
    public function eliminar() {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $model = new TipoProducto();
            $model->eliminar($id);
        }

        header("Location: index.php?view=tipos");
        exit;
    }
}




