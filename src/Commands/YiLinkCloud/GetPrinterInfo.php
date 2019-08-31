<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取机型打印宽度接口
 * Class GetPrinterInfo
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class GetPrinterInfo extends BaseCommand
{
    /** @var  string 易联云打印机终端号 */
    protected $machine_code;
    protected $apiUrl = 'https://open-api.10ss.net/printer/printinfo';

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