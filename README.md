# EasyPrinter

全协程支持的云打印机SDK，易于使用的操作接口和风格，轻松推送海量任务至云打印机

> 目前仅支持易联云，欢迎fork本项目贡献您的力量

### 安装类库

推荐使用Composer管理依赖，本类库要求Swoole环境，版本>=4.3.0，PHP版本>=7.1即可食用

> composer require easyswoole/easy-printer

### 单文件测试

```php
<?php

use EasySwoole\EasyPrinter\Commands\YiLinkCloud\PrintText;
use EasySwoole\EasyPrinter\EasyPrinter;

require_once 'vendor/autoload.php';

go(function () {
    
    $cache = new Cache(); // implements CacheInterface
    $clientId = '您的易联云应用ID';
    $clientSecret = '您的易联云应用秘钥';
    $driver = EasyPrinter::yiLinkCloud($clientId, $clientSecret,$cache);

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

### 目前已支持的指令

| 服务商 | 说明                | Command                   |
| :------: | ------------------- | ------------------------- |
| 易联云 | 终端授权 (永久授权) | AuthorizePrinter          |
| 易联云 | 获取请求令牌        | GetAccessToken            |
| 易联云 | 获取机型打印宽度    | GetPrinterInfo            |
| 易联云 | 获取终端状态        | GetPrinterStatus          |
| 易联云 | 添加应用菜单        | PrinterAddMenu            |
| 易联云 | 取消所有未打印订单  | PrinterCancelAll          |
| 易联云 | 取消单条未打印订单  | PrinterCancelOne          |
| 易联云 | 取消LOGO            | PrinterDeleteIcon         |
| 易联云 | 删除终端授权        | PrinterDeletePrinter      |
| 易联云 | 删除内置语音        | PrinterDeleteVoice        |
| 易联云 | 获取订单列表        | PrinterGetOrderPagingList |
| 易联云 | 获取订单状态        | PrinterGetOrderStatus     |
| 易联云 | 获取机型软硬件版本  | PrinterGetVersion         |
| 易联云 | 设置打印方式        | PrinterSetBtnPrinter      |
| 易联云 | 设置LOGO            | PrinterSetIcon            |
| 易联云 | 接单拒单设置        | PrinterSetIfGetOrder      |
| 易联云 | 设置推送URL         | PrinterSetPushUrl         |
| 易联云 | 声音调节            | PrinterSetSound           |
| 易联云 | 设置内置语音        | PrinterSetVoice           |
| 易联云 | 关机重启            | PrinterShutdownRestart    |
| 易联云 | 打印图片            | PrintPicture              |
| 易联云 | 打印文字            | PrintText                 |