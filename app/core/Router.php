<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, string $action): void
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post(string $uri, string $action): void
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch(string $uri, string $method): void
    {
        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            echo "Rota não encontrada: $uri";
            return;
        }

        [$controller, $action] = explode('@', $this->routes[$method][$uri]);

        $controllerClass = "App\\Controllers\\$controller";

        if (!class_exists($controllerClass)) {
            die("Controller não encontrado: $controllerClass");
        }

        $instance = new $controllerClass();

        if (!method_exists($instance, $action)) {
            die("Método não encontrado: $action");
        }

        $instance->$action();
    }
}

?>