# EasyPrinter

全协程支持的云打印机SDK，易于使用的操作接口和风格，轻松推送海量任务至云打印机

> 目前仅支持易联云，欢迎fork本项目贡献您的力量

### 单文件测试

```php
<?php

use EasySwoole\EasyPrinter\Commands\YiLinkCloud\PrintText;
use EasySwoole\EasyPrinter\EasyPrinter;

require_once 'vendor/autoload.php';

go(function () {

    $clientId = '您的易联云应用ID';
    $clientSecret = '您的易联云应用秘钥';
    $driver = EasyPrinter::yiLinkCloud($clientId, $clientSecret);

    // 新建一条命令
    $PrintCommand = new PrintText();
    $PrintCommand->setMachineCode('打印机编号');
    $PrintCommand->setContent('欢迎使用EasyPrinter!');
    $PrintCommand->setOriginId(md5(microtime()));

    try {
        $response = $driver->sendCommand($PrintCommand);
        var_dump($response);
    } catch (Throwable $throwable) {

    }

});
```