<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 接单拒单设置接口
 * Class PrinterSetIfGetOrder
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterSetIfGetOrder extends BaseCommand
{
    /**  开启接单 */
    const SET_OPEN = 'open';
    /** 拒绝接单 */
    const SET_CLOSE = 'close';

    /** @var string 易联云打印机终端号  */
    protected $machine_code;

    /** @var  string 开启:open,关闭:close */
    protected $response_type;

    protected $apiUrl = 'https://open-api.10ss.net/printer/getorder';

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

    /**
     * @return string
     */
    public function getResponseType()
    {
        return $this->response_type;
    }

    /**
     * @param string $response_type
     */
    public function setResponseType($response_type)
    {
        $this->response_type = $response_type;
    }


}