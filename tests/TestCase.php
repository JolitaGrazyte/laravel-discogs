<?php

namespace Jolita\LaravelDiscogs\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use Jolita\LaravelDiscogs\DiscogsServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [DiscogsServiceProvider::class];
    }
    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('');
        $app['config']->set('app.key', '6rE9Nz59bGRbeMATftriyQjrpF7DcOQm');
    }
}
