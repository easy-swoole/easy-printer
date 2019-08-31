<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取机型软硬件版本接口
 * Class PrinterGetVersion
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterGetVersion extends BaseCommand
{
    /** @var  string 易联云打印机终端号 */
    protected $machine_code;
    protected $apiUrl = 'https://open-api.10ss.net/printer/getversion';

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