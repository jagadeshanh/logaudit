<?php

namespace Jagadeshanh\Logaudit\Tests;

use Jagadeshanh\Logaudit\Facades\Logaudit;
use Jagadeshanh\Logaudit\ServiceProvider;
use Orchestra\Testbench\TestCase;

class LogauditTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'logaudit' => Logaudit::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
