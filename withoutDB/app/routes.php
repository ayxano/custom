<?php
use FastRoute\RouteCollector;
$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute('GET', '/', [Controller\PageController::class, 'index']);
    $r->addRoute('GET', '/folder1', [Controller\PageController::class, 'folderOne']);
    $r->addRoute('GET', '/folder2', [Controller\PageController::class, 'folderTwo']);
});
return $dispatcher;