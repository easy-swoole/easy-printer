<?php
/**
 * Created by PhpStorm.
 * User: lyp
 * Date: 2019-08-31
 * Time: 10:14
 */

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;


class PrinterShutdownRestart extends BaseCommand
{
    //重启
    const EXECUTE_RESTART = 'restart';
    //关闭
    const EXECUTE_SHUTDOWN = 'shutdown';

    /** @var  string 打印机终端号 */
    protected $machine_code;

    /** @var  string 重启:restart,关闭:shutdown */
    protected $response_type;

    protected $apiUrl = 'https://open-api.10ss.net/printer/shutdownrestart';

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