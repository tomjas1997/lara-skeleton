<?php

if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
}

if (file_exists(__DIR__.'/../../../vendor/autoload.php')) {
    require __DIR__.'/../../../vendor/autoload.php';
}

$app = new \Invertus\Laracore\Vendor\Foundation\Application\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

$app->singleton(Illuminate\Contracts\Console\Kernel::class, \Skeleton\Module\Console\Kernel::class);

return $app;