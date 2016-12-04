<?php

class Gorkamu extends PutoAmo
{
    public static $blog = 'http://gorkamu.com';

    public static function cualEsMiBlog() {
        echo self::$blog . "\n";
    }
}

Gorkamu::cualEsMiBlog(); // http://gorkamu.com