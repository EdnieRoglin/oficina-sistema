<?php

define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';

use App\Core\Router;

$router = new Router();

// ROTAS DO SISTEMA
$router->get('/', 'DashboardController@index');
$router->get('/dashboard', 'DashboardController@index');
$router->get('/servicos', 'ServicoController@index');
$router->get('/clientes', 'ClienteController@index');
$router->get('/kanban', 'KanbanController@index');

// pega a URL digitada
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// remove /oficina-sistema/public da frente
$basePath = '/oficina-sistema/public';
$uri = str_replace($basePath, '', $uri);

// se ficar vazio, vira /
$uri = $uri ?: '/';

$router->dispatch($uri, $_SERVER['REQUEST_METHOD']);

?>