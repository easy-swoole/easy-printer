<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;


/**
 * 设置推送url接口
 * Class PrinterSetPushUrl
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterSetPushUrl extends BaseCommand
{
    /** @var string 易联云打印机终端号  */
    protected $machine_code;

    /** @var string 打印完成标识oauth_finish，接单拒单标识oauth_getOrder，终端状态标识oauth_printStatus， 按键请求标识oauth_request */
    protected $cmd;

    /** @var  string 开启open，关闭close */
    protected $status;

    /** @var  string 推送地址填写必须以http://或https://开头的地址。推送地址需要支持GET访问，当GET请求访问时，请直接返回{"data":"OK"}，用于推送地址的可用性测试 */
    protected $url ;

    protected $apiUrl = 'https://open-api.10ss.net/oauth/setpushurl';

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
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * @param string $cmd
     */
    public function setCmd($cmd)
    {
        $this->cmd = $cmd;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}