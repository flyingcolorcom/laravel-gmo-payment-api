<?php

namespace ShibuyaKosuke\LaravelGmoPaymentApi\Enums;

/**
 * Class GmoApiResponseType
 * @package ShibuyaKosuke\LaravelGmoPaymentApi\Enums
 */
final class GmoApiResponseType
{
    /**
     * FORM
     */
    public const TYPE_AS_FORM = 1;

    /**
     * JSON
     */
    public const TYPE_AS_JSON = 2;

    /**
     * @param integer $value
     * @return mixed
     */
    public static function getDescription($value): string
    {
        switch ($value) {
            case self::TYPE_AS_FORM:
                return 'idPass';
            case self::TYPE_AS_JSON:
                return 'json';
        }
        return 'idPass';
    }
}
