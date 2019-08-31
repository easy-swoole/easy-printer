<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 取消所有未打印订单
 * Class PrinterCancelAll
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterCancelAll extends BaseCommand
{
    /** @var  string 易联云打印机终端号 */
    protected $machine_code;
    protected $apiUrl = 'https://open-api.10ss.net/printer/cancelall';

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