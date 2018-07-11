<?php

namespace Jagadeshanh\Logaudit\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
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
