<?php
// Carga de variables del archivo config.env
function loadEnv($path) {
    if (!file_exists($path)) return;

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $line = trim($line);

        // Ignora comentarios
        if ($line === '' || $line[0] === '#') continue;

        list($key, $value) = explode('=', $line, 2);

        putenv("$key=$value");
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}

loadEnv(__DIR__ . '/config.env');

// Conexión segura a MySQL
$db = new mysqli(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME']
);

// Manejo de errores
if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}
