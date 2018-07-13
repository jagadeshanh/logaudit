<?php

return [
    'mail_queue'      => env('LOGAUDIT_MAIL_QUEUE', 'sync'),
    'mail_connection' => env('LOGAUDIT_MAIL_CONNECTION', 'sync'),
    'to_email'        => env('LOGAUDIT_TO_EMAIL', ['exceptions@example.com'])
];
