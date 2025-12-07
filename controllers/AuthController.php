<?php

namespace Controllers;

use Models\Producto;
use Models\TipoProducto;

class AuthController {

    public function login() {
        require "views/login/login.php";
    }

    public function validar() {
        $user = $_POST['usuario'] ?? '';
        $pass = $_POST['password'] ?? '';

        if ($user === "Danna Sofia" && $pass === "AdminDanso") {
            $_SESSION['admin'] = true;
            header("Location: index.php?view=dashboard");
            exit;
        }

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

        // Gracias al autoload ya no se necesitan require
        $productoModel = new Producto();
        $tipoModel = new TipoProducto();

        $productos = $productoModel->obtenerTodos();
        $tipos = $tipoModel->obtenerTodos();

        require "views/dashboard/dashboard.php";
    }
}






