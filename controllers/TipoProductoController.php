<?php
namespace Controllers;

use Models\TipoProducto;
use Core\View;

class TipoProductoController {

    private const REDIRECT_TIPOS = "Location: index.php?view=tipos";

    /* ----------------------------------
       LISTADO
    ---------------------------------- */
    public function index() {
        $model = new TipoProducto();
        $tipos = $model->obtenerTodos();

        View::load("tipos/index", [
            "tipos" => $tipos
        ]);
    }

    /* ----------------------------------
       CREAR
    ---------------------------------- */
    public function crear() {
        View::load("tipos/crear");
    }

    /* ----------------------------------
       GUARDAR
    ---------------------------------- */
    public function guardar() {
        $model = new TipoProducto();
        $model->guardar($_POST);

        header(self::REDIRECT_TIPOS);
        exit;
    }

    /* ----------------------------------
       EDITAR
    ---------------------------------- */
    public function editar() {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            header(self::REDIRECT_TIPOS);
            exit;
        }

        $model = new TipoProducto();
        $tipo = $model->buscar($id);

        if (!$tipo) {
            header(self::REDIRECT_TIPOS);
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

        header(self::REDIRECT_TIPOS);
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

        header(self::REDIRECT_TIPOS);
        exit;
    }
}





