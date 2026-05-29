<?php

define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';

use App\Core\Router;

$router = new Router();

// ROTAS DO SISTEMA
$router->get('/', 'DashboardController@index');
$router->get('/dashboard', 'DashboardController@index');
$router->get('/clientes', 'ClienteController@index');
$router->get('/pecas', 'PecasController@index');
$router->get('/servicos', 'ServicoController@index');
$router->get('/veiculos', 'VeiculosController@index');
$router->get('/veiculos/buscar-clientes', 'VeiculosController@buscarClientes');
$router->post('/veiculos/adicionar', 'VeiculosController@adicionarVeiculo');
$router->post('/veiculos/editar', 'VeiculosController@editarVeiculo');
$router->post('/clientes/adicionar', 'ClientesController@adicionarCliente');
$router->post('/clientes/editar', 'ClientesController@editarCliente');
$router->post('/pecas/adicionar', 'PecasController@adicionarPeca');
$router->post('/pecas/editar', 'PecasController@editarPeca');
$router->get('/pecas/excluir', 'PecasController@excluir');
$router->get('/pecas/categorias', 'PecasController@categorias');
$router->get('/servicos/excluir', 'ServicoController@excluir');
$router->get('/servicos/categorias', 'ServicoController@listarCategorias');
$router->post('/servicos/adicionar', 'ServicoController@adicionarServico');
$router->post('/servicos/editar', 'ServicoController@editarServico');
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