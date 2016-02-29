<?php

session_start();
date_default_timezone_set('America/Sao_Paulo');

ORM::configure('mysql:host=localhost;dbname=medtronic');
ORM::configure('username', 'root');
ORM::configure('password', '');

$cur_dir = explode('\\', getcwd());
$admin_dir = 'admin';

define("ADMIN_PATH", $admin_dir . "/");
define("SITE_PATH", "site/");
define("BASE_PATH", '/' . $cur_dir[count($cur_dir) - 1] . '/');

define("VIEW_PATH", BASE_PATH ."view/");
define("VIEW_ADMIN_PATH", BASE_PATH . "view/" . $admin_dir . '/');

$uri = explode($admin_dir, $_SERVER['REQUEST_URI']);
$uri = explode('/', $uri[0]);

define("BASE_URL", 'http://' . $_SERVER['HTTP_HOST'] . '/' . $uri[1] . '/');
define("ADMIN_URL", BASE_URL . ADMIN_PATH);