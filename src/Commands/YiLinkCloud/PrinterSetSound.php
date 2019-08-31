<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 声音调节接口
 * Class PrinterSetSound
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterSetSound extends BaseCommand
{
    /** 蜂鸣器 */
    const SET_RESPONSE_TYPE_BUZZER = 'buzzer';
    /** 喇叭 */
    const SET_RESPONSE_TYPE_HORN = 'horn';

    /** @var  string 易联云打印机终端号 */
    protected $machine_code;
    /** @var  string 蜂鸣器:buzzer,喇叭:horn */
    protected $response_type;
    /** @var  string [0,1,2,3] 4种音量设置 */
    protected $voice;
    protected $apiUrl = 'https://open-api.10ss.net/printer/setsound';

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

    /**
     * @return string
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * @param string $voice
     */
    public function setVoice($voice)
    {
        $this->voice = $voice;
    }


}