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

$route->group("/admin");
$route->get("/", "Web:admin", "web.admin");

$route->get("/acervo", "Web:collectionCategories", "web.collection");
$route->get("/acervo/peca/{collection_id}", "Web:collection", "web.piece");
$route->post("/acervo/pesquisa/", "CollectionController:search", "collection.search");

$route->post("/acervo/create-collection", "CollectionController:create", "collection.create");
$route->put("/acervo/edit-collection", "CollectionController:edit", "collection.edit");
$route->post("/acervo/delete-collection", "CollectionController:delete", "collection.delete");

$route->post("/acervo/create-fish", "FishController:create", "fish.create");
$route->put("/acervo/edit-fish", "FishController:edit", "fish.edit");
$route->post("/acervo/delete-fish", "FishController:delete", "fish.delete");

$route->get("/mensagens", "Web:mails", "web.mails");
$route->get("/mensagens/respondidas", "Web:readedMails", "web.readedmails");
$route->post("/mensagens/make-as-read", "MailController:read", "mail.read");
$route->post("/mensagens/make-as-unread", "MailController:unread", "mail.unread");

$route->get("/usuarios", "Web:users", "web.users");
$route->post("/usuarios/create-users", "UsersController:create", "users.create");
$route->put("/usuarios/edit-users", "UsersController:edit", "users.edit");
$route->post("/usuarios/delete-users", "UsersController:delete", "category.delete");

$route->get("/user", "Web:user", "web.user");
$route->get("/meu-usuario", "Web:user", "web.user");
$route->put("/user/edit-user", "UserController:edit", "user.edit");


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