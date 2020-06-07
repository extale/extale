<?php

/** @noinspection PhpUnhandledExceptionInspection */

require_once __DIR__ . '/../bootstrap/app.php';

$configLoader = new Ex\Configuration\Loader(CONFIG_FOLDER);

$app = (new Ex\Lucida\Core\Builders\ApplicationBuilder(BASE_PATH, $configLoader->getConfig('app')))->produce();

$kernel = $app->build('kernel', [
    BASE_PATH,
    $configLoader->getConfig('http')
]);

$response = $kernel->handle();

$response->send();
