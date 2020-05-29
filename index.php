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
$route->post("/contact", "MailController:contact", "mail.contact");


//
// ─── LOGIN ──────────────────────────────────────────────────────────────────────
//

$route->group(null);
$route->get("/login", "Auth:login", "auth.login");
$route->get("/esqueci-senha", "Auth:forget", "auth.forget");
$route->get("/confirmar-codigo", "Auth:code", "auth.code");
$route->get("/nova-senha", "Auth:newPassword", "auth.newPassword");


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