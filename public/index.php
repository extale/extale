<?php

/** @noinspection PhpUnhandledExceptionInspection */

require_once __DIR__ . '/../bootstrap/app.php';

$configLoader = new Hooina\Configuration\ConfigurationLoader(CONFIG_FOLDER);

$app = (new Hooina\Core\Builders\ApplicationBuilder(BASE_PATH, $configLoader->getConfig('app')))->produce();

$kernel = $app->build('kernel', [
    BASE_PATH,
    $configLoader->getConfig('http')
]);

$response = $kernel->handle();

$response->send();
