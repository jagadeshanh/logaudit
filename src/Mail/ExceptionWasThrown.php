<?php

namespace Jagadeshanh\Logaudit\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class ExceptionWasThrown extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Exception instance
     *
     * @var \Exception
     */
    public $exception;

    /**
     * Create a new message instance.
     *
     * @param \Exception $exception
     */
    public function __construct(\Exception $exception)
    {
        $this->exception = $exception;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('logaudit::emails.logaudit.exception');
    }
}
