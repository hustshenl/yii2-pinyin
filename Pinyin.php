<?php

namespace hustshenl\pinyin;

use Overtrue\Pinyin\Pinyin as BasePinyin;

class Pinyin extends BasePinyin
{

    /**
     * The instance.
     *
     * @var static
     */
    private static $_instance;

    /**
     * Get class instance
     *
     * @return \hustshenl\pinyin\Pinyin
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new static;
        }

        return self::$_instance;
    }


    /**
     * Chinese to pinyin.
     *
     * @param string $string  source string.
     * @param array  $settings settings.
     *
     * @return string
     */
    public static function trans($string, array $settings = [])
    {
        $instance = self::getInstance();
        $parsed = $instance->convert($string);
        return $parsed['pinyin'];
    }

    /**
     * Get first letters of string.
     *
     * @param string $string   source string.
     * @param array $settings settings
     *
     * @return string
     */
    public static function letter($string, array $settings = [])
    {
        $parsed = self::parse($string, $settings);

        return $parsed['letter'];
    }

}// END OF CLASS