<?php

/**
 * @author Jared King <j@jaredtking.com>
 *
 * @link http://jaredtking.com
 *
 * @copyright 2015 Jared King
 * @license MIT
 */
use Infuse\Application;
use Infuse\Services\Logger;

class LoggerTest extends PHPUnit_Framework_TestCase
{
    public function testInvoke()
    {
        $config = [
            'site' => [
                'hostname' => 'example.com',
            ],
            'logger' => [
                'enabled' => true,
            ],
        ];
        $app = new Application($config);
        $service = new Logger($app);
        $logger = $service($app);

        $this->assertInstanceOf('Monolog\Logger', $logger);
    }

    public function testInvokeDisabled()
    {
        $config = [
            'site' => [
                'hostname' => 'example.com',
            ],
            'logger' => [
                'enabled' => false,
            ],
        ];
        $app = new Application($config);
        $service = new Logger($app);
        $logger = $service($app);

        $this->assertInstanceOf('Monolog\Logger', $logger);
    }
}
