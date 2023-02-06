<?php

namespace Singleton;

use Exception;

abstract class Singleton
{
    private static self $instance;

    protected function __construct() {}

    protected function __clone() {}

    /**
     * @return mixed
     * @throws Exception
     */
    public function __wakeup() {
        throw new Exception('Cannot unserialize a singleton');
    }

    public static function getInstance(): Singleton|static
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}