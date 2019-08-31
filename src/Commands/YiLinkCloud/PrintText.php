<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 文本打印
 * Class PrintText
 * @package Commands\YiLinkCloud
 */
class PrintText extends BaseCommand
{
    protected $content;
    protected $origin_id;
    protected $machine_code;
    protected $apiUrl = 'https://open-api.10ss.net/print/index';

    /**
     * 获取打印内容
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 设置打印内容
     * @param mixed $content
     * @return PrintText
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * 获取内部订单号
     * @return mixed
     */
    public function getOriginId()
    {
        return $this->origin_id;
    }

    /**
     * 设置内部订单号
     * @param mixed $origin_id
     * @return PrintText
     */
    public function setOriginId($origin_id)
    {
        $this->origin_id = $origin_id;
        return $this;
    }

    /**
     * 获取设备代码
     * @return mixed
     */
    public function getMachineCode()
    {
        return $this->machine_code;
    }

    /**
     * 设置设备代码
     * @param mixed $machine_code
     * @return PrintText
     */
    public function setMachineCode($machine_code)
    {
        $this->machine_code = $machine_code;
        return $this;
    }
}