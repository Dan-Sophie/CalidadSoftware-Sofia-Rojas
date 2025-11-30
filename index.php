<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

$view = $_GET['view'] ?? 'principal';


switch($view) {

    /* LOGIN */
    case 'login':
        require_once "controllers/AuthController.php";
        (new AuthController())->login();
        break;

    case 'login_validar':
        require_once "controllers/AuthController.php";
        (new AuthController())->validar();
        break;

    case 'logout':
        require_once "controllers/AuthController.php";
        (new AuthController())->logout();
        break;
        
    case 'dashboard':
        require_once "controllers/AuthController.php";
        (new AuthController())->dashboard();
        break;


    /* TIPOS DE PRODUCTOS */
    case 'tipos':
        require_once "controllers/TipoProductoController.php";
        (new TipoProductoController())->index();
        break;
    
    case 'tipo_crear':
        require_once "controllers/TipoProductoController.php";
        (new TipoProductoController())->crear();
        break;
    
    case 'tipo_guardar':
        require_once "controllers/TipoProductoController.php";
        (new TipoProductoController())->guardar();
        break;
    
    case 'tipo_editar':
        require_once "controllers/TipoProductoController.php";
        (new TipoProductoController())->editar();
        break;
    
    case 'tipo_actualizar':
        require_once "controllers/TipoProductoController.php";
        (new TipoProductoController())->actualizar();
        break;
    
    case 'tipo_eliminar':
        require_once "controllers/TipoProductoController.php";
        (new TipoProductoController())->eliminar();
        break;


        /* PRODUCTOS */
    case 'productos':
        require_once "controllers/ProductosController.php";
        (new ProductosController())->index();
        break;    

    case 'producto_crear':
        require_once "controllers/ProductosController.php";
        (new ProductosController())->crear();
        break;

    case 'producto_guardar':
        require_once "controllers/ProductosController.php";
        (new ProductosController())->guardar();
        break;

    case 'producto_editar':
        require_once "controllers/ProductosController.php";
        (new ProductosController())->editar();
        break;

    case 'producto_actualizar':
        require_once "controllers/ProductosController.php";
        (new ProductosController())->actualizar();
        break;

    case 'producto_eliminar':
        require_once "controllers/ProductosController.php";
        (new ProductosController())->eliminar();
        break;



    /* CATÁLOGO */
    case 'catalogo':
        require_once "controllers/CatalogoController.php";
        (new CatalogoController())->index();
        break;
    
    case 'principal':
        require_once "views/principal/index.php";
        break;
        
    default:
        header("Location: index.php?view=login");
        break;
}




