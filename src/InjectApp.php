<?php

/**
 * @author Jared King <j@jaredtking.com>
 *
 * @link http://jaredtking.com
 *
 * @copyright 2015 Jared King
 * @license MIT
 */
namespace Infuse;

trait InjectApp
{
    protected $app;

    /**
     * Injects an app container.
     *
     * @param App $app container
     *
     * @return self
     */
    public function injectApp(App $app)
    {
        $this->app = $app;

        return $this;
    }
}
