<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取终端状态接口
 * return  state  0离线 1在线 2缺纸
 * Class GetPrinterStatus
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class GetPrinterStatus extends BaseCommand
{
    /** @var string 易联云打印机终端号  */
    protected $machine_code;

    protected $apiUrl = 'https://open-api.10ss.net/printer/getprintstatus';

    /**
     * @return string
     */
    public function getMachineCode()
    {
        return $this->machine_code;
    }

    /**
     * @param string $machine_code
     */
    public function setMachineCode($machine_code)
    {
        $this->machine_code = $machine_code;
    }
}