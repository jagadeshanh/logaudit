<?php

namespace Jagadeshanh\Logaudit\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ExceptionOccurred
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Exception instance
     *
     * @var \Exception
     */
    public $exception;

    /**
     * Create a new event instance.
     *
     * @param \Exception $exception
     */
    public function __construct(\Exception $exception)
    {
        Log::info('exception was thrown');
        $this->exception = $exception;
    }
}
