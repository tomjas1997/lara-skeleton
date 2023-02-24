<?php

$rootDirectory = __DIR__ . '/../../../';
$projectDir = __DIR__ . '/../';

if (file_exists($rootDirectory . 'vendor/autoload.php')) {
    require_once $rootDirectory . 'vendor/autoload.php';
}

if (file_exists($rootDirectory . 'autoload.php')) {
    require_once $rootDirectory . 'autoload.php';
}

$app = new \Invertus\Laracore\Vendor\Foundation\Application\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    $app->make(\Skeleton\Module\Console\Kernel::class)
);

return $app;