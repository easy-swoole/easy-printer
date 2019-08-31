<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 设置内置语音接口
 * Class PrinterSetVoice
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterSetVoice extends BaseCommand
{
    /** @var string  易联云打印机终端号 */
    protected $machine_code;
    /** @var string  播报内容 , 音量(1~9) , 声音类型(0,1,3,4) 组成json ! 示例 ["测试",9,0] 或者是在线语音链接! 语音内容请小于24kb */
    protected $content;
    /** @var  boolean true or false , 判断content是否为在线语音链接 */
    protected $is_file;
    /** @var  0~9 , 定义需设置的语音编号,若不提交,默认升序 */
    protected $aid;
    protected $apiUrl = 'https://open-api.10ss.net/printer/setvoice';

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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return bool
     */
    public function isFile()
    {
        return $this->is_file;
    }

    /**
     * @param bool $is_file
     */
    public function setIsFile($is_file)
    {
        $this->is_file = $is_file;
    }

    /**
     * @return mixed
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param mixed $aid
     */
    public function setAid($aid)
    {
        $this->aid = $aid;
    }

}