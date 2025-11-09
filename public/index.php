<?php

use app\controllers\VehicleController;
use app\models\Coche;
use app\models\Moto;
use app\models\Vehiculo;


require __DIR__ . '/../vendor/autoload.php';

declare(strict_types=1);

function request(): void
{
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

    $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/\\');
    if ($base && str_starts_with($uri, $base)) {
        $uri = substr($uri, strlen($base));
        if ($uri === false) $uri = '/';
    }

    $controller = new VehicleController();

    if ($method === 'GET' && $uri === '/vehiculo/get') {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $vehiculo = $id > 0 ? $controller->getById($id) : null;


        require __DIR__ . '/../app/views/vehiculo_get.php';
        return;
    }
}
request();
