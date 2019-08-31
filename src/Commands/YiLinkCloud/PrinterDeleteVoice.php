<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;


/**
 * 删除内置语音接口
 * Class PrinterDeleteVoice
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterDeleteVoice extends BaseCommand
{
    /** @var  string 打印机终端号 */
    protected $machine_code;
    /** @var  int 0~9 , 定义需删除的语音编号 */
    protected $aid;
    protected $apiUrl = 'https://open-api.10ss.net/printer/deletevoice';

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
     * @return int
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param int $aid
     */
    public function setAid($aid)
    {
        $this->aid = $aid;
    }




}