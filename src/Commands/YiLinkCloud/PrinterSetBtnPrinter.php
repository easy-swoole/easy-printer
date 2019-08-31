<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 设置打印方式接口
 * Class PrinterSetBtnPrinter
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterSetBtnPrinter extends BaseCommand
{
    /** 开启按键打印 */
    const SET_BTN_OPEN = 'btnopen';
    /** 关闭按键打印 */
    const SET_BTN_CLOSE = 'btnclose';

    /** @var string 易联云打印机终端号  */
    protected $machine_code;

    /** @var  string 开启:btnopen,关闭:btnclose; 按键打印 */
    protected $response_type;

    protected $apiUrl = 'https://open-api.10ss.net/printer/btnprint';

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