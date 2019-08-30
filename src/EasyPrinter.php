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
     * @var YiLinkCloudDriver
     */
    private static $yiLinkCloud;

    public static function yiLinkCloud($clientId, $clientSecret)
    {
        if (!(static::$yiLinkCloud instanceof YiLinkCloudDriver)) {
            static::$yiLinkCloud = new YiLinkCloudDriver($clientId, $clientSecret);
        }
        return static::$yiLinkCloud;
    }
}