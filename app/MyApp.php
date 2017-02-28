<?php

namespace App;

use Monolog\Logger;
use Laravel\Lumen\Application;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SocketHandler;
use Monolog\Formatter\LogstashFormatter;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\NewRelicHandler;

class MyApp extends Application
{
    /**
     * Register container bindings for the application.
     *
     * @return void
     */
    protected function registerLogBindings()
    {
        $this->singleton('Psr\Log\LoggerInterface', function () {
            return new Logger('lumen', $this->getMonologHandler());
        });
    }
    /**
     * Extends the default logging implementation with additional handlers if configured in .env
     *
     * @return array of type \Monolog\Handler\AbstractHandler
     */
    protected function getMonologHandler()
    {
        $handlers = [];
        //$handlers[] = (new StreamHandler(storage_path('logs/lumen.log'), Logger::DEBUG))->setFormatter(new LineFormatter(null, null, true, true));
        if ($addr = getenv('LOG_LOGSTASH')) {
            $handlers[] = (new SocketHandler($addr, Logger::DEBUG))->setFormatter(new LogstashFormatter(getenv('APP_NAME'), getenv('APP_ENV'), null, null));;
        }
        return $handlers;
    }
}
