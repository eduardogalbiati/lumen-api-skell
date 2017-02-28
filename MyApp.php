<?php

namespace App;

use Monolog\Logger;
use Laravel\Lumen\Application;
use Monolog\Handler\StreamHandler;
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
        $handlers[] = (new StreamHandler(storage_path('logs/lumen.log'), Logger::DEBUG))->setFormatter(new LineFormatter(null, null, true, true));
        if($addr = getenv('LOG_LOGSTASH'))
        $handlers[] = (new StreamHandler('tcp://'.$addr, Logger::DEBUG))->setFormatter(new LogstashFormatter(null, null, true, true));
        /*if (extension_loaded('newrelic')) {
            // configure New Relic monolog Handler
            newrelic_set_appname(env('APP_NAME', 'Hodor v2'));
            $handlers[] = new NewRelicHandler(Logger::ERROR, true);
        }*/
        return $handlers;
    }
}
