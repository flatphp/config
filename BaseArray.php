<?php namespace Flatphp\Config;

class BaseArray
{
    protected static $_pool = [];

    /**
     * @param string $key use dot to find the deep value
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        return isset(self::$_pool[$key]) ? self::$_pool[$key] : $default;
    }

    /**
     * @param string|array $key
     * @param mixed $value
     */
    public static function set($key, $value = null)
    {
        if (is_array($key)) {
            self::$_pool = array_merge(self::$_pool, $key);
        } else {
            self::$_pool[$key] = $value;
        }
    }

    /**
     * Check if exists
     * @param string $key
     * @return bool
     */
    public static function has($key)
    {
        return isset(self::$_pool[$key]);
    }

    /**
     * Get all data
     * @return array
     */
    public static function all()
    {
        return self::$_pool;
    }
}