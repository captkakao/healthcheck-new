<?php

namespace Adata\HealthChecker\Tests;

use Adata\HealthChecker\HealthCheckerProvider;
use GuzzleHttp\Client;
use \Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected $guzzleClientStub;

    public function setUp(): void
    {
        parent::setUp();
        $this->guzzleClientStub = $this->createStub(Client::class);
    }

    protected function getPackageProviders($app)
    {
        return [
            HealthCheckerProvider::class,
        ];
    }
}