<?php

//
// ─── URL ─────────────────────────────────────────────────────────────────────
//


define("URL", [
    "localhost" => "https://www.localhost/sistema-museu",
    "base" => "https://www.base.com"]
);

//
// ─── SITE ───────────────────────────────────────────────────────────────────────
//


define("SITE", [
    "name" => "Museu do computador",
    "github" => "https://github.com/CharlesLB/sistema-museu"
]);

//
// ─── MAIL ───────────────────────────────────────────────────────────────────────
//


/* Secret Data */
define("MAIL", [
    "host" => "",
    "port" => "",
    "user" => "",
    "passwd" => "",
    "from_name" => "",
    "from_email" => "",
]);


//
// ─── DATABASE ───────────────────────────────────────────────────────────────────
//

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "db_museum",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);