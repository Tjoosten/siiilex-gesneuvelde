<?php

// web/index.php
require __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function () use ($app) {
    return 'Hello';
});

$app->run();
