#!/usr/bin/env php
<?php

namespace Ifacesoft\Ice\Http;

$startTime = microtime(true);

use Exception;
use Ifacesoft\Ice\Http\Domain\Message\Request;
use Ifacesoft\Ice\Http\Domain\Message\Response;
use Ifacesoft\Ice\Core\Infrastructure\Core\Application;
use Throwable;

require_once __DIR__ . '/../../../autoload.php';

try {
    /** @var Application $application */
    $application = Application::getInstance(
        [],
        [
            'startTime' => $startTime,
            'debug' => 1,
            'profiling' => 1
        ]
    );

    $application->handle(Request::class, Response::class);
} catch (Exception $e) {
    die(Application::debugExceptionString($e, 0, 'html'));
} catch (Throwable $e) {
    die(Application::debugExceptionString($e, 0, 'html'));
}
