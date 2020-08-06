<?php

final class king
{

    public static $instance;

    public static function getInstance(): king
    {
        if (!self::$instance) {
            self::$instance = new king();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    public function __clone()
    {
    }

    public function __wakeup()
    {
    }
}
