<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;


/**
 * 删除终端授权
 * Class PrinterDeletePrinter
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterDeletePrinter extends BaseCommand
{
    /** @var  string 打印机终端号 */
    protected $machine_code;
    protected $apiUrl = 'https://open-api.10ss.net/printer/deleteprinter';

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