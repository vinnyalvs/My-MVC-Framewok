<?php


require __DIR__ . '/../vendor/autoload.php';

// Faz o require das rotas necessárias
$routes = require __DIR__ . '/../app/routes/routes.php';

// Vamos separar o nome da rota de possíveis query params.

$requestPath = $_SERVER['REQUEST_URI'];
$urlRequested = preg_replace('/\?.*/', '', $requestPath);

// Vamos verificar se a rota existe no arquivo de routes. Se não, apresentamos erro.

if (!array_key_exists($urlRequested , $routes)) {
    http_response_code(404);
    echo "<h1> PÁGINA NÃO ENCONTRADA - ERRO 404</h1>";
    echo "<h2> Confira se o endereço esta digitado corretamente</h2>";
    exit();
}

session_start();

// Chamamos o controllador principal passando o nome do controller e do método. Ambos definidos no route.php
$controllerMethodRequested = $routes[$urlRequested];
$frontController = new \App\Core($controllerMethodRequested[0], $controllerMethodRequested[1]);










?>