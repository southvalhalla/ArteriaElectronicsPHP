<?php
// Obtener la URL solicitada
$request = $_SERVER['REQUEST_URI'];

// Enviar la solicitud al controlador correspondiente
switch ($request) {
    case '/':
        require __DIR__ . './index.php';
        break;
    case '/compras':
        require __DIR__ . './compras/index.php';
        break;
    case '/productos':
        require __DIR__ . './productos/index.php';
        break;
    case '/usuario':
        require __DIR__ . './usuario/index.php';
        break;
    case '/categoria':
        require __DIR__ . './gategoria/index.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/index.php';
        break;
}