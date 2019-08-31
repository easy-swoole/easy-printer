<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 终端授权 (永久授权)
 * Class AuthorizePrinter
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class AuthorizePrinter extends BaseCommand
{
    protected $apiUrl = 'https://open-api.10ss.net/printer/addprinter';
    protected $machine_code ; //易联云打印机终端号
    protected $msign ;  //易联云终端密钥
    protected $phone = '';  //手机卡号码(可填)
    protected $print_name = ''; //自定义打印机名称(可填)

    /**
     * @return mixed
     */
    public function getMachineCode()
    {
        return $this->machine_code;
    }

    /**
     * @param mixed $machine_code
     */
    public function setMachineCode($machine_code)
    {
        $this->machine_code = $machine_code;
    }

    /**
     * @return mixed
     */
    public function getMsign()
    {
        return $this->msign;
    }

    /**
     * @param mixed $msign
     */
    public function setMsign($msign)
    {
        $this->msign = $msign;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPrintName()
    {
        return $this->print_name;
    }

    /**
     * @param string $print_name
     */
    public function setPrintName($print_name)
    {
        $this->print_name = $print_name;
    }

}