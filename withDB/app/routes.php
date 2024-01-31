<?php
use FastRoute\RouteCollector;
$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute('GET', '/', [Controller\PageController::class, 'index']);
    $r->addRoute('GET', '/{slug}', [Controller\PageController::class, 'index']);
});
return $dispatcher;