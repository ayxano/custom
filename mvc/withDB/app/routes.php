<?php
use FastRoute\RouteCollector;
$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute('GET', '/', [Controller\HomeController::class, 'index']);
    $r->addRoute('GET', '/{slug}', [Controller\HomeController::class, 'index']);
});
return $dispatcher;