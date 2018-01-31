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
     * @param string  $delimiter.
     *
     * @return string
     */
    public static function trans($string, $delimiter = '')
    {
        $instance = self::getInstance();
        return $instance->permalink($string,is_array($delimiter)?'':$delimiter);
    }

}// END OF CLASS