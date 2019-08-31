<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 设置logo接口
 * Class PrinterSetIcon
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterSetIcon extends BaseCommand
{
    /** @var string 易联云打印机终端号  */
    protected $machine_code;

    /** @var  string 图片地址,图片宽度最大为350px,文件大小不能超过40Kb */
    protected $img_url;

    protected $apiUrl = 'https://open-api.10ss.net/printer/seticon';

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
    public function getImgUrl()
    {
        return $this->img_url;
    }

    /**
     * @param string $img_url
     */
    public function setImgUrl($img_url)
    {
        $this->img_url = $img_url;
    }


}