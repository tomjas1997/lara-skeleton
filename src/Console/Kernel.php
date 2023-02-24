<?php

namespace Skeleton\Module\Console;

use Skeleton\Module\Console\Command\VendorPublishCommand;
use Invertus\Laracore\Vendor\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        VendorPublishCommand::class
    ];

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require $this->app->basePath('routes/console.php');
    }
}
