<?php

namespace Jagadeshanh\Logaudit;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Jagadeshanh\Logaudit\Mail\ExceptionWasThrown;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/logaudit.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('logaudit.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/views', 'logaudit');

        $this->registerEvent();
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'logaudit'
        );

        $this->app->bind('logaudit', function () {
            return new Logaudit();
        });
    }

    protected function registerEvent()
    {
        Event::listen('Jagadeshanh\Logaudit\Events\ExceptionOccurred', function ($event) {
            $message = (new ExceptionWasThrown($event->exception))
                ->onConnection(config('logaudit.mail_connection'))
                ->onQueue('logaudit.mail_queue');

            Mail::to(config('logaudit.to_email'))->queue($message);
        });
    }
}
