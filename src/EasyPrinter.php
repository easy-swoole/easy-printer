<?php

namespace EasySwoole\EasyPrinter;

use EasySwoole\EasyPrinter\Drivers\YiLinkCloudDriver;
use Psr\SimpleCache\CacheInterface;

/**
 * 云打印SDK集成
 * Class EasyPrinter
 */
class EasyPrinter
{
    /**
     * 易联云打印
     * @var YiLinkCloudDriver[]
     */
    private static $yiLinkClouds = [];

    /**
     * 获得易联云实例
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param CacheInterface $cache
     * @return YiLinkCloudDriver
     */
    public static function yiLinkCloud(string $clientId, string $clientSecret, CacheInterface $cache):YiLinkCloudDriver
    {
        if (!isset(static::$yiLinkClouds[$clientId]) || !(static::$yiLinkClouds[$clientId] instanceof YiLinkCloudDriver)) {
            static::$yiLinkClouds[$clientId] = new YiLinkCloudDriver($clientId, $clientSecret, $cache);
        }
        return static::$yiLinkClouds[$clientId];
    }
}