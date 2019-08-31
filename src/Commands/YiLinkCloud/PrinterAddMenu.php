<?php
/**
 * Created by PhpStorm.
 * User: lyp
 * Date: 2019-08-31
 * Time: 10:12
 */

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;


class PrinterAddMenu extends BaseCommand
{
    /** @var  string 打印机终端号 */
    protected $machine_code;
    /** @var  string json格式的应用菜单（其中url和菜单名称需要urlencode) */
    protected $content;
    protected $apiUrl = 'https://open-api.10ss.net/printmenu/addprintmenu';

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


}