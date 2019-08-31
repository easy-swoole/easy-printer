<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 取消单条未打印订单
 * Class PrinterCancelOne
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterCancelOne extends BaseCommand
{
    /** @var string 易联云打印机终端号  */
    protected $machine_code;

    /** @var  string 通过打印接口返回的订单号 详见API文档列表-打印接口 */
    protected $order_id;

    protected $apiUrl = 'https://open-api.10ss.net/printer/cancelone';

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
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }


}