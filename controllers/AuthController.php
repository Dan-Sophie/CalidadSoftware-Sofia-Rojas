<?php

namespace Controllers;
use Core\View;


class AuthController {

    public function login() {
        require_once "views/login/login.php";
    }

    public function validar() {
        $user = $_POST['usuario'] ?? '';
        $pass = $_POST['password'] ?? '';

        if ($user === "Danna Sofia" && $pass === "AdminDanso") {
            $_SESSION['admin'] = true;
            header("Location: index.php?view=dashboard");
            exit;
        }

        // usuario normal → va al catálogo
        header("Location: index.php?view=catalogo");
        exit;
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?view=login");
        exit;
    }

    public function dashboard() {
        if (!isset($_SESSION['admin'])) {
            header("Location: index.php?view=login");
            exit;
        }

        require_once "models/Producto.php";
        require_once "models/TipoProducto.php";

        $productoModel = new Producto();
        $tipoModel = new TipoProducto();

        $productos = $productoModel->obtenerTodos();
        $tipos = $tipoModel->obtenerTodos();

        require_once "views/dashboard/dashboard.php";
    }
}





