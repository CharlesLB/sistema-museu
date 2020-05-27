<?php

ob_flush();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(url());

$route->namespace("Source\Controllers");

//
// ─── WEB ────────────────────────────────────────────────────────────────────────
//


$route->group(null);
$route->get("/", "Web:home", "web.home");
$route->get("/doacao", "Web:donation", "web.donation");
$route->get("/acervo", "Web:collection", "web.collection");
$route->get("/biblioteca", "Web:library", "web.library");


//
// ─── LOGIN ──────────────────────────────────────────────────────────────────────
//

$route->get("/login", "Login:login", "login.login");
$route->get("/esqueci-senha", "Login:forget", "login.forget");
$route->get("/confirmar-codigo", "Login:code", "login.code");
$route->get("/nova-senha", "Login:newPassword", "login.newPassword");


//
// ─── ADMIN ──────────────────────────────────────────────────────────────────────
//




//
// ─── ERROR ──────────────────────────────────────────────────────────────────────
//

$route->group("error");
$route->get("/{errcode}", "Web:error", "web.error");

//
// ─── PROCESS ────────────────────────────────────────────────────────────────────
//

$route->dispatch();

if ($route->error()){
    $route->redirect("/error/{$route->error()}");
}

ob_end_flush();