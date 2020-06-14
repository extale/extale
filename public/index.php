<?php

/** @noinspection PhpUnhandledExceptionInspection */

require_once __DIR__ . '/../bootstrap/app.php';

$configLoader = new Hooina\Configuration\ConfigurationLoader(CONFIG_FOLDER);

$app = Hooina\Core\Application::getInstance()->create(BASE_PATH, $configLoader->getConfig('app'));

$kernel = (new Hooina\Http\Factory\KernelFactory())->create($configLoader->getConfig('http'));

$response = $kernel->handle();

$response->send();
