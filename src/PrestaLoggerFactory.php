<?php

namespace Skeleton\Module;

use Monolog\Logger;

class PrestaLoggerFactory
{
    public function __invoke(array $config): Logger
    {
        //TODO add app() helper to make by class name handler.
        $logger = new Logger($config['driver']);
        $logger->pushHandler(new PrestashopLogHandler());

        return $logger;
    }
}