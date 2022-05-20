<?php
/**
 * User: filway
 * Email: filway@126.com
 * Date: 2022/5/21
 * Time: 00:20
 */

namespace Filway\Component;


trait Singleton
{
    private static $instance;

    /**
     * @param mixed ...$args
     * @return static
     */
    static function getInstance(...$args)
    {
        if(!isset(static::$instance)){
            static::$instance = new static(...$args);
        }
        return static::$instance;
    }
}