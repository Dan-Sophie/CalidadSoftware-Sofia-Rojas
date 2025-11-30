<?php
namespace Core;

class View {
    public static function load($view, $data = []) {
        // Extrae variables
        extract($data);

        // Carga la vista real
        require __DIR__ . "/../views/" . $view . ".php";
    }
}

