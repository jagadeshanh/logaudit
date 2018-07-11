<?php

namespace Jagadeshanh\Logaudit\Facades;

use Illuminate\Support\Facades\Facade;

class Logaudit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'logaudit';
    }
}
