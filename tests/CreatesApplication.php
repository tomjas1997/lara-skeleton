<?php

namespace Skeleton\Tests;

use Invertus\Laracore\Vendor\Foundation\Application\Application;

trait CreatesApplication
{
    /**
     * Creates the application.
     */
    public function createApplication(): Application
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        return $app;
    }
}