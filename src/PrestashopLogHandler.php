<?php

namespace Skeleton\Module;

use Monolog\Handler\AbstractProcessingHandler;

class PrestashopLogHandler extends AbstractProcessingHandler
{
    protected function write(array $record)
    {
        \PrestaShopLogger::addLog($record['formatted']);
    }
}