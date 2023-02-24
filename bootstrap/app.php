<?php

if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
}

if (file_exists(__DIR__.'/../../../config/config.inc.php')) {
    require __DIR__.'/../../../config/config.inc.php';
}

if (file_exists(__DIR__.'/../../../vendor/autoload.php')) {
    require __DIR__.'/../../../vendor/autoload.php';
}

$app = new \Invertus\Laracore\Vendor\Foundation\Application\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    $app->make(\Skeleton\Module\Console\Kernel::class)
);

return $app;