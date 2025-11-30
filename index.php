<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

/* -----------------------------
   AUTOLOAD CASERO (PHP PURO)
------------------------------ */
spl_autoload_register(function($class) {
    // Convierte namespaces a rutas
    $class = str_replace("\\", "/", $class);
    $path = __DIR__ . "/" . $class . ".php";

    if (file_exists($path)) {
        require_once $path;
    }
});

/* -----------------------------
   IMPORTAR CONTROLADORES
------------------------------ */
use Controllers\AuthController;
use Controllers\TipoProductoController;
use Controllers\ProductosController;
use Controllers\CatalogoController;

/* -----------------------------
   RUTEO
------------------------------ */
$view = $_GET['view'] ?? 'principal';

switch ($view) {

    /* LOGIN */
    case 'login':
        (new AuthController())->login();
        break;

    case 'login_validar':
        (new AuthController())->validar();
        break;

    case 'logout':
        (new AuthController())->logout();
        break;

    case 'dashboard':
        (new AuthController())->dashboard();
        break;


    /* TIPOS */
    case 'tipos':
        (new TipoProductoController())->index();
        break;

    case 'tipo_crear':
        (new TipoProductoController())->crear();
        break;

    case 'tipo_guardar':
        (new TipoProductoController())->guardar();
        break;

    case 'tipo_editar':
        (new TipoProductoController())->editar();
        break;

    case 'tipo_actualizar':
        (new TipoProductoController())->actualizar();
        break;

    case 'tipo_eliminar':
        (new TipoProductoController())->eliminar();
        break;


    /* PRODUCTOS */
    case 'productos':
        (new ProductosController())->index();
        break;

    case 'producto_crear':
        (new ProductosController())->crear();
        break;

    case 'producto_guardar':
        (new ProductosController())->guardar();
        break;

    case 'producto_editar':
        (new ProductosController())->editar();
        break;

    case 'producto_actualizar':
        (new ProductosController())->actualizar();
        break;

    case 'producto_eliminar':
        (new ProductosController())->eliminar();
        break;


    /* CATÁLOGO */
    case 'catalogo':
        (new CatalogoController())->index();
        break;

    /* PRINCIPAL SIN CONTROLADOR */
    case 'principal':
        require "views/principal/index.php";
        break;

    default:
        header("Location: index.php?view=login");
        break;
}





