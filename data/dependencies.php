<?php

require '/../vendor/autoload.php';

$directories = array(
    'models/',
    'services/',
    'routes/'
);

foreach ($directories as $directory) {
    foreach(glob($directory . "*.php") as $class) {
        include_once $class;
    }
}