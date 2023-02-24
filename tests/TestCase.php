<?php

namespace Skeleton\Tests;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    use CreatesApplication;

    /** @var \Invertus\Laracore\Vendor\Foundation\Application\Application */
    protected $app;

    public function setUp()
    {
        parent::setUp();

        if (!$this->app) {
            $this->refreshApplication();
        }
    }

    protected function tearDown()
    {
        parent::tearDown();

        $this->app->flush();
        $this->app = null;
    }

    /**
     * Refresh the application instance.
     *
     * @return void
     */
    protected function refreshApplication()
    {
        $this->app = $this->createApplication();
    }
}