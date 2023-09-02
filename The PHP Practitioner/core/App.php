<?php

 namespace App\core;
Class App {

    protected  static $registry =[] ;

    public static function bind ($key,$value)
    {
        static::$registry[$key]=$value;
    }

    public static function get($key) {
        if (!array_key_exists($key,static::$registry))
        {
            throw new Exception("NO $key is found");
        }
        return static::$registry[$key];
    }

}