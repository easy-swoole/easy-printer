<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 取消logo接口
 * Class PrinterDeleteIcon
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterDeleteIcon extends BaseCommand
{
    /** @var string 易联云打印机终端号  */
    protected $machine_code;

    protected $apiUrl = 'https://open-api.10ss.net/printer/deleteicon';

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