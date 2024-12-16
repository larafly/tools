<?php

namespace Larafly\Tools;

class EnvUtil
{
    public const  LOCAL = 'local';
    public const  TEST = 'test';
    public const  PRODUCTION = 'production';

    /**
     * is local environment
     * @return bool
     */
    public static function isLocal(): bool
    {
        return self::LOCAL === config('app.env');
    }

    /**
     * is tested environment
     * @return bool
     */
    public static function isTest(): bool
    {
        return str_contains(config('app.env'), self::TEST);
    }

    /**
     * is production environment
     * @return bool
     */
    public static function isProduction(): bool
    {
        return self::PRODUCTION === config('app.env');
    }
}
