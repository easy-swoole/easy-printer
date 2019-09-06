<?php

namespace EasySwoole\EasyPrinter;

use EasySwoole\EasyPrinter\Drivers\YiLinkCloudDriver;

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
     * @param $clientId
     * @param $clientSecret
     * @return YiLinkCloudDriver
     */
    public static function yiLinkCloud($clientId, $clientSecret)
    {
        if (!isset(static::$yiLinkClouds[$clientId]) || !(static::$yiLinkClouds[$clientId] instanceof YiLinkCloudDriver)) {
            static::$yiLinkClouds[$clientId] = new YiLinkCloudDriver($clientId, $clientSecret);
        }
        return static::$yiLinkClouds[$clientId];
    }
}