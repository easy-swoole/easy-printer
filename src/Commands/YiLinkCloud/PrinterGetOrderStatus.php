<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取订单状态接口
 * Class PrinterGetOrderStatus
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterGetOrderStatus extends BaseCommand
{
    /** @var string 易联云打印机终端号  */
    protected $machine_code;

    /** @var  string 易联云订单id */
    protected $order_id;

    protected $apiUrl='https://open-api.10ss.net/printer/getorderstatus';

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